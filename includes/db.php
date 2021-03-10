<?php

// $DB_NAME="catholic_con";
// $DB_HOST="localhost";
// $DB_USER_NAME="root";
// $DB_PASSWORD="";

// $connection= mysqli_connect($DB_HOST,$DB_USER_NAME,$DB_PASSWORD,$DB_NAME );

// if(!$connection){
//     die('failed query'. mysqli_error($connection));
// }else{
//   //  echo '<h1> connection success</h1>';
// }


//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if(!$conn){
    die('failed query'. mysqli_error($conn));
}else{
  //  echo '<h1> connection success</h1>';
}


?>