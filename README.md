# atexoCardGame



# Docker install

Install Docker with https://docs.docker.com/install/linux/docker-ce/ubuntu/

Install Docker Compose with https://docs.docker.com/compose/install/

Clone the git repo 
git@github.com:msfaxi/atexoCardGame.git

# Deploy
```
cd FrontCardGame && composer install
```
# For PHPUNIT test
cd FrontCardGame && ./vendor/bin/phpunit tests/

#To start game:
```
sudo docker-compose build; sudo docker-compose up -d
```

# Access game 
127.0.0.1:8081/game



# Credits
img : CSS-Playing-Cards