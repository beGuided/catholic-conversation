
<?php

if(isset($_GET['p_id'])){
   $podcast_id = escape($_GET['p_id']);

    $query = "SELECT * FROM podcast WHERE podcast_id= {$podcast_id}";
    $select_podcast = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_podcast)){
        $podcast_id = escape( $row['podcast_id']);
        $podcast_title = escape($row['podcast_title']);
        $podcast_series = escape($row['podcast_series']);
        $podcast_status = escape($row['podcast_status']);
        $podcast_image = escape($row['podcast_image']);
        $podcast_date = escape($row['podcast_date']);
        $podcast_link = escape($row['podcast_link']);
        $audio_time = escape($row['audio_time']);

    }


    if(isset($_POST['update_podcast'])){
        $podcast_title = $_POST['podcast_title'];
        $podcast_status = $_POST['podcast_status'];
        $podcast_series = $_POST['podcast_series'];
        $podcast_link = escape($_POST['podcast_link']);
        $audio_time = escape($_POST['audio_time']);

        $podcast_image = $_FILES['image']['name'];
        $podcast_image_temp = $_FILES['image']['tmp_name'];

        $blog_Post_date = date('d-m-y');

        move_uploaded_file($podcast_image_temp, "../assets/images/blog/$podcast_image");


        if(empty($podcast_image)){
            $query = "SELECT * FROM podcast WHERE podcast_id = {$podcast_id}";
            $select_image = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_image)) {
                $podcast_mage = escape($row['podcast_image']);
            }
        }


        $query = " UPDATE podcast SET ";
        $query .="podcast_title= '{$podcast_title}', ";
        $query .="podcast_date= now(), ";
        $query .="podcast_series= '{$podcast_series}', ";
        $query .="podcast_link= '{$podcast_link}', ";
        $query .="audio_time= '{$audio_time}', ";
        $query .="podcast_status= '{$podcast_status}', ";
        $query .="podcast_image= '{$podcast_image}' ";
        $query .="WHERE podcast_id= {$podcast_id}";

        $Update_podcast = mysqli_query($connection, $query);
        confirm_query($Update_podcast);

        echo "podcst updated" . " " . "<a href='posts.php?source=view_podcast'>view podcast</a>";


    }
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="blog_post_title">Podcast Title</label>
        <input class="form-control" type="text" value="<?php echo $podcast_title?>" name="podcast_title">
    </div>

    <div class="form-group">
        <label for="blog_post_title">Podcast Series</label>
        <input class="form-control" type="text" value="<?php echo $podcast_series?>" name="podcast_series">
    </div>

    <div class="form-group">
        <label for="blog_post_title">Podcast Link</label>
        <input class="form-control" type="text" value="<?php echo $podcast_link?>" name="podcast_link">
    </div>

    <div class="form-group">
        <label for="blog_post_title">Audio Time</label>
        <input class="form-control" type="text" value="<?php echo $audio_time?>" name="audio_time">
    </div>

    <div class="form-group">
        <label for="Post status">Podcast Status</label><br>
        <select name="podcast_status" id="status">
            <option value='<?php echo $podcast_status?>'><?php echo $podcast_status?></option>"
            <?php
            if($podcast_status == 'published'){
                echo "<option value='draft'>Draft</option>";
            }else{  echo "<option value='published'>published</option>";}
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="blog_post_image">Podcast Image</label>
        <img width=100 src="../assets/images/blog/<?php echo $podcast_image?>"/>
        <input type="file"  name="image">
    </div>


    <div class="form-group">
        <input class="btn-warning" type="submit"  name="update_podcast" value="update_podcast">
    </div>
</form>