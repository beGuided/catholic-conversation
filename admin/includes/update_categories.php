<form action="" method="post"> 
                        <label for="cat_title"> Update category </label>
                            <div class='form-group'> 


                            <?php
                            if(isset($_GET['update'])){
                                $cat_id = $_GET['update'];

                                $query = "SELECT * FROM categories WHERE cat_id=$cat_id ";
                                $select_categories_id = mysqli_query($connection, $query);
                               
                                while ($row = mysqli_fetch_assoc($select_categories_id)) {
                               $cat_id = $row['cat_id'];
                               $cat_title = $row['cat_title'];
                                    ?>
  <input class="form-control" type="text" name="cat_title" value="<?php if(isset($cat_title)){ echo $cat_title;}?> "> 

                            <?php }} ?>


                            <!--////////////// update query -->

                            <?php
                            if(isset($_POST['update'])){
                                
                                $the_cat_title = $_POST['cat_title'];
                               
                                $query="UPDATE categories SET cat_title='{$the_cat_title}' WHERE cat_id = {$cat_id}";
                                $update_query = mysqli_query($connection, $query);
                                header("Location:categories.php");

                                if(!$update_query){
                                    die('failed query'. mysqli_error($connection));
                                }
                            }
                            
                            
                            ?>
                            
                            </div>
                            <div class='form-group'> 
                            <input class="btn btn-warning" type="submit" name="update" value="update Category">
                            </div>
                          </form>
                         
                         