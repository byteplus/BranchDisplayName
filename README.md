# Show Branch Name

**Overview**

This package allows you to display the current Git branch name on your Laravel application. It is especially useful for development and staging environments.
<br>
<br>

**Installation**

To install the package, run the following command:

```
composer require byteplus/branch-name-display
```
<br>
<br>

**Configuration**

In your **.env** file, add the following line to control the visibility of the branch name:

```
DISPLAY_BRANCH_NAME=true
```

This will enable the branch name display only for **local** and **staging** environments by default.
<br>
<br>

**Publishing Assets**

It is required to published the CSS file.

```
php artisan vendor:publish --tag=public
```

Publish the view file is optional.

```
php artisan vendor:publish --tag=views
```

Feel free to customize them as needed.
<br>
<br>

**Customization**

The appearance of the branch name display can be customized by modifying the published CSS file located at:

```
public/css/branch-name-display.css
```
<br>
<br>

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
<br>
<br>

**Author**

Byteplus
mail@3design-bg.com
<br>
<br>

**License**

This package is licensed under the MIT License.
