# baby-yoda-api
For use with the Baby Yoda Gotchi webapp.

Created by Gareth Dobson, Jae Lee and Kit Clifford-Page.

All rights to Star Wars and the 'Baby Yoda' character owned by Disney.

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

1. open your terminal
2. cd into the right project folder 
3. run composer global require laravel/installer
4. run composer require laravel/homestead
5. run vendor/bin/homestead make
(This should have added a Homestead.yaml and Vagrantfile to your project.)

6. run vagrant up 
7. run vagrant ssh 
8. create .env file and edit database info

```
DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=secret

```
9. run artisan key:generate
10.run artisan migrate





