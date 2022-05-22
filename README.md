<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## 🚀&nbsp; Setup

## MacOs - Valet

```
cd <your-valet-directory>

git clone https://github.com/yahya077/testcase.git

cp .env.example .env

set APP_URL to http://testcase.test

composer update

setup db configuration in .env
```


## Homestead

```
cd code (if you named different, change with as it is)

git clone https://github.com/yahya077/testcase.git

cp .env.example .env

setup db configuration in .env

update Homestead.yaml with;

    - map: testcase.yahya
      to: /home/vagrant/code/testcase/public

sudo nano /etc/hosts

<your-local-ip> testcase.yahya

refresh homestead and connect to ssh

cd code/testcase && composer update
```

## Sail
Note: Make sure your computer has installed docker and docker-compose. 
80 port has to be available otherwise you will get an error says 80 port is busy. Kill if it is
```
git clone https://github.com/yahya077/testcase.git

./vendor/bin/sail up
```

## Custom Commands

If you want to insert data from provider you have to call;

```
php artisan tasks:insert

php artisan tasks:insert -f //for fresh start

This command will ask you which provider you want to insert.

You have two options and you can select with arrow buttons.

Options: 'first', 'second'
```

## Structure of Projects

Mainly all the logic in `testcase/custom` folder.

## Adding new Provider

There is only three things you have to do. First, setup `config/custom.php`.
Second, Add your provider model as it is. You can use other provider models as example. Third, add the controller.
Literally we don't have to add many controllers for every providers but I wanted to show how to use traits in the project.
So I make it two controller for looks like it is required :)
