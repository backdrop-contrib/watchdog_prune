Watchdog Prune
========================
Richard Peacock - richard@peacocksoftware.com


This module will allow you to selectively delete watchdog entries based on
criteria, like age.

Drupal normally only deletes watchdog entries after 1,000 to 1,000,000 entries.

Instead, you can use this module to say "Delete entries older than 2 years", for example.
This allows your site to guarantee that it retains watchdog entries for a certain time,
regardless of how many entries are accumulated.  However, it also lets you still remove
entries from the table eventually, so as not to have a watchdog table which is too large.

This module is ideal for sites where entries should be kept for a certain amount of time,
and for the purpose of generating reports based on user activity, without the worry that
entries might start getting deleted by Drupal before a report can be run.



Watchdog Prune
======================

This module will allow you to selectively delete watchdog entries based on
criteria, like age.

Drupal normally only deletes watchdog entries after 1,000 to 1,000,000 entries.

Instead, you can use this module to say "Delete entries older than 2 years", for example,
or "Delete 'user' entries after 3 months', etc.



Installation
------------

- Install this module using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/modules


Current Maintainers
-------------------

- Richard Peacock (https://github.com/swampopus)

Credits
-------

This module is based on the Drupal module watchdog_prune-7.x-1.2

Project page: https://www.drupal.org/project/watchdog_prune

Drupal Maintainers:
- Richard Peacock (https://www.drupal.org/u/richardp)
- Thom Wilhelm (https://www.drupal.org/u/thomwilhelm)
- Vishwa Chikate (https://www.drupal.org/u/vishwac9)


License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.