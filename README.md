# install dependencies
composer install

# Create a copy of your .env file
cp .env.example .env

# Generate an app encryption key
php artisan key:generate
# --> Mở file .env đổi DB_DATABASE= yên database của bạn đã tạo trong mysql lưu ý chỉ cần có thôi không cần tạo table .
# --> Chạy service mysql tại port 3306  
# --> user name và  password tùy máy bạn
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=managergym
# DB_USERNAME=root
# DB_PASSWORD=
 

# Migrate the database
Migrate the database

# Installation Passport
php artisan passport:install


# Seed the database
php artisan db:seed

# clear config
php artisan config:clear
php artisan config:cache
# serve 
php artisan serve

