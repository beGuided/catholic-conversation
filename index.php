<?php include "includes/header.php" ?>

<!-- nav section start -->
<?php include "includes/nav.php" ?>
</nav> <!-- nav section end -->

<?php include "includes/db.php" ?>
<!-- slider start -->
<div class="">
    <?php include "includes/slider.php" ?>
</div>




 

<div class="container  my-5  ">
        <div class="row ">
            <h1> Catholic Conversations </h1>
            <p>is here as a space for young men, seeking deeper understanding of the
                Catholic faith, to meet, discuss, seek clarification about and learn Catholic doctrine. </p>
</div>
<a href="#subscribe">
<button class="btn btn-warning text-light "><b>SUBSCRIBE ></b></button>
</a>
        </div>
        <div class="container-fluid"> 
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-8 text-center">

                    <a href="#">
                    <i class="fa fa-whatsapp text-dark bg-warning btn "></i>
                    </a>
                    <a href="#">
                    <i class="fa fa-play text-dark bg-warning btn "></i>
                    </a>
                    <a href="#">
                <i class="fa fa-video-camera text-dark bg-warning btn "></i>
                </a>
                </div>
            </div>
            </div>

<!--
    slider end
 -->

</header>

<section>

    <!-- latest conversaton trends start-->
    <div class="container-fluid bg-slant ">
    <!--  <img src="assets/images/blog/slant-bg.png" > -->
        <!-- label -->
        <div class="container mt-5 py-5">
            <div class="row">
                <h1 class="text-center m-2"><b class="textxbold">LATEST CONVERSATION THREADS</b></h1>
            <!-- label -->

                <?php

                $query = "SELECT * FROM post WHERE post_status='published' ";
                $query .= "ORDER BY post_id DESC LIMIT 4 ";

                $Video_post_query = mysqli_query($connection, $query);
               confirm_query($Video_post_query);
                while ($row = mysqli_fetch_assoc($Video_post_query)) {
                    $post_id = escape($row['post_id']);
                    $post_title = escape($row['post_title']);
                    $post_topic = escape($row['post_topic']);
                    $post_details = escape($row['post_details']);
                    $post_slide = escape($row['post_slide_link']);
                    $post_image = escape($row['post_image']);
                    $post_video_link =escape($row['post_video_link']);
                    $post_status = escape($row['post_status']);


                if($post_status!=='published'){
                    echo"<h1>no post</h1>";
                }else{
                    ?>

                    <div class="col-md-3 col-lg-3 col-sm-12 ">
                        <a href="post.php?source=post_details&p_id=<?php echo $post_id ?>">
                            <img src="assets/images/blog/<?php echo $post_image ?>" alt="img" class="img-fluid h-auto w-100"/>
                        <div>
                            <h2><?php echo $post_title ?> </h2>
                            <p><?php echo $post_topic ?> <span class="text-danger">
                                    <?php echo $post_details ?></span></p>
                        </div>
                        </a>
                        <div>
                            <p><i class="text-warning fa fa-video-camera"></i>
                                <span class="text-danger textblack"> <a target="blank" href="<?php echo $post_slide ?>">download slide link</a> </span>
                            </p>
                        </div>
                    </div>

                <?php } }?>


            </div>

        </div>
    </div>

    <!-- latest conversaton trends end-->


    <!-- blog start -->
    <div class="container-fluid mt-5">
        <div class=" text-center ">
            <h1><b class="textxbold">BLOG</b></h1>
        </div>
        <div class="divider_full mb-5 img-fluid"></div>
    </div>


    <!-------->
    <!-- card 2 end-->
    <!-------->

    <!-- card 3-->
    <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-4"> -->
    <div class="container  ">
        <div class="row">
            <?php

            $query = "SELECT * FROM blog_post WHERE blog_post_status='published' ORDER BY blog_post_id DESC  LIMIT 3";
            $blogPost_query = mysqli_query($connection, $query);
            confirm_query($blogPost_query);
            while ($row = mysqli_fetch_assoc($blogPost_query)) {
                $blog_post_id = escape($row['blog_post_id']);
                $blog_post_title = escape($row['blog_post_title']);
                $blog_post_image = escape($row['blog_post_image']);
                $blog_post_details = escape(substr($row['blog_post_details'],0,400));
                $blog_post_status = escape($row['blog_post_status']);

                if($blog_post_status!=='published'){
                    echo"<h1>no post</h1>";
                }else{

                ?>
                <div class="card my-3">
                    <div class="row g-1">
                        <div class="col-md-5">
                            <a href="post.php?source=blog_post_details&p_id=<?php echo $blog_post_id ?>">
                                <img src="assets/images/blog/<?php echo $blog_post_image ?>"
                                     class="img-fluid w-100" alt="image"/></a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $blog_post_title ?></h5>
                                <p class="text-center">
                                    <?php echo $blog_post_details ?>
                                </p>
                                <a href="post.php?source=blog_post_details&p_id=<?php echo $blog_post_id ?>">
                                <button class="btn  btn-warning px-5 text-white"><b>></b></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }} ?>


        </div>
    </div>
    <!-------->
    <!-------->
    <!-- card 3 end-->
    <!-------->



    <!-- blog end -->


    <br><br>


    <!---------------->
    <!-- events begin -->
    <!---------------->


    <div class="container-fluid mb-5">
        <div class="row text-center ">
            <h1><b class="textxbold">Activities</b></h1>
            <div class="divider_full"></div>
        </div>
    </div>

    <!---------------->
    <!-- doctrinal begin -->
    <!---------------->


    <div class="container col-xl-11 col-sm-12 col-md-11 my-4">
        <div class="row ">
            <div class="col-12  ">
                <div class="card " style="width:auto;">
                    <img src=" assets/images/blog/teacher.jpeg "
                         class="card-img-top img-fluid"  style="max-height: 450px" alt="image">
                    <div class="my-4"></div>
                    <div class="card-body text-center px-4">
                        <h3 class="card-title">Doctrinal Classes with Young Men</h3>
                        <div class="divider_full col-sm-12 img-fluid"></div>

                        <p class="card-text mx-5 text-left ">
                            Very much like the Catholic conversations, these are weekly classes held in the
                            various centres of Opus Dei across Nigeria. Young men meet to learn about the Catholic
                            faith
                            and doctrine (Sacred Scripture and Sacred Tradition). COVID-19 has changed much and at
                            the
                            moment, these doctrinal classes hold online every Monday at 5 pm. Register here below to
                            attend.</p>

                        <a href="#subscribe" class="btn btn-warning  text-light float-right my-3"
                           style="max-width: 300px;">SUBSCRIBE ></a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!---------------->
    <!-- doctrinal end -->
    <!---------------->


 <!---------------->
    <!-- doctrinal begin -->
    <!---------------->


    <div class="container col-xl-11 col-sm-12 col-md-11 my-4">
        <div class="row ">
            <div class="col-12  ">
                <div class="card " style="width:auto;">
                    <img src=" assets/images/blog/fr basil.png "
                         class="card-img-top"  style="max-height: 450px" alt="image">
                    <div class="my-4"></div>
                    <div class="card-body text-center px-4">
                        <h3 class="card-title">Spiritual Direction</h3>
                        <div class="divider_full col-sm-12 img-fluid"></div>

                        <p class="card-text mx-5 text-left ">
                            Very much like the Catholic conversations, these are weekly classes held in the
                            various centres of Opus Dei across Nigeria. Young men meet to learn about the Catholic
                            faith
                            and doctrine (Sacred Scripture and Sacred Tradition). COVID-19 has changed much and at
                            the
                            moment, these doctrinal classes hold online every Monday at 5 pm. Register here below to
                            attend.</p>

                        <a href="#subscribe" class="btn btn-warning  text-light float-right my-3"
                           style="max-width: 300px;">SUBSCRIBE ></a>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!---------------->
    <!-- doctrinal end -->
    <!---------------->


    <!---------------->
    <!-- Meditations begin -->
    <!---------------->

    <div class="container col-xl-11 col-sm-12 col-md-11 my-4">
        <div class="row ">
            <div class="col-12  ">
                <div class="card " >
                    <img src=" assets/images/blog/dylan-gillis-KdeqA3aTnBY-unsplash-1@3x.png "
                              class="card-img-top "  style="max-height: 450px"  alt="image">

                    <div class="my-4"></div>
                    <div class="card-body text-center px-4">
                        <h3 class="card-title">Meditation</h3>
                        <div class="divider_full  col-sm-12 img-fluid"></div>

                        <p class="card-text mx-5 text-left ">
                            Very much like the Catholic conversations, these are weekly classes held in the
                            various centres of Opus Dei across Nigeria. Young men meet to learn about the Catholic
                            faith
                            and doctrine (Sacred Scripture and Sacred Tradition). COVID-19 has changed much and at
                            the
                            moment, these doctrinal classes hold online every Monday at 5 pm. Register here below to
                            attend.</p>

                        <a href="#subscribe" class="btn btn-warning  text-light float-right my-3"
                           style="max-width:300px;">SUBSCRIBE ></a>
                    </div>

                </div>

            </div>

        </div>

    </div>


</section>
<!--------->
<!-- about Opus Dei start -->
<!--------->

<div class="container-fluid p-5 bg-slant ">
    <div class="container mb-2 mt-5 p-5">
        <div class="row text-center ">
            <h1><b class="textxbold">About Opus Dei</b></h1>
            <div class="divider_full"></div>
        </div>
    </div>
    <div class="container mx-6 justify-content-center p-1">
        <p class="m-0 p-0">Opus Dei, in full, the Prelature of the Holy Cross and Opus Dei, is a personal
            prelature
            of the Catholic Church, founded in 1928 by Spanish priest, St. Josemaria Esciva. It has over 90,000
            members, a large majority of whom are lay men and women, the others being priests. Opus Dei members
            strive to live out their Christian faith fully in their life and work — they strive to be saints
            through
            their ordinary life.
            Other aspects of the spirituality of Opus Dei are divine filiation (awareness of being a child of
            God
            and acting accordingly), ordinary life (finding God in everyday things), charity and apostolate
            (like
            the early Christians, giving witness to their faith and helping others to know Christ), love for
            freedom
            (in anything that is not a matter of faith each person makes their own decisions and takes
            responsibility for them), prayer and sacrifice (trying to have a constant dialogue with God and
            being
            ready to put their interests and those of others before their own) and unity of life (trying to live
            their faith in every aspect of their life) (FAQs, opusdei.org).
            Read more about the activities, the Prelate and the message of Opus Dei through the link below.
        </p>
        <a href="https://opusdei.org" target="blank" class="text-warning ">
            <h4 class="m-0 p-0 text-warning">Learn more</h4>
        </a>
    </div>
</div>

<!--------->
<!-- about Opus Dei end -->
<!--------->

<!--------->
<!-- updates start -->
<!--------->
<?php include "includes/subscribe.php"?>
<!--------->
<!-- updates end -->
<!--------->


<section>

</section>


<!--------->
<!-- footer start -->
<!--------->

<?php include "includes/footer.php" ?>

<!--------->
<!-- footer end -->
<!--------->
