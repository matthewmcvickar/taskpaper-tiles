<?php

/*

# Generate Taskpaper Month

By Matthew McVickar

Creates a month list for the requested month and year (or the current month and year, if unspecified) in TaskPaper, populating days with items as specified in the plaintext hierarchy below.

## TODO

In order of importance:

- 'next month' button
- 'now' button
- Using cookies for storage is OK, but only if the user always uses the same browser. LocalStorage has the same problem. Use a text file in the directory?
- way to set events on the last day of month (because it changes).
- The plaintext list should allow for notes below items.
- Is the code that generates the list too ugly?

*/


// If a new 'items' value was set, update the cookie. Expiration is one year, and should always be enough, since this will be set by this script running at least once a month.
if ($_REQUEST['items'])
  setcookie('items', $_REQUEST['items'], time()+315569260);

// If the cookie exists, get its value. Otherwise populate the items with sample data.
if ($_COOKIE['items'])
  $items_plaintext = $_COOKIE['items'];
else
  $items_plaintext = "1\n  foo bar baz\n14\n  lorem ipsum\n30\n  dolor sit\n  amet\n  adispicium";

// Create a flat array from the plaintext above by splitting the text by newlines that contain a number.
$items_array = preg_split('~\n([0-9]+)~', "\n" . $items_plaintext, NULL, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

// Build a multidimensional array from the flat one by iterating through odd and even numbers in the array.
foreach (range(0, count($items_array) - 1, 2) as $key)
  $items[$items_array[$key]] = $items_array[$key + 1];

// Turn the list within each day into an array by splitting it by newlines.
foreach ($items as $key => $value)
  $items[$key] = explode("\n", trim($value));

// Set timezone so that PHP doesn't freak out.
date_default_timezone_set('UTC');

// Some defaults.
$this_year = date('Y');
$this_month = date('m');
$this_day = date('d');

// Capture POST and GET.
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];
?><!doctype html>

<html>
  <head>
    <title>Taskpaper Month Generator</title>
    <style>
    html,
    body
    {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body
    {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 16px;
    }

    form
    {
      float: left;
      background: #eee;
      padding: 1%;
      width: 48%;
      height: 100%;
    }

    form textarea
    {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 16px;
      height: 90%;
      width: 99%;
      resize: none;
    }

    form select,
    form input
    {
      float: left;
      font-size: 16px;
      margin: 1em 1em 1em 0;
    }

    textarea.taskpaper_month
    {
      float: left;
      height: 98%;
      width: 48%;
      border: 0;
      font-family: Helvetica, Arial, sans-serif;
      font-size: 16px;
      line-height: 1.2;
      padding: 1%;
      resize: none;
    }
    </style>
  </head>
  <body>
    <form action="./generate_taskpaper_month.php" method="post">
      <textarea name="items"><?php print($items_plaintext); ?></textarea>

      <select name="month">
        <?php
        for ($i = 1; $i < 13; $i++)
        {
          if ($i < 10)
            $i = '0' . $i;

          print("\n<option value=\"$i\"");

          if ($i == $month)
            print(' selected');
          elseif ($i == $this_month)
            print(' selected');

          print('>' . date('F', mktime(0, 0, 0, $i, 1, 1)) . '</option>');
        }
        ?>
      </select>

      <select name="year">
        <?php
        for ($i = $this_year; $i <= $this_year + 1; $i++)
        {
          print("\n<option value=\"$i\"");

          if ($i == $year)
            print(' selected');
          elseif ($i == $this_year)
            print(' selected');

          print('>' . $i . '</option>');
        }
        ?>
      </select>

      <input type="submit" value="Go">
    </form>

<textarea class="taskpaper_month" onclick="this.select();"><?php

if ($month)
  $days = date('t', mktime(0, 0, 0, $month, 1, date('Y')));
elseif ($month && $year)
  $days = date('t', mktime(0, 0, 0, $month, 1, $year));
else
  $days = date('t', mktime(0, 0, 0, date('m'), 1, date('Y')));

for($day = 1; $day <= $days; $day++)
{
  if ($month)
    print('
' . date('d l', mktime(0, 0, 0, $month, $day, date('Y'))) . ':');

  elseif ($month && $year)
    print('
' . date('d l', mktime(0, 0, 0, $month, $day, $year)) . ':');

  else
    print('
' . date('d l', mktime(0, 0, 0, date('m'), $day, date('Y'))) . ':');

  if ($items[$day])
    foreach ($items[$day] as $item)
      print("\n\t- " . trim($item));

  if ($day == $days)
    print("
\t- generate new Taskpaper month
\t\thttp://localhost/taskpaper-tiles/generate_taskpaper_month.php?month=" . date('m', strtotime('next month')));
}

?></textarea>
  </body>
</html>