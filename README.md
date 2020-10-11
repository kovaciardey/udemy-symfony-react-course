# udemy-symfony-react-course

useful commands
start local php server:  
```
php -S 127.0.0.1:8000 -t public/
```
```
// load fixtures
php bin/console doctrine:fixtures:load
```
```
// debug routes
php bin/console debug:router
```
```
// generate entity
php bin/console make:entity
```
```
// generate migration
php bin/console make:migration
```
```
// run migration
php bin/console doctrine:migrations:migrate
```
```
// run fixtures
php bin/console doctrine:fixtures:load
php bin/console doctrine:fixtures:load -q // QUICK LOAD without confiormation
```
```
// clear cache
php ./bin/console cache:clear
```
