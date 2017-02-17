# GHP3 - Github's (Most) Popular PHP Projects

This project is a demo of [Laravel Lumen](https://lumen.laravel.com) and the GitHub API.

Once set up, it allows the end-user to view the most popular public PHP Projects hosted by GitHub ranked by the number of "Stars" each Project Has.

### Requirements

- [PHP](https://php.net) v5.6.4 or newer.
- [MySQL](https://dev.mysql.com/downloads/) or [MariaDB](https://mariadb.com/downloads) 
- [Composer](https://getcomposer.org/download)

### Installation

Clone or download this repository to your local machine.

Open a terminal and navigate to the root folder of this repo on your machine.

Run `composer install` to download the project dependencies 
(This installs Lumen, a GitHub API wrapper, and a few other essentials, see the composer.json file for a complete list)

When this process completes, create a `.env` file at the top-level of your project by making a copy of `.env.example` (located in the project root). This file provides configuration details to the Lumen application.

Once your `.env` file has been created, execute: `php artisan migrate:install` to install the database schema. 
(you should be at the top-level of this project)

Now to get some data, run:

`php artisan db:seed`

This command can be used to install AND refresh the data in your database via the Github Search API.

### Check it out in your Browser!

Now that we're done setting up, we can use PHP's built-in web server to view this project on our local machine.

From the Project Root run: `php -S localhost:8888 -t public` 

### Project Structure

This project uses your standard Laravel/Lumen directory structure.

Routing & Controller logic is found in `routes/web.php`
Database Installation & Update code is found in `database/seeds/GithubPopularPhpProjects.php`
View Files are written in [Blade](https://laravel.com/docs/master/blade) and can be found in `resources/views/` folder

### Fun Ways this Project Can Be Improved

* Increase Snappyness of the FrontEnd - This app would be an ideal use case for a Single-Page App. So we could refactor using AJAX requests and only load the app once, as opposed to the traditional request lifecycle being used atm.
* Store MOAR Data - Instead of only capturing the fields defined in the spec, we could provide a few more useful interactions for our end-users. For example:
* * Capturing the contributors and show their avatars alongside the project listing. 
* * The latest 5 commit messages
* * Number of Open Issues

