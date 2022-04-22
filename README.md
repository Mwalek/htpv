![Smartcrawl HTPV Screenshot](https://prosites.link/wp-content/uploads/2022/03/HTPV-Design-4.png)
 
 ## What this MU plugin does
This [MU plugin](https://wordpress.org/support/article/must-use-plugins/) adds custom fields to WordPress. You can use those custom fields to add schema information to your HowTo posts in Smartcrawl SEO. Not having to constantly visit the Smartcrawl settings page to create *HowTo Schema Types* saves you time.

NB: The free [Meta Box](https://wordpress.org/plugins/meta-box/) plugin is required for this snippet to work.

## How to use this MU plugin

1. Add the htpv.php file inside the /wp-content/mu-plugins/ folder.
2. Install and activate the free [Meta Box](https://wordpress.org/plugins/meta-box/) plugin.
3. Edit any post inside wordpress and you'll see the htpv custom fields group.

## How to choose values in Smartcrawl
All custom fields created by this plugin start with the prefix *m5_*. To select a custom field variable inside Smartcrawl, you must combine the prefix with the name of the custom field you want (with underscores instead of spaces).

For example, if you wanted to get the value of the field called "step 1", you would type *m5_step_1* and if you wanted to get the value of "step 1 text", you would type *m5_step_1_text*, so on and so forth.
