1. Docker Desktop starten

2. 
docker build -t my-php-app .

3.
docker run -d --rm -p 80:80 --name my-running-app my-php-app

-----------------------------------
Don`t forget to stop the container
docker stop <Container ID>

Quelle: https://hub.docker.com/_/php/
