# baby-yoda-api
Developed by Team Can-do-lorians - Gareth Dobson, Jae Lee and Kit Clifford-Page.

All rights to Star Wars and the 'Baby Yoda' character owned by Disney.

Baby Yoda facial animation sourced from https://codepen.io/shshaw/pen/QWwyaNR, built by Shaw.

Developed using Laravel for use with our webapp built with React-Redux - https://github.com/kitclifford/baby-yoda-gotchi.

## API routes

* post/baby_yoda 
:create new baby yoda

* get/baby-yoda
:get all baby yodas

* get/baby-yoda/{id}
:get specific baby yoda

* delete/baby-yoda/{id}
:kill specific baby yoda

* post/baby_yoda/{id}/feed
:feed specific baby yoda

* get/baby_yoda/{id}/feeds
:get all feeds for specific baby yoda in descending order

## How to start 

1. clone this repo in your local computer
2. open your terminal
3. cd into the project folder 
4. run composer global require laravel/installer
5. run composer require laravel/homestead
6. run vendor/bin/homestead make
(This should have added a Homestead.yaml and Vagrantfile to your project.)

7. run vagrant up 
8. run vagrant ssh 
9. create .env file and edit database info

```
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=secret

```

10. run artisan key:generate
11. run artisan migrate





