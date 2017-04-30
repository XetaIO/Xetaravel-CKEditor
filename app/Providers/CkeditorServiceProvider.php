<?php
namespace Xetaravel\Ckeditor\Providers;

use Illuminate\Support\ServiceProvider;

class CkeditorServiceProvider extends ServiceProvider
{
    /**
     * Publish the CKEditor to the public directory.
     *
     * @return void
     */
    public function boot()
    {
        $basePath = base_path('vendor/ckeditor/release');
        $publicPath = 'vendor/ckeditor/ckeditor';

        $this->publishes(
            [
                $basePath . '/ckeditor.js' => public_path($publicPath . '/ckeditor.js'),
                $basePath . '/config.js' => public_path($publicPath . '/config.js'),
                $basePath . '/styles.js' => public_path($publicPath . '/styles.js'),
                $basePath . '/contents.css' => public_path($publicPath . '/contents.css'),
                $basePath . '/adapters' => public_path($publicPath . '/adapters'),
                $basePath . '/lang' => public_path($publicPath . '/lang'),
                $basePath . '/skins' => public_path($publicPath . '/skins'),
                $basePath . '/plugins' => public_path($publicPath . '/plugins'),
            ],
            'ckeditor'
        );
    }
}
