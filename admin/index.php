<?php include "includes/admin_header.php"; ?>
<!-- 
navigation -->
<?php include "includes/admin_nav.php"; ?>

<!-- navigation -->
<div id="page-wrapper">

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to admin
                    <small><?php echo $_SESSION['User_name'] ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-file-text fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <?php
                                $query = "SELECT * FROM post ";
                                $select_all_post = mysqli_query($connection, $query);
                                $posts_count = mysqli_num_rows($select_all_post);
                                echo "<div class='huge'>{$posts_count}</div>";
                                ?>
                                <div>Video Posts</div>
                            </div>
                        </div>
                    </div>
                    <a href="posts.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

                <div class="col-lg-3 col-md-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php
                                    $query = "SELECT * FROM blog_post ";
                                    $select_all_post = mysqli_query($connection, $query);
                                    $blog_posts_count = mysqli_num_rows($select_all_post);
                                    echo "<div class='huge'>{$blog_posts_count}</div>";
                                    ?>
                                    <div>Blog Posts</div>
                                </div>
                            </div>
                        </div>
                        <a href="posts.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                    <?php

                                    $query = "SELECT * FROM Comments ";
                                    $select_all_comment = mysqli_query($connection, $query);
                                    $comments_counts = mysqli_num_rows($select_all_comment);

                                    echo "<div class='huge'>{$comments_counts}</div>";

                                    ?>

                                    <div>Comments</div>
                                </div>
                            </div>
                        </div>
                        <a href="./comment.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">


                                    <?php

                                    $query = "SELECT * FROM users  ";
                                    $select_all_users = mysqli_query($connection, $query);
                                    $users_counts = mysqli_num_rows($select_all_users);

                                    echo "<div class='huge'>{$users_counts}</div>";

                                    ?>
                                    <div> Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="users.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                    <?php

                                    $query = "SELECT * FROM categories  ";
                                    $select_all_Categories = mysqli_query($connection, $query);
                                    $Categories_counts = mysqli_num_rows($select_all_Categories);

                                    echo "<div class='huge'>{$Categories_counts}</div>";

                                    ?>
                                    <div>Categories</div>
                                </div>
                            </div>
                        </div>
                        <a href="categories.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            <div class="col-lg-3 col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-file-text fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <?php

                                $query = "SELECT * FROM podcast  ";
                                $select_all_podcast = mysqli_query($connection, $query);
                                $podcast_counts = mysqli_num_rows($select_all_podcast);

                                echo "<div class='huge'>{$podcast_counts}</div>";

                                ?>
                                <div>podcast</div>
                            </div>
                        </div>
                    </div>
                    <a href="posts.php?source=view_podcast">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>
