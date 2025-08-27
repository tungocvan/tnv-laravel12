mkdir tnv
git clone git@github.com:tungocvan/adminlt-laravel-12.git tnv
phan-quyen.sh tnv
cd tnv
cp .env.example .env
create-databse.sh db_tnv
nano .env 
 - cấu hình tên database: DB_DATABASE=db_tnv

composer update 
php artisan migrate:fresh --seed
php artisan optimize:clear
php artisan key:generate
// nếu có chạy socket io thì cấu hình echo.js
npm i
npm run build  
pm2 status => xem có sockeio đã chạy chưa ? chưa thì chạy:
./run-socketio.sh
hàng đợi: ./run-queue.sh

- Cấu hình Nginx: 
cd /etc/nginx/sites-available/
cp laravel.tk tnv.laravel.tk
nano tnv.laravel.tk
nội dung:
server {
    listen 80;
    listen 443 ssl;
    server_name tnv.laravel.tk;
    ssl_certificate /etc/.cert/laravel.tk-cert.pem;
    ssl_certificate_key /etc/.cert/laravel.tk-key.pem;
    root /var/www/tnv/public;
    index index.php index.html index.htm;
    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
    }

    location ~ /\.ht {
        deny all;
    }
}

nginx-domain.sh tnv.laravel.tk

// tạo kho mới trên github
rm -rf .git
