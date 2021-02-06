<!-- latest conversaton trends start-->



<br><br>
        <!-- label -->
<div class="container my-5">
        <div class="row">


            <?php
            if (isset($_GET['p_id'])) {
                $post_id = escape($_GET['p_id']);

            }

            $query = "SELECT * FROM post WHERE post_id = {$post_id}";

            $Video_post_query = mysqli_query($connection, $query);
            if (!$Video_post_query) {
                die('failed query' . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($Video_post_query)) {
                $post_id = escape($row['post_id']);
                $post_title = escape($row['post_title']);
                $post_category_id = escape($row['post_category_id']);
                $post_topic = escape($row['post_topic']);
                $post_details =escape( $row['post_details']);
                $post_slide = escape($row['post_slide_link']);
                $post_image = escape($row['post_image']);
                $post_video_link = escape($row['post_video_link']);

                ?>
                <div class="col-md-9 col-lg-9 col-sm-12 col-xl-9 ">
                    <h3><?php echo $post_title ?> </h3>
                    <div  >
                        <iframe src="https://drive.google.com/file/d/<?php echo $post_video_link ?>/ preview"  class="img-responsive  w-100"></iframe>

                        <!-- iframe src="https://www.youtube.com/embed/<?php echo $post_video_link ?>"  height="300px" class="img-responsive  w-100" ></iframe> -->
                    </div>
                    <h3><?php echo $post_topic ?> <span class="text-danger textblack"> <?php echo $post_details ?> </span></h3>

                </div>
                <div class="col-md-9 col-12 " style="border-bottom: dotted #ffc107">
                    <p>
                     <i class="text-warning fa fa-video-camera"></i>
                        <span class="text-danger textblack"> <a target="blank" href="<?php echo $post_slide ?>">download slide link</a> </span>
                    </p>
                </div>
            <?php } ?>

        </div>

    </div>


<!-- latest conversaton trends end-->


<!--blog comment-->
<?php
if (isset($_POST['create_comment'])) {
    $the_post_id = $_GET['p_id'];
    $comment_author = $_POST['comment_author'];
    $comment_email = $_POST['comment_email'];
    $comment_content = $_POST['comment_content'];

    if (!empty($comment_author) && !empty($comment_email) && !empty($comment_content)) {
        $query = "INSERT INTO Comments(comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
        $query .= "VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved', now())";
        $create_comment_query = mysqli_query($connection, $query);

       confirm_query($create_comment_query);
        $query = "UPDATE blog_post SET blog_post_comment_count = blog_post_comment_count + 1 ";
        $query .= " WHERE blog_post_id = $the_post_id";
        $update_comment_count = mysqli_query($connection, $query);

    } else {
        echo "<script>alert('fields cannot be empty')</script>";
    }
};

?>

<div class=" well container mt-2 ">
    <h4>Leave a comment:</h4>
    <div class="row bg-warning">
        <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12">
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
                    <button type="submit" name="create_comment" class="btn btn-warning">submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
<br>
<div class="container ">
<div><h2>Post Comment</h2></div>
<?php

$the_post_id = $_GET['p_id'];
$query = "SELECT * FROM Comments WHERE comment_post_id = {$the_post_id} ";
$query .= "AND comment_status ='Approved' ";
$query .= "ORDER BY comment_id DESC";

$select_comment_query = mysqli_query($connection, $query);

if (!$select_comment_query) {
    die('failed query' . mysqli_error($connection));
}
while ($row = mysqli_fetch_assoc($select_comment_query)) {
    $comment_date = $row['comment_date'];
    $comment_content = $row['comment_content'];
    $comment_author = $row['comment_author'];

    ?>
    
        <div class="media">
            <a class="pull-left" href="">
                <img class="media-object" src="" alt="">
            </a>

            <div class="media-body">
                <h4 class="media-heading">

                    <?php echo $comment_author; ?>
                    <small>
                        <?php echo $comment_date; ?>
                    </small>
                </h4>
                <?php echo $comment_content; ?>
            </div>
        </div>

<?php } ?>
</div>
<div class="divider_full mt-5 img-fluid"></div>
<div class="text-center"><h1>Related Post</h1></div>

<div class="container">
<!--   <div class="row">-->
        <ul class="list-unstyled video-list-thumbs row">
        <?php
        $query = "SELECT * FROM post WHERE post_category_id= {$post_category_id} LIMIT 6";
        $related_post = mysqli_query($connection, $query);

        if (!$related_post) {
            die('failed query' . mysqli_error($connection));
        }
        while ($row = mysqli_fetch_assoc($related_post)) {
            $post_id = $row['post_id'];
            $post_title = escape($row['post_title']);
            $post_topic = $row['post_topic'];
            $post_details = $row['post_details'];
            $post_image = $row['post_image'];

            ?>
           <!--  alternative -->

<!--            <div class="col-md-3 col-lg-3 col-sm-12 ">-->
<!--                <a href="post.php?source=post_details&p_id=--><?php //echo $post_id ?><!--">-->
<!--                    <img src="assets/images/blog/--><?php //echo $post_image ?><!--" alt="img" class="img-fluid h-auto w-100"/>-->
<!--                    <div>-->
<!--                        <h2>--><?php //echo $post_title ?><!-- </h2>-->
<!--                        <p>--><?php //echo $post_topic ?><!-- <span class="text-danger">-->
<!--                                    --><?php //echo $post_details ?><!--</span></p>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <div>-->
<!--                </div>-->
<!--            </div>-->




            <li class="col-lg-3 col-sm-4 col-4 col-xs-3">
                <a href="post.php?source=post_details&p_id=<?php echo $post_id ?>">
                    <img src="assets/images/blog/<?php echo $post_image ?>" alt="img" class="img-responsive h-auto w-100" height="130px" />
                    <h2><?php echo $post_title ?></h2>
                    <span class="glyphicon glyphicon-play-circle"></span>
                    <span class="textxbold-white"><?php echo $post_details ?></span>
                </a>
            </li>

        <?php } ?>
        </ul>
    </div>

</div>




