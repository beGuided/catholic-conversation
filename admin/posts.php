<?php include "includes/admin_header.php"; ?>


<?php include "includes/admin_nav.php"; ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 col-sm-12 ">
                <h1 class="page-header">
                    Welcome to admin
                    <small><?php echo $_SESSION['User_name'] ?></small>
                </h1>

                <?php
                if (isset($_GET['source'])) {

                    $source = $_GET['source'];

                } else {
                    $source = "";
                }

                switch ($source) {


                    //            podcast
                    case 'view_podcast':
                        include "includes/view_podcast.php";
                        break;

                    case 'add_podcast':
                        include "includes/add_podcast.php";
                        break;

                    case 'edit_podcast':
                        include "includes/edit_podcast.php";
                        break;

//            podcast
                    // blog post channel start

                    case 'view_blog_post':
                        include "includes/view_blog_post.php";
                        break;

                    case 'add_blog_post':
                        include "includes/add_blog_post.php";
                        break;

                    case 'edit_blog_post':
                        include "includes/edit_blog_post.php";
                        break;

//            blog post channel end

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

<?php include "includes/admin_footer.php"; ?>
