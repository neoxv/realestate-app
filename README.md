This is a Real Estate app

Installation process 
1. clone project 
2. cd to project 
3. `composer install` 
4. `npm install`
5. create a copy of .env.example file and rename to .env
6. generate app encryption `key php artisan key:generate`
7. create database  
8. fill connection details in .env file DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD
9. migrate models `php artisan migrate:fresh`
10. create storage link `php artisan storage:link`
10. [optional] seed database `php artisan db:seed`
