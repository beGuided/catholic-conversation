<?php include "../includes/db.php"?>

 <?php
if(isset($_POST['checkBoxesArray'])){
    foreach ($_POST['checkBoxesArray'] as $postValueId) {
           $bulk_options =$_POST['bulk_options'];

          switch($bulk_options){
              case 'draft':
                  $query="UPDATE post SET post_status = '{$bulk_options}' WHERE post_id= {$postValueId}";
                  $update_to_publish_status =mysqli_query($connection, $query);
                confirm_query($update_to_publish_status);
                  break;
              case 'published':
                  $query="UPDATE post SET post_status = '{$bulk_options}' WHERE post_id= {$postValueId}";
                  $update_to_publish_status =mysqli_query($connection, $query);
                  confirm_query($update_to_publish_status);
                  break;

              case 'delete':
                  $query="DELETE FROM post WHERE post_id = {$postValueId}";
                  $delete_query= mysqli_query($connection,$query );
                  confirm_query($delete_query);
          }   header("Location:posts.php");
    }
}
?>
<div class="table-responsive">
<form action="" method="post">
<table class="table table-bordered table-hover ">

    <div id ="bulkOptionsContainer" class="col-xs-4">
        <select class="form-control" name="bulk_options" id="">
            <option value="">Select Option</option>
            <option value="published">Publish</option>
            <option value="draft">Draft</option>
            <option value="delete">Delete</option>
        </select>
    </div>
    <div class="col-xs-4">
        <input type="submit" name="submit" class="btn btn-success" value="Apply">
        <a class="btn btn-primary" href="./posts.php?source=add_post">Add New</a>
    </div>
               <div class="col-lg-12 col-sm-12 table-responsive">  
               <table class="table table-bordered table-hover ">
                        <thead>                 
                        <tr>
                            <th><input id='selectAll' type="checkbox" name=''></th>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Topic</th>
                        <th style="width:10px">Vid link</th>
                        <th style="width:10px">Slide link</th>
                        <th>Categories</th>
                        <th>Status</th>
                        <th>Images</th> 
                        <th>Tags</th>
                        <th>Comments</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr></thead>
                        <tbody>

                                             
                        <?php 

                        $query = 'SELECT * FROM post';
                        $select_posts = mysqli_query($connection, $query);

                         while ($row = mysqli_fetch_assoc($select_posts)){
                            $post_id = $row['post_id'];
                            $post_author = $row['post_author'];
                            $post_title = $row['post_title'];
                            $post_topic = $row['post_topic'];
                            $post_video_link = $row['post_video_link'];
                            $post_slide_link = $row['post_slide_link'];
                            $post_title = $row['post_title'];
                            $post_category_id = $row['post_category_id'];
                            $post_status = $row['post_status'];
                            $post_image = $row['post_image'];
                            $post_tag = $row['post_tag'];
                            $post_comment_count = $row['post_comment_count'];
                            $post_date = $row['post_date'];
                       
                         echo "<tr>";
                         ?>
                        <td> <input class='checkBoxes' type='checkbox' name='checkBoxesArray[]' value='<?php echo $post_id;?>'></td>
                        <?php
                        echo"<td>$post_id</td>";
                         echo"<td>$post_author</td>";
                         echo"<td>$post_title</td>";
                         echo"<td>$post_topic</td>";
                         echo"<td>$post_video_link</td>";
                         echo"<td>$post_slide_link</td>";
                         $query = "SELECT * FROM categories WHERE cat_id={$post_category_id} ";
                         $select_categories_id = mysqli_query($connection, $query);
                        
                         while ($row = mysqli_fetch_assoc($select_categories_id)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo"<td>{$cat_title}</td>";}
                        // echo"<td>$post_category_id</td>";
                         echo"<td>$post_status</td>";
                         echo"<td><img width=100px img src='../assets/images/blog/$post_image' alt='image'></td>";
                         echo"<td>$post_tag</td>";
                         echo"<td>$post_comment_count</td>";
                         echo"<td>$post_date</td>";
                         echo"<td><a href='posts.php?source=edit_post&p_id={$post_id};'>Edit</a></td>";
                         echo"<td><a onClick=\"javascript: return confirm('are you sure you want to delete');\" href='posts.php?delete={$post_id};'>Delete</a></td>";
                     
                        echo "</tr>";
                        }?>

                        </tbody>
                        </table>
</form>

                        <?php 

if (isset($_GET['delete'])) {
    
$the_post_id = $_GET['delete'];

$query="DELETE FROM post WHERE post_id = {$the_post_id}";   

    $delete_query= mysqli_query($connection,$query );
    header("Location:posts.php");


}
     ?>
                        </div >