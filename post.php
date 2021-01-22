<?php include "includes/header.php"?>



 <!-- nav section start -->
 <?php include "includes/nav.php"?> 
 </nav> <!-- nav section end -->

        <!-- slider start -->
        <?php include "includes/db.php"?>
       
    </header>

    <section>
        <?php

        if(isset($_GET['source'])){

            $source= $_GET['source'];
                   
           }else{  $source="" ;  
                       }
        switch ($source) {

        // blog post channel start

        case 'blog_post_details':
            include "includes/blog_post_details.php";
            break;

        case 'post_details':
            include "includes/post_details.php";
            break;
            
            default:
           include "../index.php";
            break;
        }


        ?>
        <!---------------->
        <!-- events begin -->
        <!---------------->



              


    



    </section>

   
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
