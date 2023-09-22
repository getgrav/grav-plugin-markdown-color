# Grav Themed Markdown Color Plugin

The **themed-markdown-color plugin** for [Grav](http://github.com/getgrav/grav) extends the markdown-color plugin by allowing the use of _theme_ colors.

Theme color are defined by using the admin panel or by editing the config yaml file.

# Installation

To install the plugin manually, download the zip-version of this repository and unzip it under user/plugins/themed-markdown-color

You should now have all the plugin files under user/plugins/themed-markdown-color.

# Configuration

Use the admin panel to configure your theme colors, or edit the file located in `user/plugins/themed-markdown-color/themed-markdown-color.yaml` and make your modifications.

```
enabled: true
theme-blue: '#0000ff'
theme-green: '#00ff00'
...
```

# Using other color identifiers

Instead of using predefined color names, you can use whatever you want to describe them.

For instance, theme-primary, theme-warning, theme-success and so on, as it's so popular in web framekworks:
theme-primary: '#628cf4'
theme-warning: '#f59262'

# Using theme background colors
You may use the themed-markdown-color plugin to set a background color and white or black text by using {theme:_color_-w} for white text over a themed background color, or {theme:_color_-b} for black text over a themed background color.

# Examples
Assuming 'red' is configured as '#f10c53' and 'lime' as '#80ecc7':

```
This is {theme:red}red text{/theme} and this is {theme:lime}lime text{/theme}.
```

Will produce the following HTML:

```
<p>
    This is <span style="color:#f10c53">red text</span> and this is <span style="color:#80ecc7">lime text</span>.
</p>
```

Assuming you defined 'theme-primary' as '#628cf4' and 'theme-warning' as '#f59262':

```
This is {theme:primary}'primary text'{/theme} and this is {theme:warning}'warning text'{/theme}.
```

Will produce the following HTML:

```
<p>
    This is <span style="color:#628cf4">'primary text'</span> and this is <span style="color:#f59262">'warning text'</span>.
</p>
```

## Background colors
```
{theme:primary-w}This is white color text over a primary background color.{/theme}
```

Will produce the following HTML:

```
<p>
    <span style="background-color:#628cf4;color:white">This is white color text over a primary background color.</span>.
</p>
```
