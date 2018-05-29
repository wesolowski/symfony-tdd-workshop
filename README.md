# Workshop: Symfony4 and TDD


1.Clone repo:

```
git clone git@github.com:wesolowski/symfony-tdd-workshop.git
``` 

2.Start docker

```
docker-composer up -d
```

3.Connect to docker-container

```
# SSH - Password: docker
ssh docker@127.0.0.1 -p 2222

# Docker way
docker exec -it symfony_tdd bash
```

4.Install/config symfony

```
cd /var/www/
composer install --dev
php bin/console doctrine:database:create
php bin/console  doctrine:migrations:migrate
php bin/phpunit # all unit test should be green :)
```

5.Web-browser

Add host 
```
127.0.0.1 public.local.docker
```

Now you can see symfony:

Start: <http://public.local.docker/>  
Rest: <http://public.local.docker/data>

6.DB

Db is sqllite. Path to file: <symfony-project>/var/data.db
