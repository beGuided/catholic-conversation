

<?php
if(isset($_POST['subscribe'])){
    $user_email=escape($_POST['email']);

    $query = "INSERT INTO users( user_firstName, user_lastName, user_role, user_name, User_email,user_password,randSalt)";
    $query.="VALUES('null', 'null','subscriber','null','{$user_email}','null','null')";
    $Create_user_query= mysqli_query($connection, $query);
    if(!$Create_user_query){
        die('failed query'.mysqli_error($connection));
    }
}

?>

<div class="container p-4" id="subscribe">
    <div class="row">
        <div class="col-sm-10 col-md-10 col-10">
            <div class="container p-4 bg-light">
        <h3 class="text-center"><b> Subscribe to Receive updates from Catholic Conversations</b></h3>
        <form action="" method="post">
            <div class="d-flex form-group text-center mt-5">
                <input type="email" class="form-control " name="email" id="email"
                       placeholder="Enter e-mail here"/>
                <button type="submit" name="subscribe" class=" btn-warning btn img-responsive"><b>SUBSCRIBE</b></button>
            </div>
        </form>

    </div>
        </div>
        
    </div>
    
</div>