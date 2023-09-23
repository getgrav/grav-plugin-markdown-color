# Grav Markdown Color Plugin with Theme support

An extended version based on the original **markdown-color plugin** for [Grav](http://github.com/getgrav/grav), now supporting text with foreground/background colors from a _theme_. Also, custom names for colors can be used, like 'primary', 'warning', or whatever you define.

Theme color are defined by using the admin panel or by editing the `markdown-color.yaml` file.

# Installation

1. This plugin is easy to install with GPM.
```
$ bin/gpm install markdown-color
```

2. To install the plugin manually, download the zip version of this repository and unzip it under user/plugins/markdown-color

You should now have all the plugin files under user/plugins/markdown-color.

# Configuration
Simply copy the `user/plugins/markdown-color/markdown-color.yaml` into `user/config/plugins/markdown-color.yaml` and make your modifications.

```
enabled: true
theme-blue: '#0000ff'
theme-green: '#00ff00'
```

For a theme color to be available in the Admin panel, first define it in the  `user/plugins/markdown-color/blueprints.yaml` file:
```
form:
  validation: strict
  fields:
    enabled:
    ...
    theme-blue:
      type: colorpicker
      default: '#0000ff'
      label: Blue
    theme-green:
      type: colorpicker
      default: '#00ff00'
      label: Green
    ...
```

Then, use the admin panel to configure your theme colors, or edit the file located in `user/plugins/markdown-color/markdown-color.yaml` and make your modifications there.

```
enabled: true
theme-blue: '#0000ff'
theme-green: '#00ff00'
...
```

# Using other color identifiers

Instead of using web color names (like blue, green, etc.), you can use whatever you want to describe them as long as they are defined in the blueprints and markdown-color yaml files.

For instance, you could define _theme-primary_, _theme-warning_, _theme-success_ and so on, as it's so popular in web frameworks:

* theme-primary: '#628cf4'
* theme-warning: '#f59262'
* ...

# Using theme colors for backgrounds
You may use the markdown-color plugin to set a background color with a combination of white or black text by using {theme:_color_-**w**} for white text or {theme:_color_-**b**} for black text over a themed background color.

# Examples
## Classic color management
Use {c:#rrggbb} or {c:web-color-name}.

This is {c:red}red text{/c} and this is {c:#000099}blue text{/c}.

Will produce the following HTML:
```
<p>
    This is <span style="color:red">red text</span> and this is <span style="color:#000099">blue text</span>.
</p>
```

## Use of web colors names for text
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

## Use of custom color names for text
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

## Use of black/white text with theme color for backgrounds
```
{theme:primary-w}This is white text over a primary background color.{/theme}
```

Will produce the following HTML:

```
<p>
    <span style="background-color:#628cf4;color:#fff">This is white text over a primary background color.</span>.
</p>
```
