
<?php 

if(isset($_POST['create_post'])){

$blog_post_author = $_POST['blog_post_author'];
$blog_post_title = $_POST['blog_post_title'];
$blog_post_category_id = $_POST['blog_post_category_id'];
$blog_post_status = $_POST['blog_post_status'];

$blog_post_image = $_FILES['image']['name'];
$blog_post_image_temp = $_FILES['image']['tmp_name'];

$blog_post_details = $_POST['blog_post_details'];
$blog_post_tag = $_POST['blog_post_tag'];
$blog_Post_date = date('d-m-y');
$blog_post_comment_count = 4;


 move_uploaded_file($blog_post_image_temp, "../assets/images/blog/$blog_post_image");

$query = "INSERT INTO blog_post( blog_post_category_id, 
blog_post_title, blog_post_author, blog_post_date, blog_post_image, blog_post_details, blog_post_tag, blog_post_status, blog_post_comment_count)";  
$query.="VALUES({$blog_post_category_id},'{$blog_post_title}', 
'{$blog_post_author}',now(),'{$blog_post_image}','{$blog_post_details}','{$blog_post_tag}','{$blog_post_status}', {$blog_post_comment_count})";

$Create_post_query= mysqli_query($connection, $query);

confirm_query($Create_post_query);

 


}

?>
<form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
         <label for="blog_post_title">Post Title</label>
          <input class="form-control" type="text" name="blog_post_title">
         </div>

         
<div class="form-group">
         <select name="blog_post_category_id" id="post_category">
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
         <label for="blog_post_author">Post Author</label>
          <input class="form-control" type="text" name="blog_post_author">
         </div>

         <div class="form-group">
         <label for="blog_post_status">Post Status</label>
          <input class="form-control" type="text" name="blog_post_status">
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
          <textarea class="form-control"  name="blog_post_details" cols="30" row="10"></textarea>
         </div>

  <div class="form-group">
         
          <input class="btn-warning" type="submit" name="create_post" value="Publish_post">
         </div>
</form>