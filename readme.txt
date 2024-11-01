=== WP Switch Admin Email Verification Off ===
Contributors: arjanolsder
Plugin Name: WP Switch Admin Email Verification Off
Plugin URI: https://www.digishock.com
Tags:  WordPress, Core, Updates
Author URI: https://www.digishock.com
Author: Digishock
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5LRFCEJLZQW7A (digishock)
Requires at least: 2.3
Tested up to: 6.0
Stable tag: 1.0
Version: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP Switch Admin Email Verification Off stops WordPress from asking about e-mail verification every six months or so.

== Description == 

Starting WordPress 5.3, WordPress added an e-mail verification step that will come into action about every six months. This step is to validate if the used e-mail address is still in use. On sites with large amounts of users, this can be a very handy feature. On sites with just one user, it can be considered an unwanted nag. This ultra lightweight plugin switches this feature off.

== Installation ==

1. Upload the complete switch-admin-email-verification-off folder to your /wp-content/plugins/ folder.
2. Go to the Plugins page and activate the plugin.

== Frequently Asked Questions ==

= Will this plugin slow down WordPress? =

The plugin just introduces a single setting to Wordpress in a single line of code. So no, it will not slow WordPress down.

= Is this plugin compatible with update management plugins? =

Yes. It has been tested by the guys over at Digishock.com and WebsiteNazorg.nl on various platforms. 

= What security considerations are there in using this plugin? =

This plugin is handling no user or system input/output. It does nothing with the database. Limiting the code base is a security best practice.

= Will there be future updates to this plugin? =

Yes, we will release a new version every 10 months or so. A new version will not mean new code. It is just to avoid the plugin being marked as abandoned. New code will only be added if Wordpress needs it.

== Screenshots ==

== Changelog == 

= 1.0 28-06-2022 =
* First release

== Credits ==

We thank the WordPress team for introducing these checks in 5.3, knowing there are a lot of usecases where this check is important. 

== License ==

This file is part of WP Switch Admin Email Verification Off.

WP Switch Admin Email Verification Off is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

WP Switch Admin Email Verification Off is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with WP Switch Admin Email Verification Off. If not, see <http://www.gnu.org/licenses/>.
