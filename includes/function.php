<?php

function escape($string){
    global $connection;
    return mysqli_real_escape_string($connection, trim($string));
}

function confirm_query($result){
    global $connection;
    if(!$result){

        die('failed query'.mysqli_error($connection));
    }

}
?>