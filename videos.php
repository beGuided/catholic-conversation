<?php include "includes/header.php" ?>


<!-- nav section start -->
<?php include "includes/nav.php" ?>
<!-- nav section end -->
</header>


<!-- ---------- -->
<!-- head section start -->
<!-- ---------- -->

<section>
    <div class="container-fluid bg-guys"><br><br>
        <h2 class="textblack text-center pt-5 text-white font-20">Videos</h2>
        <div class="divider"></div>
    </div>
    <div class="p-5 text-center textblack ">

        <h3 class="m-0">CATHOLIC CONVERSATIONS</h3>
        <h3 class="textblack m-0 text-warning">VIDEOS</h3>
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

            $post_query_count= "SELECT * FROM post WHERE post_status='published'ORDER BY post_id DESC";
            $find_count=mysqli_query($connection, $post_query_count);
            $count = mysqli_num_rows($find_count);
            $count=ceil($count/9);

            $query = "SELECT * FROM post WHERE post_status='published' ";
            $query .= "ORDER BY post_id DESC LIMIT $page_1, 8 ";
            $blogPost_query = mysqli_query($connection, $query);
          confirm_query($blogPost_query);
            while ($row = mysqli_fetch_assoc($blogPost_query)) {
                $post_id = escape($row['post_id']);
                $post_title = escape($row['post_title']);
                $post_topic = escape($row['post_topic']);
                $post_details = escape($row['post_details']);
                $post_slide = escape($row['post_slide_link']);
                $post_image = escape($row['post_image']);
                $post_video_link =escape($row['post_video_link']);
                $post_status = escape($row['post_status']);
                ?>

                <div class="col-md-3 col-lg-3 col-sm-12 ">
                    <a href="post.php?source=post_details&p_id=<?php echo $post_id ?>">
                        <img src="assets/images/blog/<?php echo $post_image ?>"style="max-height: 200px"  alt="img" class="img-fluid h-auto w-100"/>
                        <div>
                            <h2><?php echo $post_title ?> </h2>
                            <p>><?php echo $post_topic ?> <span class="text-danger">
                                    <?php echo $post_details ?></span></p>
                        </div>
                    </a>
                    <div>
                        <p><i class="text-warning fa fa-video-camera"></i>
                            <span class="text-danger textblack"> <a target="blank" href="<?php echo $post_slide ?>">download slide link</a> </span>
                        </p>
                    </div>
                </div>
            <?php } ?>

            <div class="container mt-5 ">
                <ul class="link-n">
                    <?php
                    for($i=1; $i<=$count; $i++){
                        if($i==$page){
                            echo " <li><a class='text-warning link-n p-1' href='videos.php?page={$i}'>{$i}</a></li>";
                            //echo "  <li class='page-item'><a class='active_link' href='blog.php?page={$i}'><button class='btn-warning'>{$i}</button> </a></li>";
                        }else{
                            echo"<li><a class='link-n text-dark p-1' href='videos.php?page={$i}'>{$i}</a></li>";
                        }
                        // echo "  <li class='page-item'><a class='page-link' href='blog.php?page={$i}'>{$i}</a></li>";}
                    }
                    ?>
                </ul>
            </div>

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





