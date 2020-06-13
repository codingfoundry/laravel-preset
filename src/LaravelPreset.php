<?php

namespace CodingFoundry\LaravelPreset;

use Illuminate\Support\Arr;
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
        'moment' => '^2.x',
    ];

    const npm_packages_to_remove = [
        'popper.js',
        'lodash',
        'jquery',
        'bootstrap',
    ];

    public static function install()
    {
        static::updatePackages();

        $filesystem = new Filesystem();
        $filesystem->deleteDirectory(resource_path('sass'));
        $filesystem->copyDirectory(__DIR__ . '/../stubs/default', base_path());
    }

    public static function installAuth()
    {
        $filesystem = new Filesystem();
        $filesystem->copyDirectory(__DIR__ . '/../stubs/auth', base_path());
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge(
            static::npm_packages_to_add,
            Arr::except($packages, static::npm_packages_to_remove)
        );
    }
}
