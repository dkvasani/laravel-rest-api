# laravel-rest-api

# .env file 

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:/66/CjKbXvGHWMZ8VI5mZS0VlG/oUs22AbwoQ2hiumc=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://laravel.local

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_demo
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

```

# Migration

```
php artisan migrate
```

# Database Dummy seed

```
php artisan db:seed
```