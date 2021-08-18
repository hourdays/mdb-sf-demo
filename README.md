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
![alt text](https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/git%20clone.png)

### Install project dependecies especially Doctrine, the object document mapper (ODM)
```
composer require doctrine/mongodb-odm-bundle
```
![alt text](https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/require%20doctrine.png)

```
composer install
```
![alt text](https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/composer%20install.png)

### Launch the server locally
```
symfony server:start
```
![alt text](https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/symfony_server-start.png)
