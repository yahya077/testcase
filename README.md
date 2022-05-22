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
      to: /home/vagrant/backend/testcase/public

sudo nano /etc/hosts

<your-local-ip> testcase.yahya

refresh homestead and connect to ssh

cd code/testcase && composer update

```

## Sail
```
git clone https://github.com/yahya077/testcase.git

./vendor/bin/sail up
```
