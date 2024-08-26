<?php

namespace byteplus\BranchNameDisplay;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BranchNameDisplayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        var_dump('dsdsds'); exit;
        // Load views from the package
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'branch-name-display');

        // Conditionally share branch name with all views
        if ($this->shouldDisplayBranchName()) {
            // Share the branch name with all views
            View::composer('*', function ($view) {
                $branch = trim(exec('git rev-parse --abbrev-ref HEAD'));
                $view->with('branchName', $branch);
            });

            // Inject the branch name display in the layout if condition is met
            View::composer('layouts.app', function ($view) {
                $view->getFactory()->startSection('branchNameDisplay', view('branch-name-display::display')->render());
            });
        }
    }

    /**
     * Determine if the branch name should be displayed.
     *
     * @return bool
     */
    protected function shouldDisplayBranchName()
    {
        return env('DISPLAY_BRANCH_NAME', false) && app()->environment() !== 'production';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register package configurations or bindings here
    }
}

