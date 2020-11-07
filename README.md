## วิธีนำโปรเจ็กไปใช้งาน

1.  ติดตั้ง Git
2.  ติดตั้ง Docker เเละ Docker-compose
3.  git clone
4.  sudo composer install
5.  cp .env.example .env
6.  nano .env
7.  DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=12345678
8.  docker-compose up -d
9.  docker ps
10. docker-compose exec app php artisan key:generate
11. docker-compose exec app php artisan config:cache
12. ไปที่ phpmyadmin โดย https://\${myip}:9998
    12.1 ใช้คำสั่ง GRANT ALL ON laravel.\* TO 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password';
    12.2 ใช้คำสั่ง FLUSH PRIVILEGES;
13. กลับมาที่ หน้า commandline ของ linux เเล้วใช้คำสั่ง docker-compose exec app php artisan migrate
14. ไปที่ หน้า phpmyadmin อีกครั้งเเล้วคลิกดูที่ Database ว่า table ถูกสร้างหรือไม่ ถ้า ใช่ การ Deploy ก็เสร็จสมบูรณ์

เครดิดจาก :: https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose
