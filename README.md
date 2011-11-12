# TaskPaper Tiles

*By Matthew McVickar*

An organizational method and task management system that uses TaskPaper and a few scripts. It is lightweight, easy, and unobtrusive. I use this system as-is every day, but please consider it a starting point rather than dogma. **You should use whichever set of methods and tools helps you work the most effectively.** I encourage experimentation and customization, but only as much as it takes to feel comfortable in the system and then get [back to work](http://5by5.tv/b2w).

![Taskpaper Screenshot](https://github.com/matthewmcvickar/taskpaper-tiles/blob/master/screenshot.png?raw=true)

## The Basics

This system works with the wonderfully simple [TaskPaper](http://www.hogbaysoftware.com/products/taskpaper).

All projects, tasks, events, and notes are listed in one of five windows, or 'tiles': **Monthly**, **Weekly**, **Today**, **Todo**, **Money**, and **Scratchpad**. The entire set of five tiles is referenced repeatedly throughout the day as necessary. Enter your tasks in whichever tile you deem appropriate, and reorganize/add/edit/delete them as you work.

The screenshot above shows my recommended placement and size for each tile. Adjust as necessary.

## The Tiles

### Monthly

A heading for each day of the month. If you're familiar with [GTD](http://www.davidco.com/about-gtd), this is something of a tickler file. You can move tasks into this tile from **Todo** if you want to schedule them for a particular day. I use **Monthly** for tasks and all of my events and appointments.

The `generate_taskpaper_month.php` script is used to generate this list, complete with a customizable set of tasks that repeat on specified days each month — you can run it on your website or localhost.

### Weekly

A heading for things that recur each weekday, as well as things to be done each morning and night.

### Today

Things intended to be done today. This tile is small on purpose.

### Todo

Every task that isn't recurring and doesn't have a scheduled date. I typically move items from **Todo** into **Today** at the end of each day to prepare for tomorrow. I try not to let this tile scroll (keep todos to a minimum).

### Finance

Keeping track of bills to pay and income owed. This is a recent addition and I don't know if it will survive, but it's useful if you don't have another bookkeeping system. (I use this tile, a Numbers.app file with a half-dozen spreadsheets in it, Mint, and a few envelopes in my closet.)

### Scratchpad

Absolutely anything can go here. I don't let anything stay for more than a day or so — this is for information you need but don't want to commit to permanent storage or things you don't know if you'll need until a little while later. I love this tile because it allows me to just dump things for later and not worry about where to put them or where to find them later.

## Tips

- I use the 'Standard' theme with a base font of Helvetica 14pt. All-black everything. No note handles, no project handles, no projects list vertical divider.

- The perfect placement of the tiles is accomplished with [Divvy](http://mizage.com/divvy/).

- Do a review of all of the panels at the end of each day or each week to stay on top of it and get rid of things you'll never do.

- Use the Quick Entry window in TaskPaper to add tasks for later sorting. The first time the Quick Entry window comes up, set the destination document to 'Todo.taskpaper' and it will end up at the top of that document, above the **↑ Inbox** heading.

- Set a keyboard shortcut to open and hide TaskPaper so that you can get to it (and then get out of it) instantly. I use F5. The AppleScript included will do this. To activate it with a key you can turn it into a service and attach a keyboard shortcut in the Keyboard panel of System Preferences, use [FastScripts](http://www.red-sweater.com/fastscripts/), or use your application launcher of choice (I use [Alfred](http://www.alfredapp.com/)).

- Store the five .taskpaper documents in a Dropbox folder so that they are backed up, versioned, and accessible from anywhere.

- You may choose to use TaskPaper's built in task-management capabilities to mark things as done. Or you can just delete them. I keep finished tasks around until the end of the day for two reasons:
	1. I mark them with time as I'm working for time-reporting purposes.
	2. I send the entire list to [iDoneThis](http://idonethis.com/) every night.

- Store notes and ideas in [Notational Velocity](http://notational.net/). 'Someday/Maybe' tasks don't belong in here — they take up space and you shouldn't look at them every day.

## Version History

### 2011-11-11

- Refined the syntax on the recurring item field of the month generator script to be two returns after a list of items under a day, no indentation for items under days. Like this:

			1
			lorem ipsum
			dolor sit

			14
			adispicium elit
- Put the dropdown fields and submit button above the recurring items field.

### 2011-11-10

- Made my existing system into a project.
- Refined the month generator script into something usable without editing underlying code.

## TODO:

- Create an installation script.
	- Set the tile position and sizes.
	- Set up some of the recommended usage in the 'Tips' section above?
- Improve the month generator (see the TODOs at the top of that file).
- Design a custom stylesheet.
- Make a website that explains this better.