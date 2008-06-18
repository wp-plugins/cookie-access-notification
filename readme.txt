=== Cookie Access Notification ===
Contributors: Alphawolf
Donate link: http://www.schloebe.de/donate/
Tags: cookie, notification, admin, email, comment, commentator, commentor
Requires at least: 1.5
Tested up to: 2.5+
Stable tag: trunk

Sends out an email to the blog admin when a commenter accesses the blog with a certain username/ email address/ website url.

== Description ==

Sends out an email to the blog admin when a commenter accesses the blog with a certain username/ email address/ website url. The email will be sent out only once a visitor's browser session to avoid email spam to you. ;-)

There's only one thing to be edited in order to make this work for your needs. Line 20:

`<?php $_COOKIE["comment_author_" . COOKIEHASH] == 'Alphawolf' ?>`

That's where you put what to check for. If you want to check for a commentor's username, leave as it is (but change 'Alphawolf' to the commentor's name you want to check for, of course ;-)). You can also check for a commentator's email address or website url like this:

`<?php $_COOKIE["comment_author_url_" . COOKIEHASH] == 'http://www.domain.com' ?>`

`<?php $_COOKIE["comment_author_email_" . COOKIEHASH] == 'info@domain.com' ?>`


You may also find this plugin helpful: [IP Access Notification](http://wordpress.org/extend/plugins/ip-access-notification/)

**Want update feeds, code documentation and more? Visit [extend.schloebe.de](http://extend.schloebe.de)**

== Installation ==

1. Download the plugin and unzip it.
2. Upload the folder cookie-access-notification/ to your /wp-content/plugins/ folder.
3. Activate the plugin from your WordPress admin panel.
4. Installation finished.

== Usage ==

Inside the plugin file cookie-access-notification.php, there's only one thing to be edited in order to make this work for your needs. Line 20:

`<?php $_COOKIE["comment_author_" . COOKIEHASH] == 'Alphawolf' ?>`

That's where you put what to check for. If you want to check for a commentor's username, leave as it is (but change 'Alphawolf' to the commentor's name you want to check for, of course ;-)). You can also check for a commentator's email address or website url like this:

`<?php $_COOKIE["comment_author_url_" . COOKIEHASH] == 'http://www.domain.com' ?>`

`<?php $_COOKIE["comment_author_email_" . COOKIEHASH] == 'info@domain.com' ?>`