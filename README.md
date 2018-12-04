# Laravel CRUD for restaurants and authenticated users.

## To use:

`git clone https://github.com/suga0828/LaravelCrud-Restaurants.git`
`cd LaravelCrud-Restaurants`
`composer install`

custom .env file with your database connection (DB_DATABASE, DB_USERNAME and DB_PASSWORD)

`php artisan key:generate`
`php artisan migrate`
`php artisan passport:install`
`php artisan serve`

## You can test the api with Postman.

For restaurants:

###### CREATE
To create a restaurant: post -> http://localhost:8000/api/restaurants
- with headers:
  - Content-Type: application/json
  - X-Requested-With: XMLHttpRequest
- and body:
`{ "name": "name", "description": "email", "image": "image" }`
###### READ
- with headers:
  - Content-Type: application/json
  - X-Requested-With: XMLHttpRequest

To list restaurants: get -> http://localhost:8000/api/restaurants
To list a restaurant: get -> //localhost:8000/api/restaurants/:id

###### UPDATE
To edit a restaurants: put -> http://localhost:8000/api/restaurants/:id
    
- with headers:
  - Content-Type: application/json
  - X-Requested-With: XMLHttpRequest
- and body:
`{ "name": "name edited", "description": "email edited", "image": "image edited" }`

###### DELETE:
To delete a restaurant: delete -> http://localhost:8000/api/restaurants/:id
- with headers:
  - Content-Type: application/json
  - X-Requested-With: XMLHttpRequest

# For users:

###### CREATE
To create a user: post -> http://localhost:8000/api/auth/signup
- with headers:
  - Content-Type: application/json
  - X-Requested-With: XMLHttpRequest
- and body:
`{ "name": "name", "email": "name@email", "password": "password", "password_confirmation": "password"}`

###### READ

You need login to read users: To login: post -> http://localhost:8000/api/auth/login
- with headers:
  - Content-Type: application/json
  - X-Requested-With: XMLHttpRequest
- and body:

`{ "email": "name@email", "password": "password", "remember_me": true }`

Take access_token and token_type and make:
- with headers:
  - Authorization: token_type access_token 

To list users: get -> http://localhost:8000/api/auth/users
To list current user: get -> //localhost:8000/api/auth/user
