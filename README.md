OXID Academy Sample Modules: Widget
===================================

# Description

This is a sample Module for training purposes. It will display the current date and time on the top of the shop's page.

# Installation instructions

## Register and require the package

In the local development environment, cd into the root directory of your compilation
and run Composer as follows:
 
```
composer config repositories.oxid-academy/datetimewidget vcs https://github.com/bertrandjackermann/oxac_datetime_widget.git
```

This should result in the following change to `composer.json`:
```
  ...
  "repositories": {
    ...,
    "oxid-academy/datetimewidget": {
      "type": "vcs",
      "url": "https://github.com/bertrandjackermann/oxac_datetime_widget.git"
    }
  },
  ...
```

And then, ...
```
composer require oxid-academy/datetimewidget
```

... which results in something like:
```
  ...
  "require": {
    ...,
    "oxid-academy/datetimewidget": "v2.0.0"
  },
  ...
```

# Enabling the module

* When Composer is done processing your new request, you may enable the module:
```
vendor/bin/oe-console o:m:activate oxacdatetimewidget
```

# Use

 * This module is intendet to teach you the basics of widget creation and the high availability option with the reverse proxy (Varnish).
 * In the shop admin, open "Extensions", "Modules", and select "'Date and time' widget"
 * On the settings tab, you may enable caching for this module (available for OXID eShop Enterprise Edition only).

# Compatibility:

* Requires OXID eShop CE/PE/EE 6.2.x or higher.
