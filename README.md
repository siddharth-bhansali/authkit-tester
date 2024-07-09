# Steps to run

- Make sure PHP and Composer is installed in your system.
- Copy the `.env.example` file as `.env` and add the `IOS_DEVELOPMENT_KEY` and the `IOS_PRODUCTION_KEY` values at the bottom.
- Run `composer install` in an instance of the terminal opened in the folder.
- Run `php artisan serve` to start the development server in the same terminal instance.
- Open the file `routes/web.php` and make changes to the route `/create-embed-token` as necessary. The sample uses the development key and url.
- Use the POST route `http://localhost:8000/create-embed-token` in the `node-authkit` package.