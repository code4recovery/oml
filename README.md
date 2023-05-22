# Online Meeting List WordPress Plugin

This plugin helps with installing [Online Meeting List](https://github.com/code4recovery/online-meeting-list) on your WordPress website.

1. Download this plugin as a ZIP file
1. Upload it to your website (Plugins > Add New > Upload Plugin)
1. Create a page at `/meetings`
1. Build your online meeting list and then copy the `static` folder to your wordpress root

## Change the URL

To customize the URL, add this to your `wp-config.php`:

```
$oml_slug = 'online-meeting-list';
```
