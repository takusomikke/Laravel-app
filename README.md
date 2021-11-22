git clone
Copy .env.sample to .env
Open .env file and change DB_PASSWORD to any string (e.g. root)
Run docker compose build app in root folder
Run docker compose up -d
Run docker compose exec app php artisan key:generate
Run docker-compose exec app bash ./script/reflectchanges.sh
