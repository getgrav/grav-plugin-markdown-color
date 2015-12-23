# Grav Markdown Color Plugin

The **markdown-notices plugin** for [Grav](http://github.com/getgrav/grav) allows generation of notice blocks of text via markdown:

# Installation

This plugin is easy to install with GPM.

```
$ bin/gpm install markdown-notices
```

# Configuration

Simply copy the `user/plugins/markdown-notices/markdown-notices.yaml` into `user/config/plugins/markdown-notices.yaml` and make your modifications.

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