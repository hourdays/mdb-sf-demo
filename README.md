# mdb-sf-demo
MongoDB Symfony demo

Here are the steps I followed on my macOS Catalina (version 10.15.7):

1. Install package / dependency manager for PHP 
`brew install composer`

2. Install PHP
`brew install php`

3. Install MongoDB PHP driver
`sudo pecl install mongodb`

4. Install Symfony
`curl -sS https://get.symfony.com/cli/installer | bash`

`mv /Users/hjournea/.symfony/bin/symfony /usr/local/bin/symfony`

5. Git clone the demo source code
`mkdir Repositories/mdb-sf-demo`

`cd Repositories/mdb-sf-demo`

`git clone https://github.com/hourdays/mdb-sf-demo.git .`

6. Install project dependecies especially Doctrine, the object document mapper (ODM)
- `composer require doctrine/mongodb-odm-bundle`
`composer install`

7. Launch the server locally
`symfony server:start`
