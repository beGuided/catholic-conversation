
<?php 

if(isset($_POST['create_post'])){
$post_author = $_POST['post_author'];
$post_topic = $_POST['post_topic'];
$post_title = $_POST['post_title'];
$post_video_link = $_POST['post_video_link'];
$post_slide_link = $_POST['post_slide_link'];
$post_category_id = $_POST['post_category'];
$post_status = $_POST['post_status'];


$post_image = $_FILES['Image']['name'];
$post_image_temp = $_FILES['Image']['tmp_name'];

$post_details = $_POST['post_details'];
$post_tag = $_POST['post_tag'];
$Post_date = date('d-m-y');



 move_uploaded_file($post_image_temp, "../assets/images/blog/$post_image");

$query = "INSERT INTO post( post_category_id, post_title, post_topic, post_author, post_video_link, post_slide_link, post_date, post_image, post_details, post_tag, post_status)";
$query.="VALUES({$post_category_id},'{$post_title}', '{$post_topic}','{$post_author}','{$post_video_link}','{$post_slide_link}',now(),'{$post_image}','{$post_details}','{$post_tag}','{$post_status}')";

$Create_post_query= mysqli_query($connection, $query);

confirm_query($Create_post_query);
    echo "Post Created" . " " . "<a href='posts.php'>view post</a>";

}

?>
<form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
         <label for="post_title">Post Title</label>
          <input class="form-control" type="text" name="post_title">
         </div>

         <div class="form-group">
         <label for="post_topic">Post topic</label>
          <input class="form-control" type="text" name="post_topic">
         </div>
         
         
<div class="form-group">
         <select name="post_category" id="post_category">
<?php 

$query = "SELECT * FROM categories";
 $select_categories_id = mysqli_query($connection, $query);

 if(!$select_categories_id){
        
    die('failed query'.mysqli_error($connection));
  };

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
         <input type="file" name="Image">
         </div>

        <div class="form-group">    
         <label for="post_video_link">Post Video link</label>
          <input class="form-control" type="text" name="post_video_link">
         </div>


         <div class="form-group">
         <label for="post_slide_link">Post slide link</label>
          <input class="form-control" type="text" name="post_slide_link">
         </div>
         <div class="form-group">
         <label for="post_author">Post Author</label>
          <input class="form-control" type="text" name="post_author">
         </div>

         <div class="form-group">
         <label for="post_status">Post Status</label>
             <select name="post_status" >
                 <option value="draft"> select option</option>
                 <option value="published">Publish</option>
                 <option value="draft">Draft</option>
             </select>
         </div>

        

           <div class="form-group">
         <label for="post_tag">Post Tags</label>
          <input class="form-control" type="text" name="post_tag">
         </div>


           <div class="form-group">
         <label for="post_details">Post details</label>
          <textarea class="form-control"  name="post_details" id="" cols="50" rows="10"></textarea>
         </div>

  <div class="form-group">
         
          <input class="btn-warning" type="submit" name="create_post" value="Publish post">
         </div>
</form>