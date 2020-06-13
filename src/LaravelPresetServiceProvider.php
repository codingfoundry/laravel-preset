<?php

namespace CodingFoundry\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Laravel\Ui\Presets\Bootstrap;
use Laravel\Ui\Presets\Vue;
use Illuminate\Support\Facades\Artisan;

class LaravelPresetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('preset', function (UiCommand $command) {
            Bootstrap::install();
            Vue::install();
            LaravelPreset::install();
            Artisan::call('vendor:publish --tag=laravel-pagination');

            $command->info('Laravel Preset with Tailwind, Vue, SASS, Turbolinks scaffolding installed successfully.');

            if ($command->option('auth')) {
                $command->call('ui:auth');
                LaravelPreset::installAuth();
                $command->info('Auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your new assets.');
        });
    }
}
