
<?php 

if(isset($_GET['p_id'])){
    $the_post_id = $_GET['p_id'];

    $query = "SELECT * FROM post WHERE post_id= {$the_post_id}";
    $select_post_by_id = mysqli_query($connection, $query);

     while ($row = mysqli_fetch_assoc($select_post_by_id)){
        $post_id = escape($row['post_id']);
        $post_author = escape($row['post_author']);
        $post_title = escape($row['post_title']);
        $post_topic = escape($row['post_topic']);
        $post_details = $row['post_details'];
        $post_video_link = escape($row['post_video_link']);
        $post_slide_link = escape($row['post_slide_link']);
        $post_title = escape($row['post_title']);
        $post_category_id = escape($row['post_category_id']);
        $post_status =escape( $row['post_status']);
        $post_image = escape($row['post_image']);
        $post_tag = escape($row['post_tag']);
        $post_comment_count = escape( $row['post_comment_count']);
        $post_date = escape($row['post_date']);
     }

}


if(isset($_POST['update_post'])){


$post_author = $_POST['post_author'];
$post_topic = $_POST['post_topic'];
$post_title = $_POST['post_title'];
$post_video_link = $_POST['post_video_link'];
$post_slide_link = $_POST['post_slide_link'];
$post_category_id = $_POST['post_category_id'];
$post_status = $_POST['post_status'];


$post_image = $_FILES['Image']['name'];
$post_image_temp = $_FILES['Image']['tmp_name'];

$post_details = $_POST['post_details'];
$post_tag = $_POST['post_tag'];
$Post_date = date('d-m-y');



 move_uploaded_file($post_image_temp, "../assets/images/blog/$post_image");
 
 if(empty($post_image)){

  $query = "SELECT * FROM post WHERE post_id = $the_post_id";
  $select_image = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($select_image)) {
    $post_image =$row['post_image'];
  }
}




$query = " UPDATE post SET ";
$query .="post_title= '{$post_title}', ";
$query .="post_category_id= {$post_category_id}, ";
$query .="post_date= now(), ";
$query .="post_status= '{$post_status}', ";
$query .="post_details= '{$post_details}', ";
$query .="post_image= '{$post_image}', ";
$query .="post_topic= '{$post_topic}', ";
$query .="post_video_link= '{$post_video_link}', ";
$query .="post_slide_link= '{$post_slide_link}' ";
$query .="WHERE post_id= {$the_post_id}";

$Update_Post = mysqli_query($connection, $query);

confirm_query($Update_Post);

    echo "Post Updated" . " " . "<a href='posts.php'>view post</a>";

}

?>
<form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
         <label for="post_title">Post Title</label>
          <input class="form-control"  value="<?php echo $post_title?>" type="text" name="post_title">
         </div>

         <div class="form-group">
         <label for="post_topic">Post topic</label>
          <input class="form-control" value="<?php echo $post_topic?>" type="text" name="post_topic">
         </div>
         
         
<div class="form-group">
<label for="post_category_id">Post category</label><br>
         <select name="post_category_id" id="post_category_id">
<?php 

$query = "SELECT * FROM categories";
 $select_categories_id = mysqli_query($connection, $query);

 confirm_query($select_categories_id);

 while ($row = mysqli_fetch_assoc($select_categories_id)) {
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];

echo "<option value='{$cat_id}'>{$cat_title}</option>";
}
?>
         </select>
</div>



<div class="form-group">
         <label for="blog_post_image">Post Image</label>
         <img width=100 src="../assets/images/blog/<?php echo $post_image?>"/>
         <input type="file"  name="Image">
         </div>

        <div class="form-group">    
         <label for="post_video_link">Post Video link</label>
          <input class="form-control"  value="<?php echo $post_video_link?>" type="text" name="post_video_link">
         </div>


         <div class="form-group">
         <label for="post_slide_link">Post slide link</label>
          <input class="form-control"  value="<?php echo $post_slide_link?>" type="text" name="post_slide_link">
         </div>
         <div class="form-group">
         <label for="post_author">Post Author</label>
          <input class="form-control"  value="<?php echo $post_author?>" type="text" name="post_author">
         </div>

    <div class="form-group">
        <label for="Post status">Post status</label><br>
        <select name="post_status" id="status">
            <option value='<?php echo $post_status?>'><?php echo$post_status?></option>"
            <?php
            if($post_status == 'published'){
                echo "<option value='draft'>Draft</option>";
            }else{  echo "<option value='published'>published</option>";}
            ?>

        </select>
    </div>


           <div class="form-group">
         <label for="post_tag">Post Tags</label>
          <input class="form-control"  value="<?php echo $post_tag?>" type="text" name="post_tag">
         </div>


           <div class="form-group">
         <label for="post_details">Post details</label>
          <textarea class="form-control"   name="post_details" cols="20" rows="10"> <?php echo str_replace('\r\n', '</br>', $post_details);?></textarea>
         </div>


  <div class="form-group">
         
          <input class="btn-warning" type="submit" name="update_post" value="update_post">
         </div>
</form>