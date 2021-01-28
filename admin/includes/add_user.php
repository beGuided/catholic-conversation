
<?php

if(isset($_POST['Creat_user'])){
    $user_firstName = $_POST['user_firstName'];
    $user_lastName = $_POST['user_lastName'];
    $user_role = $_POST['user_role'];
//    $randSalt = $_POST['randSalt'];

// $post_image = $_FILES['Image']['name'];
// $post_image_temp = $_FILES['Image']['tmp_name'];

    $User_name = $_POST['User_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
// $Post_date = date('d-m-y');

// move_uploaded_file($post_image_temp, "../images/$post_image");

    $query = "INSERT INTO users( user_firstName, user_lastName, user_role, User_name, user_email,user_password,randSalt)";
    $query.="VALUES('{$user_firstName}', '{$user_lastName}','{$user_role}','{$User_name}','{$user_email}','{$user_password}','null')";
    $Create_user_query= mysqli_query($connection, $query);

   confirm_query($Create_user_query);

    echo "User Created" . " " . "<a href='users.php'>view users</a>";
};

?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="post_author">Firstname</label>
        <input class="form-control" type="text" name="user_firstName" >
    </div>

    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input class="form-control" type="text" name="user_lastName" >
    </div>
    <div class="form-group">
        <select name="user_role" id="user_role">
            <option value="Subscriber">Select Option</option>
            <option value="Admin">Admin</option>
            <option value="Subscriber">Subscriber</option>

        </select>
    </div>

    <!--  <div class="form-group">
    <label for="Image">Post Images</label>
     <input type="file" name="Image">
    </div> -->

    <div class="form-group">
        <label for="post_tags">Username</label>
        <input class="form-control" type="text" name="User_name" >
    </div>

    <div class="form-group">
        <label for="post_tags">Email</label>
        <input class="form-control" type="text" name="user_email" >
    </div>
    <div class="form-group">
        <label for="post_tags">Password</label>
        <input class="form-control" type="password" name="user_password" >
    </div>
    <div class="form-group">
        <input class="btn-warning" type="submit" name="Creat_user" value="Creat_user">
    </div>
</form>
