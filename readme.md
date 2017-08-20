# Schiedel API

### Installation
Make sure you have php-mbstring and php-xml installed, as well as php7.1 and php7.1-mysql.
To install them on Ubuntu, linux, run:

```BASH
$ sudo apt install php-mbstring; sudo apt install php-xml;
```
Keep in mind that the above command will only work on Linux systems running on 
Ubuntu 17.04 or similar. 
In order to install php7.1 you also need to have a 3d party ppa.
This can be done by running the following:

```BASH
$ sudo apt install python-software-properties
$ sudo add-apt-repository ppa:ondrej/php
$ sudo apt update
$ sudo apt install -y php7.1; sudo apt install php7.1-mysql
```


1. Create a directory for all the Schiedel Apps `mkdir schiedel` `cd schiedel`

2. Run
``` BASH
$ git clone https://github.com/schiedel-sweden/API.git
$ cd API
```

3. Switch to your branch ex: `git checkout dev`

4. Run
```BASH
$ composer install
$ npm install
$ npm run production
```

5. Create a database and name it whatever you want.

6. Copy the `.env.example` file and name it `.env` don't forget to add your credentials.

7. Run
``` BASH
$ php arisan migrate
$ php artisan key:generate
$ php artisan config:clear
$ php artisan db:seed --class=UsersTableSeeder
$ php artisan serve
```

After doing this you will find a user in the database you can use to sign in with to create new users and import your excelfiles.
* email => 'info@handelsmarketing.se'
* password => 'hejsan123'
