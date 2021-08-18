# mdb-sf-demo
MongoDB Symfony demo

## Here are the steps I followed on my macOS Catalina (version 10.15.7):

### Install package / dependency manager for PHP 
```
brew install composer
```

### Install PHP
```
brew install php
```

### Install MongoDB PHP driver
```
sudo pecl install mongodb
```

### Install Symfony
```
curl -sS https://get.symfony.com/cli/installer | bash
mv /Users/hjournea/.symfony/bin/symfony /usr/local/bin/symfony
```

### Git clone the demo source code
```
mkdir Repositories/mdb-sf-demo
cd Repositories/mdb-sf-demo
git clone https://github.com/hourdays/mdb-sf-demo.git .
```
<img src="https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/git%20clone.png" width="75%">

### Install project dependecies especially Doctrine, the object document mapper (ODM)
```
composer require doctrine/mongodb-odm-bundle
```
<img src="https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/require%20doctrine.png" width="75%">

```
composer install
```
<img src="https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/composer%20install.png" width="75%">

### Launch the server locally
```
symfony server:start
```
<img src="https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/symfony_server-start.png" width="75%">
<img src="https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/Welcome%20to%20Symfony%205.3.3.png" width="75%">
