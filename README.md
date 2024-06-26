# Show Branch Name

> A simple Laravel package to display the current Git branch name in your application.

**Installation**

To install the package, run the following command:
```
composer require byteplus/branch-name-display
```

**Publishing Assets**

Publish the CSS file. You can modify it as needed:
```
php artisan vendor:publish --tag=public
```

**Usage**

By default, the branch name display will be injected into **layouts.app**.

If you want to display the branch name in other places, you can use the following Blade directive:
```
@branchNameDisplay
```

**Author**
Byteplus
mail@3design-bg.com

**License**

This package is licensed under the MIT License.
