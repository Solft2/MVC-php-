<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
define('DBNAME','my_db');
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');

define('ROOT','http://localhost/mvc/public');
}else{
    define('ROOT','http://www.website.com.br');
}