
<?php include "includes/admin_header.php";?>


<?php include "includes/admin_nav.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 ">
                        <h1 class="page-header">
                         Welcome to admin
                            <small>post page</small>
                        </h1>        
                                                     
                        <?php 
            if(isset($_GET['source'])){

             $source= $_GET['source'];
                    
            }else{  $source="" ;  
                        }

    switch ($source) {

        // blog post chanel start

        case 'view_blog_post':
            include "includes/view_blog_post.php";
            break;

    case 'add_blog_post':
       include "includes/add_blog_post.php";
       break;

       case 'edit_blog_post':
        include "includes/edit_blog_post.php";
        break;

           // blog post chanel end

        case 'add_post':
          include "includes/add_post.php";

            break;
         case 'edit_post':
            include "includes/edit_post.php";
            break;
       
        default:
           include "includes/view_all_post.php";
            break;
        }

 ?>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/admin_footer.php";?>
