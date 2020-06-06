<?php

namespace CodingFoundry\LaravelPreset;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class LaravelPreset extends Preset
{
    const npm_packages_to_add = [
        'laravel-mix' => '^5.x',
        'laravel-mix-tailwind' => '^0.1.x',
        'tailwindcss' => '^1.x',
        '@tailwindcss/custom-forms' => '^0.2',
        '@tailwindcss/ui' => '^0.x',
        'resolve-url-loader' => '2.3.1',
        'sass' => '^1.x',
        'sass-loader' => '^7.*',
        'vue' => '^2.x',
        'vue-template-compiler' => '^2.x',
        'turbolinks' => '^5.2.0',
    ];

    const npm_packages_to_remove = [
        'popper.js',
        'lodash',
        'jquery',
        'bootstrap',
    ];

    public static function install()
    {
        static::ensureComponentDirectoryExists();
        static::updatePackages();
        static::updateMix();
        static::updateScripts();
        static::updateStyles();
        static::updateSass();
        static::updateTailwindConfig();
        static::updateComponent();
    }

    public static function installAuth()
    {
        static::scaffoldAuth();
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge(
            static::npm_packages_to_add,
            Arr::except($packages, static::npm_packages_to_remove)
        );
    }

    public static function updateMix()
    {
        copy(__DIR__ . '/stubs/default/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function updateScripts()
    {
        copy(__DIR__ . '/stubs/default/resources/js/app.js', resource_path('js/app.js'));
        copy(__DIR__ . '/stubs/default/resources/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    public static function updateTailwindConfig()
    {
        copy(__DIR__ . '/stubs/default/tailwind.config.js', base_path('tailwind.config.js'));
    }

    /**
     * Update the example component.
     *
     * @return void
     */
    protected static function updateComponent()
    {
        (new Filesystem)->delete(
            resource_path('js/components/Example.js')
        );
        copy(
            __DIR__ . '/stubs/default/resources/js/components/ExampleComponent.vue',
            resource_path('js/components/ExampleComponent.vue')
        );
    }

    public static function updateStyles()
    {
        File::cleanDirectory(resource_path('sass'));
        File::put(resource_path('sass/app.scss'), '');
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__ . '/stubs/default/resources/sass/app.scss', resource_path('sass/app.scss'));
    }

    protected static function scaffoldAuth()
    {
        // Scaffold Auth
        copy(__DIR__ . '/stubs/auth/login.blade.php', resource_path('/views/auth/login.blade.php'));
        copy(__DIR__ . '/stubs/auth/register.blade.php', resource_path('/views/auth/register.blade.php'));
        copy(__DIR__ . '/stubs/auth/verify.blade.php', resource_path('/views/auth/verify.blade.php'));
        copy(__DIR__ . '/stubs/auth/email.blade.php', resource_path('/views/auth/passwords/email.blade.php'));
        copy(__DIR__ . '/stubs/auth/reset.blade.php', resource_path('/views/auth/passwords/reset.blade.php'));
        copy(__DIR__ . '/stubs/auth/auth.blade.php', resource_path('/views/layouts/auth.blade.php'));

        // Scaffold Defaults
        copy(__DIR__ . '/stubs/default/layouts/app.blade.php', resource_path('/views/layouts/app.blade.php'));
        copy(__DIR__ . '/stubs/default/home.blade.php', resource_path('/views/home.blade.php'));
        copy(__DIR__ . '/stubs/default/welcome.blade.php', resource_path('/views/welcome.blade.php'));
    }
}
