<?php include "db.php"?>
<?php session_start();?>
<?php include "function.php" ?>


<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE User_name ='{$username}' ";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query) {
        die('failed query' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($select_user_query)) {

        $db_user_id = $row['user_id'];
        $db_username = $row['User_name'];
        $db_user_password = $row['user_password'];
        $db_user_firstName = $row['user_firstName'];
        $db_user_lastName = $row['user_lastName'];
        $db_user_role = $row['user_role'];
//        echo $db_user_id;
       //$password = crypt($password, $db_user_password);
    if ($username === $db_username && $password === $db_user_password) {

        $_SESSION['User_name'] = $db_username;
        $_SESSION['user_firstname'] = $db_user_firstName;
        $_SESSION['user_lastName'] = $db_user_lastName;
        $_SESSION['user_role'] = $db_user_role;

        header("Location:../admin");

    } else {
        echo "<h1>wrong password</h1>";
        header("Location:../index.php");
    }
}
}

//function escape($string){
//    global $connection;
//    return mysqli_real_escape_string($connection, $string);
//}







?>