<?php

$DB_NAME="catholic_con";
$DB_HOST="localhost";
$DB_USER_NAME="root";
$DB_PASSWORD="";

$connection= mysqli_connect($DB_HOST,$DB_USER_NAME,$DB_PASSWORD,$DB_NAME );

if(!$connection){
    die('failed query'. mysqli_error($connection));
}else{
  //  echo '<h1> connection success</h1>';
}




?>