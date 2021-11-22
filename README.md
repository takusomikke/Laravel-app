git clone  
Copy .env.sample to .env  
Open .env file and change DB_PASSWORD to any string (e.g. root)  
Run docker compose build app in root folder  
Run docker compose up -d  
Run docker compose exec app bash  
Run following command in app container  
Run composer update  
Run php artisan key:generate  
php artisan cache:clear
php artisan route:clear
php artisan config:clear 
php artisan view:clear 
php artisan migrate:fresh --seed  
