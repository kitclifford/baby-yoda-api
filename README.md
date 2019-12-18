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

open your terminal
cd into the right project folder 
run composer global require laravel/installer
run composer require laravel/homestead
run vendor/bin/homestead make
(This should have added a Homestead.yaml and Vagrantfile to your project.)

run vagrant up 
run vagrant ssh 

create .env file and edit database info 

DB_DATABASE=homestead
DB_USERNAME=root
DB_PASSWORD=secret

artisan key:generate
artisan migrate

homestead
<!-- Homestead.yaml file
memory: 512 -->




