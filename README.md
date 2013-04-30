# TaskPaper Tiles

*By Matthew McVickar*

[Version History](https://github.com/matthewmcvickar/taskpapertiles/wiki/Version-History)

An organizational method and task management system that uses TaskPaper and a few scripts. It is lightweight, easy, and unobtrusive. I use this system as-is every day, but please consider it a starting point rather than dogma. **You should use whichever set of methods and tools helps you work the most effectively.** I encourage experimentation and customization, but only as much as it takes to feel comfortable in the system and then get [back to work](http://5by5.tv/b2w).

![Taskpaper Screenshot](https://github.com/matthewmcvickar/taskpapertiles/blob/master/screenshot.png?raw=true)

## The Basics

This system works with the wonderfully simple [TaskPaper](http://www.hogbaysoftware.com/products/taskpaper).

All projects, tasks, events, and notes are listed in one of five windows, or 'tiles': **Todo**, **Daily**, **Monthly**, **Waiting**, and **Scratchpad**. The entire set of five tiles is referenced repeatedly throughout the day as necessary. Enter your tasks in whichever tile you deem appropriate, and reorganize/add/edit/delete them as you work.

The screenshot above shows my recommended placement and size for each tile. Adjust as necessary.

## The Tiles

### Todo

Every task that isn't recurring, doesn't have a scheduled date, and isn't in another task management system like Basecamp or GitHub stays here. These are personal todos--for hobbies, side-projects, or certain freelance work. I use the TaskPaper table-of-contents sidebar to break it up. At the very bottom of this list is the Someday/Maybe pile.

### Daily

A heading for things that recur each day of the week, as well as things to be done each morning and night or on a certain day. My two lists in here are 'Daily' and 'Sunday'.

### Monthly

A heading for each day of the month. If you're familiar with [GTD](http://www.davidco.com/about-gtd), this is something of a tickler file. You can move tasks into this tile from **Todo** if you want to schedule them for a particular day. I use **Monthly** for tasks and all of my events and appointments.

This list can be generated using the [TaskPaper Month Generator](http://taskpaper-month-generator.herokuapp.com) (which has its [own repository](https://github.com/matthewmcvickar/taskpaper-month-generator)). You can use a very simple syntax to add tasks to the generated month.

### Waiting

Keep track of incoming postal packages, money owed, and entertainment with a release date--things you have no direct control over but of which you want to keep track.

### Scratchpad

Absolutely anything can go here. I don't let anything stay for more than a day or so — this is for information you need but don't want to commit to permanent storage or things you don't know if you'll need until a little while later. I love this tile because it allows me to just dump things for later and not worry about where to put them or where to find them later.

## Tips

- I use the 'Standard' theme with a base font of Helvetica 14pt. All-black everything. No note handles, no project handles, no projects list vertical divider.

- The perfect placement of the tiles is accomplished with [Divvy](http://mizage.com/divvy/).

- Do a review of all of the panels at the end of each week to stay on top of it and get rid of things you'll never do. I have **Taskpaper Review** in my **Sunday** list in the **Weekly** list.

- You can use the Quick Entry window in TaskPaper to add tasks for later sorting. I set the destination document as **Scratchpad**.

- Set a keyboard shortcut to open and hide TaskPaper so that you can get to it (and then get out of it) instantly. I use F5. The included AppleScript will do this. To activate it with a key, you can turn it into a service and attach a keyboard shortcut in the Keyboard panel of System Preferences, use [FastScripts](http://www.red-sweater.com/fastscripts/), or use your application launcher of choice (I use [Alfred](http://www.alfredapp.com/)).

- Store the five `.taskpaper` documents in a Dropbox folder so that they are backed up, versioned, and accessible from anywhere, like the Taskpaper iOS app.

- For extended, complex, and collaborative projects (like website or application development), I use issue trackers and collaborative project management software (like Basecamp or GitHub). TaskPaper Tiles is for everything else. (Although I do keep a short list of my own, current and upcoming tasks for those kinds of projects in TaskPaper, and use it as a place to enter tasks quickly for later organization into a collaborative system.)

- Store notes and ideas in [Notational Velocity](http://notational.net/). Extended sets of notes don't belong in TaskPaper Tiles; the idea is easily-manageable brevity.