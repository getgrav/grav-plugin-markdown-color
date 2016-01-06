# Grav Markdown Color Plugin

The **markdown-color plugin** for [Grav](http://github.com/getgrav/grav) allows you to add output colored text in Markdown:

# Installation

This plugin is easy to install with GPM.

```
$ bin/gpm install markdown-color
```

# Configuration

Simply copy the `user/plugins/markdown-color/markdown-color.yaml` into `user/config/plugins/markdown-color.yaml` and make your modifications.

```
enabled: true
```

# Examples

```
This is {c:red}red text{/c} and this is {c:#000099}blue text{/c}.
```

Will produce the following HTML:

```
<p>
    This is <span style="color:red">red text</span> and this is <span style="color:#000099">blue text</span>.
</p>
```
