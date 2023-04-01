# Seed


## Factory & Seeder
## resource routes

#### route model binding
route model binding is this in which we mentioned our model in controller at the time of declaration.

#### getRouteKeyName
route key name (in which we get any column name from our api which we mentioned in our getRouteKeyName)


#### Response.php
response.php file in which all response code mentioned which we can use in our api

#### mass assignment
for mass assignment we have to mentioned only those field which we want to add in out database for this we have to mentiond
fillable property in our model file

#### convert response by some layer before sending to user
- what is transformation layer ?
thisi s basically transformation layer which convert our response into our defined filed this is done to achive some security.
for this laravel provide a resource create option.
php artisan make:resource QuestionResource


#### install laravel jwt
add tymon/jwt-auth (~1.0.0.rc.2) package and then run this command in your terminal for creating jwt file in laravel config folder
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret

https://jwt-auth.readthedocs.io/en/develop/laravel-installation/

php artisan make:controller AuthController

#### mutators 
before saving anything into the database we can mutate our request.
setPasswordAttribute

#### middleware
to create a new middleware then you have to use this command, then you have to register this middleware too
php artisan make:middleware JWT


