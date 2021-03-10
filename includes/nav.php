<?php include "db.php"?>
<?php //include "function.php"?>


 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-3 ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/images/blog/logo.png" alt="logo"></a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-warning "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item ">
                            <a class="nav-link  text-warning" aria-current="page" href="index.php">Home</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="videos.php">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-warning" aria-current="page" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" aria-current="page" href="podcasts.php">Podcast</a>
                        </li>
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link active text-warning" aria-current="page" href="books.php">Books</a>-->
<!--                        </li>-->
        

                        <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="about.php">About</a>
                        </li>
                       
                    </ul>
                    <?php 

                    if(isset($_POST['submit'])){
                        $search = escape($_POST['search']);
                        $query = "(SELECT post_tag, 'post' as type FROM post  WHERE post_tag LIKE '%".$search ."%' )
                        UNION
                        (SELECT blog_post_tag, 'blog' as type FROM blog_post WHERE blog_post_tag LIKE '%$search%')";

                        $search_query = mysqli_query($connection, $query);
                        confirm_query($search_query);
//                        $count = mysqli_num_rows($search_query);
//                        if($count == 0){
//                            echo " <h1> no result</h1>";
//                        }else {
//                            echo " <h1> some result</h1>";
//                        }
//
                    }
                    ?>
                    <form class="d-flex" action="search.php?search=" method="post">
                        <input class="form-control me-2" type="search" name= "search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" name= "submit" type="submit">Search</button>

                    </form>
                </div>
            </div>
        