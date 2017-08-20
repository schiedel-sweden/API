# Schiedel API

### Installation
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
```

5. Create a database and name it whatever you want.

6. Copy the `.env.example` file and name it `.env` don't forget to add your credentials.

7. Run
``` BASH
$ php arisan migrate
$ php artisan db:seed --class=UsersTableSeeder
$ php artisan serve
```

After doing this you will find a user in the database you can use to sign in with to create new users and import your excelfiles.
* email => 'info@handelsmarketing.se'
* password => 'hejsan123'

## To publish application
`php artisan vendor:publish`


