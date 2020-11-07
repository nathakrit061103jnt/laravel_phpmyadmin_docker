## วิธีนำโปรเจ็กไปใช้งาน

1.  ติดตั้ง <h3>Git</h3>
2.  ติดตั้ง <h3>Docker</h3> เเละ <h3>Docker-compose</h3>
3.  <h3>git clone</h3>
4.  sudo <h3>composer install</h3>
5.  <h3>cp .env.example .env</h3>
6.  <h3>nano .env</h3>
7.  <h3>DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=12345678</h3>
8.  <h3>docker-compose up -d</h3>
9.  docker ps
10. <h3>docker-compose exec app php artisan key:generate</h3>
11. <h3>docker-compose exec app php artisan config:cache</h3>
12. ไปที่ <h3>phpmyadmin</h3> โดย <h3>https://\${myip}:9998</h3>
    12.1 ใช้คำสั่ง <h3>GRANT ALL ON laravel.\* TO 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password';</h3>
    12.2 ใช้คำสั่ง <h3>FLUSH PRIVILEGES;</h3>
13. กลับมาที่ หน้า <h3>commandline</h3> ของ <h3>linux</h3> เเล้วใช้คำสั่ง <h3>docker-compose exec app php artisan migrate</h3>
14. ไปที่ หน้า <h3>phpmyadmin</h3> อีกครั้งเเล้วคลิกดูที่ <h3>Database</h3> ว่า table ถูกสร้างหรือไม่ ถ้า ใช่ การ <h3>Deploy ก็เสร็จสมบูรณ์ </h3>
    1
    เครดิดจาก :: <h3 href="https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose">https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose</a></a>
