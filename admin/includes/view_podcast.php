<?php include "../includes/db.php"?>

<?php
if(isset($_POST['checkBoxesArray'])){
    foreach ($_POST['checkBoxesArray'] as $postValueId) {
        $bulk_options =$_POST['bulk_options'];

        switch($bulk_options){
            case 'draft':
                $query="UPDATE podcast SET podcast_status = '{$bulk_options}' WHERE podcast_id= {$postValueId}";
                $update_to_publish_podcast =mysqli_query($connection, $query);
                confirm_query($update_to_publish_podcast);
                break;
            case 'published':
                $query="UPDATE podcast SET podcast_status = '{$bulk_options}' WHERE podcast_id= {$postValueId}";
                $update_to_publish_podcast=mysqli_query($connection, $query);
                confirm_query($update_to_publish_podcast);
                break;

            case 'delete':
                $query="DELETE FROM podcast WHERE podcast_id = {$postValueId}";
                $delete_query= mysqli_query($connection,$query );
                confirm_query($delete_query);
                header("Location:posts.php?source=view_podcast");

        }
    }
}
?>
<div class="table-responsive">
    <form action="" method="post">
        <div class="table table-bordered table-hover">

            <div id ="bulkOptionsContainer" class="col-xs-4">
                <select class="form-control" name="bulk_options" id="">
                    <option value="">Select Option</option>
                    <option value="published">Publish</option>
                    <option value="draft">Draft</option>
                    <option value="delete">Delete</option>
                </select>
            </div>
            <div class="col-xs-4">
                <input type="submit" name="submit" class="btn btn-success" value="Apply">
                <a class="btn btn-primary" href="./posts.php?source=add_podcast">Add New</a>
            </div>
            <form class="col-lg-12 col-sm-12 table-responsive">
                <table class="table table-bordered table-hover ">
                    <thead>
                    <tr>
                        <th><input id='selectAll' type="checkbox" name=''></th>
                        <th>Id</th>
                        <th>Podcast Title</th>
                        <th>Series</th>
                        <th>Audio Time</th>
                        <th>Status</th>
                        <th>Images</th>
                        <th>Post Link</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr></thead>
                    <tbody>

                    <?php

                    $query = 'SELECT * FROM podcast';
                    $select_podcast = mysqli_query($connection, $query);
                    confirm_query($select_podcast);
                    while ($row = mysqli_fetch_assoc($select_podcast)){
                        $podcast_id = escape($row['podcast_id']);
                        $podcast_title = escape($row['podcast_title']);
                        $podcast_series = escape($row['podcast_series']);
                        $podcast_status = escape($row['podcast_status']);
                        $podcast_link = escape($row['podcast_link']);
                        $podcast_image = escape($row['podcast_image']);
                        $podcast_date = escape($row['podcast_date']);
                        $audio_time = escape($row['audio_time']);
                        echo "<tr>";
                        ?>
                        <td> <input class='checkBoxes' type='checkbox' name='checkBoxesArray[]' value='<?php echo $podcast_id;?>'></td>
                        <?php
                        echo"<td>$podcast_id</td>";
                        echo"<td>$podcast_title</td>";
                        echo"<td>$podcast_series</td>";
                        echo"<td>$audio_time</td>";
                        echo"<td>$podcast_status</td>";
                        echo"<td><img width=100px img src='../assets/images/blog/$podcast_image' alt='image'></td>";
                        echo"<td>$podcast_link</td>";
                        echo"<td>$podcast_date</td>";
                        echo"<td><a href='posts.php?source=edit_podcast&p_id={$podcast_id};'>Edit</a></td>";
                        echo"<td><a onClick=\"javascript: return confirm('are you sure you want to delete');\" href='posts.php?source=view_podcast&delete={$podcast_id};'>Delete</a></td>";

                        echo "</tr>";
                    }?>

                    </tbody>
                </table>
            </form>


            <?php

            if (isset($_GET['delete'])) {
                echo $_GET['delete'];

                $podcast_id = escape($_GET['delete']);

                $query="DELETE FROM podcast WHERE podcast_id = {$podcast_id}";

                $delete_query= mysqli_query($connection,$query );
                header("Location:posts.php?source=view_podcast");


            }
            ?>
        </div>
