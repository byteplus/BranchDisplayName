# Show Branch Name

**Overview**

This package allows you to display the current Git branch name on your Laravel application. It is especially useful for development and staging environments.

**Installation**

To install the package, run the following command:

```
composer require byteplus/branch-name-display
```

**Configuration**

In your **.env** file, add the following line to control the visibility of the branch name:

```
DISPLAY_BRANCH_NAME=true
```

This will enable the branch name display only for **local** and **staging** environments by default.


**Publishing Assets**

It is required to published the CSS file.

```
php artisan vendor:publish --tag=public --tag=views
```

Publish the view file.

```
php artisan vendor:publish --tag=views
```

Feel free to customize them as needed.

**Customization**

The appearance of the branch name display can be customized by modifying the published CSS file located at:

```
public/css/branch-name-display.css
```

**Usage**

To use the branch name display, add the Blade directive right after the opening <body> tag in your **layouts.app** file:

```
@conditionalBranchNameDisplay
```

This will ensure the branch name is displayed according to your configuration settings.

> Note: If you don't see the changes immediately, you may need to clear the cache by running the following command:

```
php artisan view:clear
php artisan cache:clear
```

> In some cases we may need to restart our service.
```
ctrl + c
php artisan serve
```

**Author**

Byteplus
mail@3design-bg.com

**License**

This package is licensed under the MIT License.
