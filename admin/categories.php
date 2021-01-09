
<?php include "includes/admin_header.php";?>


<?php include "includes/admin_nav.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Admin Page
                            <small>Subheading</small>
                        </h1>                      

                        <!-- Add category form -->
                        <div class="col-xs-6">

                          <?php insert_categories();  ?>

                        <form action="" method="post"> 
                        <label for="cat_title"> Add category </label>
                            <div class='form-group'> 
                            <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class='form-group'> 
                            <input class="btn btn-warning" type="submit" name="submit" value="Add Category">
                            </div>
                          </form> <!-- Add category form -->


                          <!-- update and include category query  -->

                          <?php
                    if(isset($_GET['update'])){
                    $cat_id= $_GET['update'];
                    include "includes/update_categories.php";}   ?>         
                         
                    
                             
                       <!-- update category form -->

                        </div>

                        
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">     
                                <thead>
                                <tr>
                                    <th>Id</th>   
                                    <th>category title</th>                           
                              </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php  // find all categories query
                                  findAllCategories();  ?>

                                <?php  // delete category query
                                   deleteCategories();   ?>
                                
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/admin_footer.php";?>
