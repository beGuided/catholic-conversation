
<?php 

if(isset($_POST['create_post'])){
$blog_post_author = escape($_POST['blog_post_author']);
$blog_post_title = escape($_POST['blog_post_title']);
$blog_post_category_id = escape($_POST['blog_post_category_id']);
$blog_post_status = escape($_POST['blog_post_status']);

$blog_post_image = $_FILES['image']['name'];
$blog_post_image_temp = $_FILES['image']['tmp_name'];

$blog_post_details = $_POST['blog_post_details'];
$blog_post_tag = $_POST['blog_post_tag'];
$blog_Post_date = date('d-m-y');


 move_uploaded_file($blog_post_image_temp, "../assets/images/blog/$blog_post_image");

$query = "INSERT INTO blog_post( blog_post_category_id, blog_post_title, blog_post_author, blog_post_date, blog_post_image, blog_post_details, blog_post_tag, blog_post_status)";
$query.="VALUES({$blog_post_category_id},'{$blog_post_title}','{$blog_post_author}',now(),'{$blog_post_image}','{$blog_post_details}','{$blog_post_tag}','{$blog_post_status}')";

$Create_post_query= mysqli_query($connection, $query);

confirm_query($Create_post_query);

    echo "post Created" . " " . "<a href='posts.php?source=view_blog_post'>view post</a>";
}

?>
<form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
         <label for="blog_post_title">Blog Post Title</label>
          <input class="form-control" type="text" name="blog_post_title">
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
         <label for="blog_post_author">Blog Post Author</label>
          <input class="form-control" type="text" name="blog_post_author">
         </div>

    <div class="form-group">
        <label for="blog_post_status">Blog Post Status</label>
        <select name="blog_post_status">
            <option value="draft"> select option</option>
            <option value="published">Publish</option>
            <option value="draft">Draft</option>
        </select>
    </div>

         <div class="form-group">
         <label for="blog_post_image">Blog Post Image</label>
          <input class="" type="file" name="image">
         </div>
        

           <div class="form-group">
         <label for="blog_post_tag">Post Tags</label>
          <input class="form-control" type="text" name="blog_post_tag">
         </div>


           <div class="form-group">
         <label for="blog_post_details">Post details</label>
          <textarea class="form-control"  name="blog_post_details" id="body" cols="70" rows="10"></textarea>
         </div>

  <div class="form-group">
         
          <input class="btn-warning" type="submit" name="create_post" value="Publish_post">
         </div>
</form>