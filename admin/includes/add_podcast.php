
<?php

if(isset($_POST['create_podcast'])){
    $podcast_title = escape($_POST['podcast_title']);
    $podcast_status = escape($_POST['podcast_status']);
    $podcast_series = escape($_POST['podcast_series']);
    $podcast_link = escape($_POST['podcast_link']);
    $audio_time = escape($_POST['audio_time']);

    $podcast_image = $_FILES['image']['name'];
    $podcast_image_temp = $_FILES['image']['tmp_name'];

    $podcast_date = date('d-m-y');


    move_uploaded_file($podcast_image_temp, "../assets/images/blog/$podcast_image");

    $query = "INSERT INTO podcast(podcast_title, podcast_date, podcast_link, podcast_series, audio_time, podcast_image, podcast_status)";
    $query.="VALUES('{$podcast_title}',now(),'{$podcast_link}','{$podcast_series}','{$audio_time}','{$podcast_image}','{$podcast_status}')";

    $Create_podcast_query= mysqli_query($connection, $query);
    confirm_query($Create_podcast_query);

    echo "podcast Created" . " " . "<a href='posts.php?source=view_podcast'>view podcast</a>";
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="blog_post_title">Podcast Title</label>
        <input class="form-control" type="text" name="podcast_title">
    </div>

    <div class="form-group">
        <label for="blog_post_title">Podcast Series</label>
        <input class="form-control" type="text"  name="podcast_series">
    </div>
    <div class="form-group">
        <label for="blog_post_title">Podcast link</label>
        <input class="form-control" type="text"  name="podcast_link">
    </div>
    <div class="form-group">
        <label for="blog_post_title">Audio Time</label>
        <input class="form-control" type="text"  name="audio_time">
    </div>


    <div class="form-group">
        <label for="Post status">Podcast Status</label><br>
        <select name="podcast_status" id="status">
            <option value='draft'>select option</option>"
            <option value='draft'>Draft</option>
            <option value='published'>published</option>

        </select>
    </div>

    <div class="form-group">
        <label for="blog_post_image">Podcast Image</label>
        <img width=100 src="../assets/images/blog/<?php echo $podcast_image?>"/>
        <input type="file"  name="image">
    </div>


    <div class="form-group">
        <input class="btn-warning" type="submit"  name="create_podcast" value="create_podcast">
    </div>
</form>