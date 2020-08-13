startup_development:
	docker-compose -f ./docker/docker-compose.development.yml up -d --force-recreate

stop_development:
	docker-compose -f ./docker/docker-compose.development.yml down

console_nginx:
	docker exec -it KochRezept_nginx /bin/bash

console_php:
	docker exec -it KochRezept_php /bin/bash

console_mysql:
	docker exec -it KochRezept_mysqldb /bin/bash
