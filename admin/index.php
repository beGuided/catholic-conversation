
<?php include "includes/admin_header.php";?>

<!-- 
navigation -->
<?php include "includes/admin_nav.php";?>

<!-- navigation -->

        <div id="page-wrapper">

        <?php if($connection){
            echo 'helloworld';
        } ?>



            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Admin Page
                            <small>Subheading</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/admin_footer.php";?>
