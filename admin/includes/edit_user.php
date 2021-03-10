<?php


if (isset($_GET['edit_user'])) {

    $the_user_id = $_GET['edit_user'];


    $query = "SELECT * FROM users WHERE user_id= {$the_user_id} ";
    $select_users_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_users_query)) {
        $user_id = $row['user_id'];
        $User_name = $row['User_name'];
        $user_password = $row['user_password'];
        $user_firstName = $row['user_firstName'];
        $user_lastName = $row['user_lastName'];
        $user_email = $row['user_email'];
//        $user_image = $row['user_image'];
        $user_role = $row['user_role'];
    }
}

if (isset($_POST['edit_user'])) {
    $user_firstName = $_POST['user_firstName'];
    $user_lastName = $_POST['user_lastName'];
    $user_role = $_POST['user_role'];

// $post_image = $_FILES['Image']['name'];
// $post_image_temp = $_FILES['Image']['tmp_name'];

    $User_name = $_POST['User_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
// $Post_date = date('d-m-y');

// move_uploaded_file($post_image_temp, "../images/$post_image");


/*update users query from the data base*/

//    $query = "SELECT randSalt FROM users";
//    $select_randSalt_query = mysqli_query($connection, $query);
//
//    confirm_query($select_randSalt_query);
//    $row = mysqli_fetch_assoc($select_randSalt_query);
//    $randSalt = $row['randSalt'];
//    $hashed_password = crypt($user_password, $randSalt);

    $query = "UPDATE users SET ";
    $query .= "user_firstName= '{$user_firstName}', ";
    $query .= "user_lastName= '{$user_lastName}', ";
    $query .= "user_role= '{$user_role}', ";
    $query .= "User_name= '{$User_name}', ";
    $query .= "user_email= '{$user_email}', ";
//    $query .= "user_password= '{$hashed_password}' ";
    $query .= "WHERE user_id= {$the_user_id}";

    $Update_user = mysqli_query($connection, $query);
    confirm_query($Update_user);

}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="post_author">Firstname</label>
        <input class="form-control" type="text" name="user_firstName" value="<?php echo $user_firstName; ?>">
    </div>

    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input class="form-control" type="text" name="user_lastName" value="<?php echo $user_lastName; ?>">
    </div>
    <div class="form-group">
        <select name="user_role" id="user_role">

            <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
            <?php
            if ($user_role == 'Admin') {
                echo "<option value='Subscriber'>Subscriber</option>";

            } else {
                echo "<option value='Admin'>Admin</option>";

            }

            ?>

        </select>
    </div>

    <!--  <div class="form-group">
    <label for="Image">Post Images</label>
     <input type="file" name="Image">
    </div> -->

    <div class="form-group">
        <label for="post_tags">Username</label>
        <input class="form-control" type="text" name="User_name" value="<?php echo $User_name; ?>">
    </div>

    <div class="form-group">
        <label for="post_tags">Email</label>
        <input class="form-control" type="text" name="user_email" value="<?php echo $user_email; ?>">
    </div>
    <div class="form-group">
        <label for="post_tags">Password</label>
        <input class="form-control" type="text" name="user_password" value="<?php echo $user_password; ?>">
    </div>


    <div class="form-group">

        <input class="btn-warning" type="submit" name="edit_user" value="update User">
    </div>
</form>


