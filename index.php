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
            <h1 class="text-warning"> Catholic Conversations </h1>
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
        <div class="container mt-5 ">
            <div class="row py-5">
                <h3 class="text-center my-5"><b class="textxbold">LATEST CONVERSATION THREADS</b></h3>
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
                            <img src="assets/images/blog/<?php echo $post_image ?>"  style="max-height:200px;" alt="img" class="img-fluid h-auto w-100"/>
                        <div>
                            <h3><?php echo $post_title ?> </h3>

                            <div class="row">
                                <div>
                                    <p>>Topic: <?php echo $post_topic ?></p>
                                </div>
                                <!-- <div class="col-6 col-sm-6 m-0 px-2 " >
                                    <p class="text-danger">
                                    <?php $details=  str_replace('\r\n', "\n", $post_details );
                                   echo $details ?></p>
                                </div> -->
                                  
                            </div>
                           
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
                                    <?php 
                                   $details=  str_replace('\r\n', "\n", $blog_post_details );
                                   echo $details
                                   ?>
                                  
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

                        <p class="card-text text-left ">
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

                        <p class="card-text text-left ">
                          “In the ecclesial service of the ordained minister, it is Christ himself who is present to his Church as Head of his Body, Shepherd of his flock, high priest of the redemptive sacrifice, Teacher of Truth. This is what the Church means by saying that the priest, by virtue of the sacrament of Holy Orders, acts in persona Christi Capitis, in the person of Christ the Head:
It is the same priest, Christ Jesus, whose sacred person his minister truly represents. Now the minister, by reason of the sacerdotal consecration which he has received, is truly made like to the high priest and possesses the authority to act in the power and place of the person of Christ himself (Catechism of the Catholic Church, 1548).
The ordained priest acting in the person of Christ has received special graces to guide others closer to Christ. In spiritual direction, there is no judgement and with an openness rooted in the love of Christ and the grace of God, proper guidance is given on living out the Christian faith in daily life. 
</p>

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

                        <p class="card-text  text-left ">
                            Meditations
“Meditation is above all a quest. The mind seeks to understand the why and how of the Christian life, in order to adhere and respond to what the Lord is asking. The required attentiveness is difficult to sustain. We are usually helped by books, and Christians do not want for them: the Sacred Scriptures, particularly the Gospels, holy icons, liturgical texts of the day or season, writings of the spiritual fathers, works of spirituality, the great book of creation, and that of history the page on which the "today" of God is written”. (The Catechism of the Catholic Church, 2705).
Meditation should be a daily affair for a Christian. In Opus Dei centres, weekly Meditations are organised where a priest preaches in the Tabernacle while personal prayer on what is being said goes on. These meditations have continued online due to current conditions and they take place every Wednesday at 6 pm. 
</p>

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

<div class="container-fluid  my-5 bg-slant ">
    <div class="container mb-2 mt-5 py-5">
        <div class="row text-center ">
            <h1><b class="textxbold">About Opus Dei</b></h1>
            <div class="divider_full"></div>
        </div>
    </div>
    <div class="container mx-auto justify-content-center ">
        <p class="font-12">Opus Dei, in full, the Prelature of the Holy Cross and Opus Dei, is a personal
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
            <h4 id ="subscribe" class="m-0 p-0 text-warning">Learn more</h4>
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
