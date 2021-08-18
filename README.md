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
<img src="https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/Welcome%20to%20Symfony%205.3.3.png" width="100%">

### Specify the MongoDB Atlas connection string inside .env
Replace the following with your own connection string specifications provided by MongoDB Atlas GUI as pictured herefater.
```
###> doctrine/mongodb-odm-bundle ###
MONGODB_URL=mongodb+srv://<username>:<password>@demo.130he.mongodb.net/?retryWrites=true&w=majority
MONGODB_DB=eazy
###< doctrine/mongodb-odm-bundle ###
```
<img src="https://github.com/hourdays/mdb-sf-demo/blob/main/readme-images/connect_to_atlas.png" width="75%">

### Go to http://127.0.0.1:8000/createProduct to create a Product


### Go to http://127.0.0.1:8000/showProduct/611cf14b8e2d9df2ff03a334 to get Product with _id 611cf14b8e2d9df2ff03a334

