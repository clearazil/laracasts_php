Following the course at https://laracasts.com/series/php-for-beginners

* Run `sudo docker-compose up -d` to build, (re)create, start, and attach the docker containers.
   * You can view the website at http://localhost:8080/ or http://laracastsphp.local:8080/ if you set up your hosts file.
* Run `mysql -u root -P 13306 -h 127.0.0.1 -p` to connect to mysql running in docker.
   * Run `source \docker-entrypoint-initdb.d\init.sql` in mysql to add data to the database.