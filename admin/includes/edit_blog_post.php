
<?php 

if(isset($_GET['p_id'])){
    $the_post_id = $_GET['p_id'];

    $query = "SELECT * FROM blog_post WHERE blog_post_id= {$the_post_id}";
  $select_blog_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_blog_posts)){
    $blog_post_id =escape( $row['blog_post_id']);
    $blog_post_author = escape($row['blog_post_author']);
    $blog_post_title = escape($row['blog_post_title']);
    $blog_post_category_id = escape($row['blog_post_category_id']);
    $blog_post_status = escape($row['blog_post_status']);
    $blog_post_image = escape($row['blog_post_image']);
    $blog_post_tag = escape($row['blog_post_tag']);
    $blog_post_comment_count = escape($row['blog_post_comment_count']);
    $blog_post_date = escape($row['blog_post_date']);
    $blog_post_details = escape($row['blog_post_details']);
}


if(isset($_POST['update_post'])){

$blog_post_author = $_POST['blog_post_author'];
$blog_post_title = $_POST['blog_post_title'];
$blog_post_category_id = $_POST['blog_post_category_id'];
$blog_post_status = $_POST['blog_post_status'];

$blog_post_image = $_FILES['image']['name'];
$blog_post_image_temp = $_FILES['image']['tmp_name'];

$blog_post_details = $_POST['blog_post_details'];
$blog_post_tag = $_POST['blog_post_tag'];
$blog_Post_date = date('d-m-y');



move_uploaded_file($blog_post_image_temp, "../assets/images/blog/$blog_post_image");


if(empty($blog_post_image)){

  $query = "SELECT * FROM blog_post WHERE blog_post_id = {$the_post_id}";
  $select_image = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($select_image)) {
    $blog_post_image =$row['blog_post_image'];
  }
}


$query = " UPDATE blog_post SET ";
$query .="blog_post_title= '{$blog_post_title}', ";
$query .="blog_post_category_id= {$blog_post_category_id}, ";
$query .="blog_post_date= now(), ";
$query .="blog_post_status= '{$blog_post_status}', ";
$query .="blog_post_details= '{$blog_post_details}', ";
$query .="blog_post_image= '{$blog_post_image}' ";
$query .="WHERE blog_post_id= {$the_post_id}";

$Update_Post = mysqli_query($connection, $query);

confirm_query($Update_Post);


echo "post updated" . " " . "<a href='posts.php?source=view_blog_post'>view post</a>";


}
}

?>
<form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
         <label for="blog_post_title">Post Title</label>
          <input class="form-control" type="text" value="<?php echo $blog_post_title?>" name="blog_post_title">
         </div>

         
<div class="form-group">
         <select name="blog_post_category_id" id="post_category">
<?php 

$query = "SELECT * FROM categories";
 $select_categories_id = mysqli_query($connection, $query);

 confirm_query($select_categories_id);
 while ($row = mysqli_fetch_assoc($select_categories_id)) {
$cat_id = escape($row['cat_id']);
$cat_title = escape($row['cat_title']);

echo "<option value='{$cat_id}'>{$cat_title}</option>";
}
?>  

         </select>
</div>

         <div class="form-group">
         <label for="blog_post_author">Post Author</label>
          <input class="form-control" type="text" value="<?php echo $blog_post_author?>" name="blog_post_author">
         </div>

    <div class="form-group">
        <label for="Post status">Post status</label><br>
        <select name="blog_post_status" id="status">
            <option value='<?php echo $blog_post_status?>'><?php echo $blog_post_status?></option>"
            <?php
            if($blog_post_status == 'published'){
                echo "<option value='draft'>Draft</option>";
            }else{  echo "<option value='published'>published</option>";}
            ?>
        </select>
    </div>

         <div class="form-group">
         <label for="blog_post_image">Blog Post Image</label>
         <img width=100 src="../assets/images/blog/<?php echo $blog_post_image?>"/>
         <input type="file"  name="image">
         </div>
        

           <div class="form-group">
         <label for="blog_post_tag">Post Tags</label>
          <input class="form-control" type="text" value="<?php echo $blog_post_tag?>" name="blog_post_tag">
         </div>


           <div class="form-group">
         <label for="blog_post_details">Post details</label>
          <textarea class="form-control"  id="body" name="blog_post_details" cols="20" rows="10">
          <?php echo str_replace('\r\n', '</br>', $blog_post_details)?> 
          <?php //echo $blog_post_details; ?>
          </textarea>
         </div>

  <div class="form-group">
         
          <input class="btn-warning" type="submit"  name="update_post" value="update_post">
         </div>
</form>