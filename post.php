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
<?php include "includes/subscribe.php"?>
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
