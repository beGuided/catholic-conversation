

<?php
if(isset($_POST['subscribe'])){
    $user_email=escape($_POST['email']);
echo $user_email;

    $query = "INSERT INTO users( user_firstName, user_lastName, user_role, user_name, User_email,user_password,randSalt)";
    $query.="VALUES('null', 'null','subscriber','null','{$user_email}','null','null')";
    $Create_user_query= mysqli_query($connection, $query);
    if(!$Create_user_query){
        die('failed query'.mysqli_error($connection));
    }
}

?>

<div class="container-fluid p-4">
    <div class="container p-4 bg-light">
        <h3 class="text-center"><b>Receive updates from Catholic Conversations</b></h3>
        <form action="" method="post">
            <div class="d-flex form-group text-center mt-5">
                <input type="email" class="form-control " name="email" id="email"
                       placeholder="Enter e-mail here"/>
                <button type="submit" name="subscribe" class=" btn-warning btn"><b>SUBSCRIBE</b></button>
            </div>
        </form>

    </div>
</div>