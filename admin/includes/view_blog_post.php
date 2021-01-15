
               <div class="col-lg-12 col-sm-12 table-responsive">  
               <table class="table table-bordered table-hover ">
                        <thead>                 
                        <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Title</th>
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

                        $query = 'SELECT * FROM blog_post';
                        $select_posts = mysqli_query($connection, $query);

                         while ($row = mysqli_fetch_assoc($select_posts)){
                            $blog_post_id = $row['blog_post_id'];
                            $blog_post_author = $row['blog_post_author'];
                            $blog_post_title = $row['blog_post_title'];
                            $blog_post_category_id = $row['blog_post_category_id'];
                            $blog_post_status = $row['blog_post_status'];
                            $blog_post_image = $row['blog_post_image'];
                            $blog_post_tag = $row['blog_post_tag'];
                            $blog_post_comment_count = $row['blog_post_comment_count'];
                            $blog_post_date = $row['blog_post_date'];
                       
                         echo "<tr>";
                         echo"<td>$blog_post_id</td>";
                         echo"<td>$blog_post_author</td>";
                         echo"<td>$blog_post_title</td>";
                         echo"<td>$blog_post_category_id</td>";
                         echo"<td>$blog_post_status</td>";
                         echo"<td><img width=100px img src='../assets/images/blog/$blog_post_image' alt='image'></td>";
                         echo"<td>$blog_post_tag</td>";
                         echo"<td>$blog_post_comment_count</td>";
                         echo"<td>$blog_post_date</td>";
                         echo"<td><a href='posts.php?source=edit_blog_post&p_id={$blog_post_id};'>Edit</a></td>";
                         echo"<td><a onClick=\"javascript: return confirm('are you sure you want to delete');\" href='posts.php?source=view_blog_post&delete={$blog_post_id};'>Delete</a></td>";
                     
                        echo "</tr>";
                        }?>
                       

                        
                        </tbody>
                        
                        </table>    
                        

                        <?php 

if (isset($_GET['delete'])) {
    echo $_GET['delete'];
    
$blog_post_id = $_GET['delete'];

$query="DELETE FROM blog_post WHERE blog_post_id = {$blog_post_id}";   

    $delete_query= mysqli_query($connection,$query );
    header("Location:posts.php?source=view_blog_post");


}
     ?>
                        </div >