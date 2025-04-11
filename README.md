# RedFox Website Project

## About the project

This is the repository for the RedFox Argentina website. This includes the website frontend as well as the dashboard panel. This is all created 
under the monolithic structure of Laravel with Inertia.

## Technologies and dependencies

 - PHP 8
 - Node.JS
 - MySQL
 - npm
 - Composer
 - InertiaJS
 - VueJS

### Instalation process

- Clone the repo with `git clone <url>`
- Run the command `composer install`
- Run the command `npm install`
- Run the command `php artisan key:generate`
- To fiddle with the front end and properties, you can mock the database with `php artisan migrate:refresh --seed`. Otherwise, you should be provided with the SQL file to access real data
- Run the `php artisan storage:link` command
- If you want to deploy in production, run `npm run build` command. For development use `npm run dev` which will allow fast reload and show your frontend changes.
- You should be ready to go now. If you want to have the images in your project, you will need to place them into `/storage/app/public` which each folder containing properties, blog posts, etc. 
- You can access the dashboard creating a user with `php artisan user:create {name} {email} {password}`
