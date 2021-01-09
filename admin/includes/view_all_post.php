
                        <table class="table table-bordered table-hover">
                        <thead>                 
                        <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Topic</th>
                        <th>Vid link</th>
                        <th>Slid link</th>
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
                         echo"<td>$post_id</td>";
                         echo"<td>$post_author</td>";
                         echo"<td>$post_title</td>";
                         echo"<td>$post_topic</td>";
                         echo"<td>$post_video_link</td>";
                         echo"<td>$post_slide_link</td>";
                         echo"<td>$post_category_id</td>";
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