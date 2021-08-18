# mdb-sf-demo
MongoDB Symfony demo

Here are the steps I followed on my macOS Catalina (version 10.15.7):
- `brew install composer`
- `brew install php`
- `sudo pecl install mongodb`
- `curl -sS https://get.symfony.com/cli/installer | bash`
- `mv /Users/hjournea/.symfony/bin/symfony /usr/local/bin/symfony`
- `mkdir Repositories/mdb-sf-demo`
- `cd Repositories/mdb-sf-demo'
- `git clone https://github.com/hourdays/mdb-sf-demo.git .`
- `composer require doctrine/mongodb-odm-bundle`
- `composer install`
- `symfony server:start`
