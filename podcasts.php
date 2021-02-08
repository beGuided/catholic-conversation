<?php include "includes/header.php" ?>


<!-- nav section start -->
<?php include "includes/nav.php" ?>
<!-- nav section end -->

</header>


<!-- ---------- -->
<!-- head section start -->
<!-- ---------- -->

<section>
    <div class="container-fluid bg-book"><br><br>
        <h2 class="textblack text-center pt-5 text-white font-20">PODCASTS</h2>
        <div class="divider"></div>
    </div>
    <div class="p-5 text-center textblack">

        <h1 class="m-0">CATHOLIC CONVERSATIONS</h1>
        <h1 class="textblack m-0 text-warning">PODCASTS</h1>
        <div class="divider_full mt-5 img-fluid"></div>
    </div>
</section>

<!-- ---------- -->
<!-- head section end -->
<!-- ---------- -->


<!-- ---------- -->
<!-- Featuring section start -->
<!-- ---------- -->

<div class="container">
    <h1 class="textblack font-20 mb-5">Featuring <b class="pull-right"><a class="text-dark" href="#">></a></b></h1>
</div>
<div class="container">
    <div class="row">


        <!-- col 1 -->
        <div class="m-auto col-lg-4 col-md-4 col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid  w-100" alt="images">
                    </div>
                    <div class="carousel-item m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid  w-100" alt="images">
                    </div>
                    <div class="carousel-item m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid  w-100" alt="images">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

        </div>


        <!-- col 2 -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid bg-book1 w-100"
                             alt="images">
                    </div>
                    <div class="carousel-item m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid bg-book1 w-100"
                             alt="images">
                    </div>
                    <div class="carousel-item m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid bg-book1 w-100"
                             alt="images">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

        </div>


        <!-- col 3 -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid bg-book1 w-100"
                             alt="images">
                    </div>
                    <div class="carousel-item m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid bg-book1 w-100"
                             alt="images">
                    </div>
                    <div class="carousel-item m-1">
                        <img src="assets/images/blog/PODCAST.png" class="d-block img-fluid bg-book1 w-100"
                             alt="images">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- ---------- -->
<!-- Featuring section end -->
<!-- ---------- -->


<!-- ---------- -->
<!-- New episodes start -->
<!-- ---------- -->

<section>

    <div class="container">
        <h1 class="textblack font-20 my-5">New Episodes</h1>
    </div>

    <!-- ---------- -->
    <!-- card 1 start -->
    <!-- ---------- -->
    <div class="container my-3">

        <div class="card p-5">
            <div class="row">
                <?php

                if(isset($_GET['page'])){
                    $page=$_GET['page'];
                }else{
                    $page="";
                }

                if($page == "" || $page ==1){
                    $page_1= 0;
                }else{
                    $page_1 =($page * 8)- 8;
                }

                $post_query_count= "SELECT * FROM podcast WHERE podcast_status ='published'";
                $find_count=mysqli_query($connection, $post_query_count);
                $count = mysqli_num_rows($find_count);
                $count=ceil($count/9);

                $query = "SELECT * FROM podcast WHERE podcast_status='published' ";
                $query .= "ORDER BY podcast_id DESC LIMIT 4 ";
                $select_podcast = mysqli_query($connection, $query);
                confirm_query($select_podcast);
                while ($row = mysqli_fetch_assoc($select_podcast)) {
                    $podcast_id = escape($row['podcast_id']);
                    $podcast_title = escape($row['podcast_title']);
                    $podcast_series = escape($row['podcast_series']);
                    $podcast_status = escape($row['podcast_status']);
                    $podcast_link = escape($row['podcast_link']);
                    $podcast_image = escape($row['podcast_image']);
                    $podcast_date = escape($row['podcast_date']);
                    ?>
                    <div class="col-lg- col-md-5 col-sm-12 m-auto">
                        <img class="img-fluid w-100" src="./assets/images/blog/<?php echo $podcast_image ?>"
                              style="max-height: 200px" alt="book 1">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title textblack font-20"><?php echo $podcast_title ?></h5>
                            <p class="card-text"><big class="text-warning"><?php echo $podcast_series ?></big></p>
                            <div class="row">
                                <div class="col-7">
                                    <h3 class="text-warning">33 mins</h3>
                                </div>
                                <div class="col-5 font-play">
                                    <a href="<?php echo $podcast_link ?>"> <i class=" fa fa-play-circle text-warning"
                                                                              aria-hidden="true"></i></a>

                                </div>
                            </div>

                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>

    <!-- ---------- -->
    <!-- card 1 end -->
    <!-- ---------- -->
    <!-- ---------- -->


    <!-- next button start -->


    <div class="container mt-5 ">
        <ul class="link-n">
            <?php
            for($i=1; $i<=$count; $i++){
                if($i==$page){
                    echo " <li><a class='text-warning link-n p-1' href='podcasts.php?page={$i}'>{$i}</a></li>";
                    //echo "  <li class='page-item'><a class='active_link' href='blog.php?page={$i}'><button class='btn-warning'>{$i}</button> </a></li>";
                }else{
                    echo"<li><a class='link-n text-dark p-1' href='podcasts.php?page={$i}'>{$i}</a></li>";
                }
                // echo "  <li class='page-item'><a class='page-link' href='blog.php?page={$i}'>{$i}</a></li>";}
            }
            ?>


        </ul>
    </div>
    <!-- next button end -->

</section>


<!-- ---------- -->
<!-- New episodes end -->
<!-- ---------- -->


<!--------->
<!-- updates start -->
<!--------->
<?php include "includes/subscribe.php" ?>
<!--------->
<!-- updates end -->
<!--------->


<!--------->
<!-- footer start -->
<!--------->

<?php include "includes/footer.php" ?>

<!--------->
<!-- footer end -->
<!---------> 