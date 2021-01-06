<?php include "db.php"?>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="podcasts.php">podcast</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="books.php">Books</a>
                        </li>

                    </ul>
                    <?php 
                    if(isset($_POST['submit'])){
                        $search = $_POST['search']; 

                        $query = "SELECT * FROM post WHERE post_tag LIKE '%$search%' ";

                        $search_query = mysqli_query($connection, $query);
                        if(!$search_query){
                            die('query fialed'. mysqli_error($connection));
                             }

                        $count = mysqli_num_rows($search_query);
                        if($count == 0){
                            echo " <h1> no result</h1>"; 
                        }else {
                            echo " <h1> some result</h1>";
                        }

                    }  
                    
                    ?>


                    <form class="d-flex" action="search.php" method="post">
                        <input class="form-control me-2" type="search" name= "search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" name= "submit" type="submit">video Search</button>
                    </form>
                </div>
            </div>
        