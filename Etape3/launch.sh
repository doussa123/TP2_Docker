#!/bin/bash
# Arrêter tous les conteneurs en cours d'exécution
docker container stop $(docker ps -q)

# Supprimer tous les conteneurs
docker container rm $(docker ps -a -q)

# Supprimer le réseau existant et en créer un nouveau
docker network rm wp_network
docker network create wp_network

# Construction de l'image pour le conteneur NGINX
docker build -t my-nginx -f ./http/Dockerfile .

# Construction de l'image pour le conteneur PHP-FPM
docker build -t my-php-fpm -f ./script/Dockerfile .

# Run MySQL container
docker container run -d --name data --network wp_network -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=wordpress -e MYSQL_USER=wpuser -e MYSQL_PASSWORD=wppassword mysql:latest

# Attendre que MySQL soit complètement démarré
echo "Waiting for MySQL to initialize..."
sleep 20  
# Exécuter le fichier init.sql 
docker exec -i data mysql -u root -proot wordpress < ./init.sql

# Run PHP-FPM container
docker container run -d --name script --network wp_network -v "$(pwd)/src:/var/www/html" my-php-fpm

# Run NGINX container
docker container run -d --name http --network wp_network --link script:script -p 8080:8080 -v "$(pwd)/src:/var/www/html" my-nginx

echo "Containers are running. You can now access WordPress at http://localhost:8080"

