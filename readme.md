# Schiedel API

### Installation
1. Create a directory for all the Schiedel Apps `mkdir schiedel` `cd schiedel`

2. Run
``` BASH
$ git clone https://github.com/schiedel-sweden/API.git
$ cd API
$ composer install
$ npm install
```

3. Create a database and name it whatever you want.

4. Copy the `.env.example` file and name it `.env` don't forget to add your credentials.

5. Run
``` BASH
$ php arisan migrate
$ php artisan serve
```
