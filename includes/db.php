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
$cleardb_url = parse_url(getenv("mysql://ba25a7fbb128b6:70da6f73@us-cdbr-east-03.cleardb.com/heroku_363dd4c0f1a785a?reconnect=true
"));
$cleardb_server = $cleardb_url["us-cdbr-east-03.cleardb.com"];
$cleardb_username = $cleardb_url["ba25a7fbb128b6"];
$cleardb_password = $cleardb_url["70da6f73"];
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