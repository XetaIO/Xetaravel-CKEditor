> <h1 align="center">Xetaravel CKEditor</h1>
>
> This is a wrapper to use [CKEditor](https://github.com/ckeditor/ckeditor-releases) with Laravel.
>
> ## Installation
>
> ```
> composer require xetaio/xetaravel-ckeditor
> ```
>
> Import the CkeditorServiceProvider in your `config/app.php`:
> ```
> Xetaravel\Ckeditor\Providers\CkeditorServiceProvider::class
> ```
>
> Publish the CKEditor to your public directory :
> ```
> php artisan vendor:publish --tag=ckeditor
> ```
>
> ## Usage
> ```
><script src="/vendor/ckeditor/release/ckeditor.js"></script>
>    <script>
>        CKEDITOR.replace('name-go-here');
>    </script>
> ```
>
> ## Update
> To update CKEditor to a new version, first run :
> ```
> composer update
> ```
> Then, delete the folder `public/vendor/release` and run the artisan command again :
> ```
> php artisan vendor:publish --tag=ckeditor
> ```
> **Note** : Do not put any custom configuration files in the `public/vendor/release` directory. Instead put them in the `public/vendor` directory or somewhere else.
