# laravel-reset-password-via-queue
Send the password reset link via email using queue in laravel 5.

## How to use.
- Download the zip file and unzip the package.
- Copy the files to your project: `path/to/your-project/app`.
- Finally in your `config/app.php` file remove `Illuminate\Auth\Passwords\PasswordResetServiceProvider::class` and add `App\Providers\PasswordResetServiceProvider::class` to your 'providers' array.
- Done.

http://stackoverflow.com/questions/34409236/how-to-send-the-password-reset-link-via-email-using-queue-in-laravel-5
https://gist.github.com/jamesfairhurst/a30f034f6aeef45fe32f17e5588c1adf#file-passwordbroker-php
