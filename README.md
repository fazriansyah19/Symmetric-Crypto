<h3>Requirement</h3>
1. PHP version 7.4.23<br>
2. PostgresSQL (or other database) <br>
3. Composer <br>
4. Git (Optional) <br>

<h3>Installation</h3>
1. git clone https://github.com/fazriansyah19/Symmetric-Crypto.git or download zip file and extract <br>
2. cd to "symmetric-crypto-master" folder <br>
3. composer install <br>
4. create new file ".env" and copy all content in ".env.example" file and paste in .env <br>
5. php artisan key:generate <br>
6. create database "simetrik" or anything and fill the database connection field at ".env" file<br>
7. php artisan migrate <br>
8. php artisan serve <br>
9. open localhost:8000 or 127.0.0.1:8000 in the browser <br>
10. Done <br>
