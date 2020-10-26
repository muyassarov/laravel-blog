setup:
	npm install & npm run dev
	php artisan key:generate
	touch database/database.sqlite
	php artisan migrate

