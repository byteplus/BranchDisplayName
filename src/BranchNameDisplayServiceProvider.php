<?php
namespace byteplus\BranchNameDisplay;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class BranchNameDisplayServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap any application services. *
    * @return void
    */
    public function boot()
    {
        // Publish the view
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'branch-name-display');

        // Share the branch name with all views
        View::composer('*', function ($view) {
            $branch = trim(exec('git rev-parse --abbrev-ref HEAD'));
            $view->with('branchName', $branch);
        });

        // Include the Blade directive
        Blade::directive('conditionalBranchNameDisplay', function () {
            return "<?php if(env('DISPLAY_BRANCH_NAME', false) && app()->environment() !== 'production') { echo view('branch-name-display::display')->render(); } ?>";
        });

        // Publish the CSS file
        $this->publishes([
            __DIR__ . '/../resources/css/branch-name-display.css' => public_path('css/branch-name-display.css'),
        ], 'public');

        // Publish configuration
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/branch-name-display'),
        ], 'views');

        // Automatically inject branch name display in the layout file
        View::composer('layouts.app', function ($view) {
            $view->getFactory()->startSection('branchNameDisplay', "<?php echo view('branch-name-display::display'); ?>");
        });
    }

    /**
    * Register any application services. *
    * @return void
    */
    public function register()
    {
        //
    }
}
