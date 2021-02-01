<!-- card 3-->

<!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-4"> -->
<div class="container  ">
    <div class="row">
        <?php


        if (isset($_GET['p_id'])) {
            $blog_post_id = $_GET['p_id'];

        }
        $query = "SELECT * FROM blog_post WHERE blog_post_id = {$blog_post_id}";

        $blogPost_query = mysqli_query($connection, $query);

        if (!$blogPost_query) {
            die('failed query' . mysqli_error($connection));
        }
        while ($row = mysqli_fetch_assoc($blogPost_query)) {
            $blog_post_title = $row['blog_post_title'];
            $blog_post_image = $row['blog_post_image'];
            $blog_post_details = $row['blog_post_details'];

            ?>

            <div class="card my-3">
                <div class="row g-1">
                    <div class="col-md-5">
                        <img src="assets/images/blog/<?php echo $blog_post_image ?>"
                             class="img-fluid w-100"/>

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

        <?php } ?>


    </div>
</div>
<!--blog comment-->
<?php
if (isset($_POST['create_comment'])){
    $the_post_id = $_GET['p_id'];
    $comment_author=$_POST['comment_author'];
    $comment_email=$_POST['comment_email'];
    $comment_content=$_POST['comment_content'];

    if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content)){
        $query = "INSERT INTO Comments(comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
        $query.="VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved', now())";

        $create_comment_query= mysqli_query($connection, $query);

        if(!$create_comment_query){
            die('failed query'. mysqli_error($connection));
        };

        $query ="UPDATE blog_post SET blog_post_comment_count = blog_post_comment_count + 1 ";
        $query .= " WHERE blog_post_id = $the_post_id";

        $update_comment_count =mysqli_query($connection, $query);

    }else{
        echo "<script>alert('fields cannot be empty')</script>";
    }
};

?>

<div class=" well container mt-2">
    <h4>Leave a comment:</h4>
    <form action="" method="post" role="form">

        <div class="form-group">
            <label for="Author">comment Author </label>
            <input class="form-control" type="text" name="comment_author">
        </div>
        <div class="form-group">
            <label for="Email">Email </label>
            <input class="form-control" type="email" name="comment_email">
        </div>

        <div class="form-group">
            <label for="content">your comment </label>
            <textarea class="form-control" name="comment_content" rows="3"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" name="create_comment" class="btn btn_warning">submit</button>
        </div>
    </form>
</div>
<?php

$the_post_id = $_GET['p_id'];
$query = "SELECT * FROM Comments WHERE comment_post_id = {$the_post_id} ";
$query .= "AND comment_status ='Approved' ";
$query .= "ORDER BY comment_id DESC";

$select_comment_query = mysqli_query($connection, $query);

if (!$select_comment_query) {
    die('failed query'. mysqli_error($connection));
}
while ($row = mysqli_fetch_assoc($select_comment_query)){
    $comment_date = $row['comment_date'];
    $comment_content = $row['comment_content'];
    $comment_author = $row['comment_author'];

    ?>
<div class=" well container">
    <div class="media">
        <a class="pull-left" href="">
            <img class="media-object" src="" alt="">
        </a>

        <div class="media-body">
            <h4 class="media-heading">

                <?php echo $comment_author;?>
                <small>
                    <?php echo $comment_date;?>
                </small>
            </h4>
            <?php echo $comment_content; ?>
        </div>
    </div>
</div>


<?php } ?>



<!-- blog end -->