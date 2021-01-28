<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">catholic-conv </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php"> home site</a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                <?php
                if(isset($_SESSION['User_name'])){
                echo $_SESSION['User_name']; }
                ?><b class="caret"></b></a>
            <ul class="dropdown-menu">


                <li class="divider"></li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:" data-toggle="collapse" data-target="#Video_post"><i
                            class="fa fa-fw fa-arrows-v"></i> video post <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="Video_post" class="collapse">
                    <li>
                        <a href="./posts.php">All Video Post</a>
                    </li>
                    <li>
                        <a href="./posts.php?source=add_post">Add Post</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:" data-toggle="collapse" data-target="#blog_post"><i
                            class="fa fa-fw fa-arrows-v"></i> Blog post <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="blog_post" class="collapse">
                    <li>
                        <a href="./posts.php?source=view_blog_post"> All Blog Post</a>
                    </li>
                    <li>
                        <a href="./posts.php?source=add_blog_post">Add Post</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="categories.php"><i class="fa fa-fw fa-edit"></i> Categories</a>
            </li>
            <li>
                <a href="comment.php"><i class="fa fa-fw fa-desktop"></i> Comments</a>
            </li>
            <li>
                <a href="javascript:" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i>
                    Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="users" class="collapse">
                    <li>
                        <a href="users.php">View Users</a>
                    </li>
                    <li>
                        <a href="./users.php?source=add_user">Add Users</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>