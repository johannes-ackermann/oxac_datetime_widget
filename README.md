OXID Academy Sample Modules: Widget
===================================

# Description

Sample Module for training purposes.
Provides a widget that is integrated to the header of the shop page.

# Install

* Create a local directory for repositories in your project, e.g. `oxideshop/extensions`.
* Check-out this module and move it to the directory you just created
* Add the repository to your project's compser.json, e.g. like this:

  ```json
    "repositories": {
        "oxid-academy/datetimewidget": {
            "type": "path",
            "url": "extensions/oxac_datetime_widget/"
        }
    }
  ```    

* Be aware that you need to extend the "repositories" section if it already exists. Take care about the JSON syntax.
* "Require" the module:

```json
    "require": {
        "php": ">=5.6",
        ...
        "oxid-academy/datetimewidget": "*"
    },
```

* Run `composer update`
* When Composer is done, go to the shop admin, open "Extensions", "Modules", select "External addresses for article details pages" and click "activate".

# Use

 * In the shop admin, open "Extensions", "Modules", select "'Date and time' widget" and click "activate".
 * On the settings tab, you may enable caching for this module (available for OXID eShop Enterprise Edition only).

# Compatibility:

* Requires OXID eShop CE/PE/EE 6.0.x
* PHP 5.6 or higher
