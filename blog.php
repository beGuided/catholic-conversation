<?php include "includes/header.php" ?>

<!-- nav section start -->
<?php include "includes/nav.php" ?>
<!-- nav section end -->
</header>


<!-- ---------- -->
<!-- head section start -->
<!-- ---------- -->

<section>
    <div class="container-fluid bg-book">
        <h2 class="textblack text-center pt-5 text-white font-20">BLOG</h2>
        <div class="divider"></div>
    </div>
    <div class="p-5 text-center textblack ">

        <h1 class="m-0">CATHOLIC CONVERSATIONS</h1>
        <h1 class="textblack m-0 text-warning">BLOG</h1>
        <div class="divider_full mt-5 img-fluid"></div>
    </div>
</section>

<!-- ---------- -->
<!-- head section end -->
<!-- ---------- -->

<!--------->
<!-- blog section start -->
<!--------->

<section>
    <div class="container ">
        <div class="row ">
            <?php
            $query = "SELECT * FROM blog_post WHERE blog_post_status='published' LIMIT 9";
            $blogPost_query = mysqli_query($connection, $query);

            if (!$blogPost_query) {
                die('failed query' . mysqli_error($connection));
            }
            while ($row = mysqli_fetch_assoc($blogPost_query)) {
            $blog_post_id = $row['blog_post_id'];
            $blog_post_title = $row['blog_post_title'];
            $blog_post_image = $row['blog_post_image'];
            $blog_post_details = substr($row['blog_post_details'], 0, 200);
            $blog_post_status = $row['blog_post_status'];
            ?>
<!--            <div class="col-md-4 col-12 col-sm-12 col-lg-4 position-relative my-1 ">-->
<!--                <img src="assets/images/blog/rosary.png" style="width: 100%;" alt="test"-->
<!--                     class="img-responsive bg-blog ">-->
<!--                <div class="position-absolute p-5 top-0 end-0 ">-->
<!--                    <h3 class="text-white bg-blog-back">--><?php //echo $blog_post_title;?><!--.</h3>-->
<!--                </div>-->
<!--                <div class="position-absolute bottom-0 end-0  p-5">-->
<!--                    <a href="#" class="btn btn-warning pull-right btn-margin px-5 textblack font-10"> >-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->


                <div class="col-md- col-12 col-sm-12 col-lg-4 col-xl-4 position-relative my-1  ">
                    <a href="post.php?source=blog_post_details&p_id=<?php echo $blog_post_id ?>">
                    <img src="assets/images/blog/<?php echo $blog_post_image;?>" style="width: 100%;" alt="test" class="img-responsive m-0">
                    <div class="position-absolute p-5 top-0 end-0 ">
                        <h3 class="text-white bg-blog-back"><?php echo $blog_post_title;?></h3>
                    </div>
                    <div class="position-absolute bottom-0 end-0  p-5">
                        <a href="#" class="btn btn-warning pull-right btn-margin px-5 textblack font-10"> >
                        </a>
                    </div>
                    </a>
                </div>
            <?php } ?>

<!--            <div class="col-md-4 col-12 col-sm-12 col-lg-4 position-relative my-1 ">-->
<!--                                <img src="assets/images/blog/rosary.png" style="width: 100%;" alt="test"-->
<!--                                     class="img-responsive bg-blog ">-->
<!--                                <div class="position-absolute p-5 top-0 end-0 ">-->
<!--                                    <h3 class="text-white bg-blog-back">--><?php //echo $blog_post_title;?><!--.</h3>-->
<!--                                </div>-->
<!--                                <div class="position-absolute bottom-0 end-0  p-5">-->
<!--                                    <a href="#" class="btn btn-warning pull-right btn-margin px-5 textblack font-10"> >-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--            <div class="col-md-7 col-12 col-sm-12 col-lg-7 position-relative my-1">-->
<!--                <img src="assets/images/blog/rosary.png" style="width: 100%;" alt="test"-->
<!--                     class="img-responsive bg-blog ">-->
<!--                <div class="position-absolute p-5 top-0 end-0 ">-->
<!--                    <h3 class="text-white bg-blog-back">Example headline.</h3>-->
<!--                </div>-->
<!--                <div class="position-absolute bottom-0 end-0  p-5">-->
<!--                    <a href="#" class="btn btn-warning pull-right btn-margin px-5 textblack font-10"> >-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->


        <!-- ------- -->



</section>

<!-- ---------- -->
<!-- blog section end -->
<!-- ---------- -->


<!--------->
<!-- updates start -->
<!--------->
<?php include "includes/subscribe.php" ?>>
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





