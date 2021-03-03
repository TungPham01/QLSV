<?php
define("dbhost","localhost");
define("dbuser","root");
define("dbpass","");
define("dbname","php_basic");

$conn = mysqli_connect(dbhost,dbuser,dbpass,dbname);

mysqli_set_charset($conn,"utf8");

if(mysqli_connect_error()){
    var_dump(mysqli_connect_error());
    die();
}
?>