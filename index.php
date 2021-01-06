<?php include "includes/header.php"?>



 <!-- nav section start -->
 <?php include "includes/nav.php"?> 
 </nav> <!-- nav section end -->

        <!-- slider start -->
        <?php include "includes/db.php"?>
        <div class="container-fluid ">

            <div class="row">
                <div class="col-xl-12 mx-p px-0 ">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/slider/Group 26.png"
                                    class="img.fluid w-100 " alt="">

                                <img src="" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="row ">
                                        <div class="mt-3">
                                            <h3>DOCTRINAL CLASSES WITH YOUNG MEN</h3>
                                        </div>
                                        <div class="divider">

                                        </div>
                                        <div>
                                            <p class=" mx-5">Lorem ipsum dolor sit amet, consetetur
                                                sadipscing elitr, sed diam nonumy eirmod
                                                tempor invidunt ut labore et dolore magna
                                                aliquyam erat, sed diam voluptua. At vero</p>
                                            <button class="btn btn-warning text-light">REGISTER ></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/slider/Group 26.png"
                                    class="img.fluid w-100 " alt="">

                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid p-5 mt-5 mb-5">
                <div class="container col mx-6 justify-content-center px-5">
                    <h1> Catholic Conversations </h1>
                    <p>is here as a space for young men, seeking deeper understanding of the
                        Catholic faith, to meet, discuss, seek clarification about and learn Catholic doctrine. </p>

                    <button class="btn btn-warning text-light px-5"><b>REGISTER ></b></button>

                </div>
            </div>
        </div>

        <!-- 
            slider end
         -->

    </header>

    <section>





        <!-- latest conversaton trends start-->
        <div class="container-fluid bg-slant">

            <!-- label -->
            <div class="container mt-5 py-5">

                    <div class="row text-center m-2">
                        <h1><b class="textxbold">LATEST CONVERSATION THREADS</b></h1>
                    </div>
                
                <!-- label -->
            
                    <div class="row">

                                        
                <?php

$query = 'SELECT * FROM post';

$Video_post_query = mysqli_query($connection,$query);
if(!$Video_post_query){
    die('failed query'. mysqli_error($connection));
}

while($row = mysqli_fetch_assoc($Video_post_query)){
    $post_title=$row['post_title'];
    $post_topic=$row['post_topic'];
    $post_details=$row['post_details'];
    $post_slide=$row['post_slide_link'];
    $post_image=$row['post_image'];
    $post_video_link=$row['post_video_link'];

    ?>
                        <div class="col-md-2 col-lg-2 col-sm-12 col-xl-2 m-1">
                        <a href="#"><img src="assets/images/blog/dylan-gillis-KdeqA3aTnBY-unsplash.png"
                                    class="img-fluid mb-4" alt=""> </a>       
                            <div >
                                <h3><?php echo $post_title?> </h3>
                                <p><?php echo $post_topic?> <span class="text-danger textblack"> <?php echo $post_details?> </span></p>
                            </div>
                            <div >
                            <p> <i class="text-warning fa fa-video-camera"></i>
                            <span class="text-danger textblack"> <?php echo $post_slide?> </span></p>
                            </div>
                      </div>             

            <?php } ?>
                  
            
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
        
$query = 'SELECT * FROM blog_post';

$blogPost_query = mysqli_query($connection,$query);

if(!$blogPost_query){
    die('failed query'. mysqli_error($connection));
}    
         while($row = mysqli_fetch_assoc($blogPost_query)){
            $blog_post_title=$row['blog_post_title'];   
            $blog_post_image=$row['blog_post_image'];   
            $blog_post_details=$row['blog_post_details'];    

?>

            <div class="card my-3">
            <div class="row g-1">
                <div class="col-md-5">
                    <img src="assets/images/blog/<?php echo $blog_post_image ?>"
                        class="img-fluid w-100" />

                </div>
                <div class="col-md-7">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $blog_post_title ?></h5>
                        <p class="text-center">
                        <?php echo $blog_post_details ?>
                        </p>
                        <button class="btn  btn-warning px-5 text-white"><b>></b></button>


                    </div>



                </div>
            </div>
        </div>
           
       <?php  }      ?>


            
               

            </div>
        </div>
        </div>
        <!-------->
        <!-- card 3 end-->
        <!-------->
        </div>
        </div>

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
                        <img src=" assets/images/blog/dylan-gillis-KdeqA3aTnBY-unsplash-1@3x.png "
                            class="card-img-top bg-image" alt="image">
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

                            <a href="#" class="btn btn-warning  text-light float-right my-3"
                                style="width: 300px;">REGISTER ></a>
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
                    <div class="card " style="width:auto;">
                        <img src=" assets/images/blog/dylan-gillis-KdeqA3aTnBY-unsplash-1@3x.png "
                            class="card-img-top bg-image" alt="image">
                        <div class="my-4"></div>
                        <div class="card-body text-center px-4">
                            <h3 class="card-title">Doctrinal Classes with Young Men</h3>
                            <div class="divider_full  col-sm-12 img-fluid"></div>

                            <p class="card-text mx-5 text-left ">
                                Very much like the Catholic conversations, these are weekly classes held in the
                                various centres of Opus Dei across Nigeria. Young men meet to learn about the Catholic
                                faith
                                and doctrine (Sacred Scripture and Sacred Tradition). COVID-19 has changed much and at
                                the
                                moment, these doctrinal classes hold online every Monday at 5 pm. Register here below to
                                attend.</p>

                            <a href="#" class="btn btn-warning  text-light float-right my-3"
                                style="width: 300px;">REGISTER ></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>






    </section>
    <!--------->
    <!-- about Opus Dei start -->
    <!--------->

    <div class="container-fluid p-5 bg-slant">
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
                <h4 class="m-0 p-0">Learn more</h4>
            </a>
        </div>
    </div>

    <!--------->
    <!-- about Opus Dei end -->
    <!--------->

    <!--------->
    <!-- updates start -->
    <!--------->
    <div class="container-fluid">
        <div class="container mt-5 mb-5 p-5 bg-light">
            <h3 class="text-center"><b>Receive updates from Catholic Conversations</b></h3>
            <div class="d-flex formgroup text-center mt-5">
                <input type="email" class="form-control w-50 py-1 m-0" name="email" id="email"
                    placeholder="Enter e-mail here">
                <button type="submit" class=" btn-warning btn"><b>SUBSCRIBE</b></button>
            </div>
        </div>
    </div>
    <!--------->
    <!-- updates end -->
    <!--------->


    <section>

    </section>


    <!--------->
    <!-- footer start -->
    <!--------->

<?php include "includes/footer.php"?>

      <!--------->
    <!-- footer end -->
    <!--------->
