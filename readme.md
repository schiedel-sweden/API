# API
This application is a tool for uploading excel files. The excel files will
then be ilustrated as an API that our
[tablet applications for iOS and Android](https://github.com/schiedel-sweden/Mobile-Application)
use.

### About us
This application is a [Laravel API](https://laravel.com/) built for the chimney company [Schiedel](https://www.schiedel.com/se/) by [HandelsmMrketing](http://www.handelsmarketing.se/). HandelsmMrketing is a student run marketing company who also makes awesome websites and mobile applications. The API is for the iPad and android tablet applications we built. Check out the
[iOS and Android repositories](https://github.com/schiedel-sweden/Mobile-Application).

### Contrbuting
Follow the guidelines found in the [Contrbuting.md](https://github.com/schiedel-sweden/API/blob/master/CONTRIBUTING.md) file.
There are many ways to contribute. Here's a few ideas to get started:
* Go through the Getting Started guide. Does everything work as expected? If not, we're always looking for improvements. Let us know by opening an issue.
* Look through the open issues. Provide workarounds, ask for clarification, or suggest labels. Help triage issues.
* If you find an issue you would like to fix, open a pull request. Issues tagged as Good First Task are a good place to get started.
* Read through the [Laravel docs](https://laravel.com/).
* Browse Stack Overflow and answer questions. This will help you get familiarized with common pitfalls or misunderstandings, which can be useful when contributing.

### Installation
Make sure you have php-mbstring and php-xml installed, as well as php7.1 and php7.1-mysql.
To install them on Ubuntu, linux, run:

```BASH
$ sudo apt install php-mbstring; sudo apt install php-xml;
```
Keep in mind that the above command will only work on Linux systems running on
Ubuntu 17.04 or similar.
In order to install php7.1 you also need to have a 3rd party ppa.
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

After doing this you will find a user in the database you can use to sign in with to create new users and import your excel files.
* email => 'info@handelsmarketing.se'
* password => 'hejsan123'

## To publish application
`php artisan vendor:publish`

## License
#### [MIT License](https://mitlicense.org/)
