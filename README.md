## วิธีนำโปรเจ็กไปใช้งาน

1.  ติดตั้ง <strong>Git</strong>
2.  ติดตั้ง <strong>Docker</strong> เเละ <strong>Docker-compose</strong>
3.  <strong>git clone</strong>
4.  sudo <strong>composer install</strong>
5.  <strong>cp .env.example .env</strong>
6.  <strong>nano .env</strong>
7.  <strong>DB_CONNECTION=mysql</strong><br>
    <strong>DB_HOST=db</strong><br>
    <strong>DB_PORT=3306</strong><br>
    <strong>DB_DATABASE=laravel</strong><br>
    <strong>DB_USERNAME=root</strong><br>
    <strong>DB_PASSWORD=12345678</strong><br>
8.  <strong>docker-compose up -d</strong>
9.  docker ps
10. <strong>docker-compose exec app php artisan key:generate</strong>
11. <strong>docker-compose exec app php artisan config:cache</strong>
12. ไปที่ <strong>phpmyadmin</strong> โดย <strong>https://\${myip}:9998</strong>
    12.1 ใช้คำสั่ง <strong>GRANT ALL ON laravel.\* TO 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password';</strong>
    12.2 ใช้คำสั่ง <strong>FLUSH PRIVILEGES;</strong>
13. กลับมาที่ หน้า <strong>commandline</strong> ของ <strong>linux</strong> เเล้วใช้คำสั่ง <strong>docker-compose exec app php artisan migrate</strong>
14. ไปที่ หน้า <strong>phpmyadmin</strong> อีกครั้งเเล้วคลิกดูที่ <strong>Database</strong> ว่า table ถูกสร้างหรือไม่ ถ้า ใช่ การ <strong>Deploy ก็เสร็จสมบูรณ์ </strong><br>

    เครดิต :: <strong><a href="https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose"><a/>https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose</a></strong>
