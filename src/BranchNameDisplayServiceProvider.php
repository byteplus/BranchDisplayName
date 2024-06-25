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
        Blade::directive('branchNameDisplay', function () {
            return "<?php echo view('branch-name-display::display'); ?>";
        });

        // Publish configuration
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/branch- name-display'),
        ], 'views');

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
