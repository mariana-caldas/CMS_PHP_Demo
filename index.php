<?php include "includes/db.php";?>
<?php include "includes/header.php";?>

    <!-- Navigation -->
    <?php include "includes/navigation.php";?>
    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php

                $query = "SELECT * FROM posts";

                $result_posts_query = mysqli_query($connection, $query);

                //Putting the Title and content inside the loop in order to echo all the posts we have in the database

                    while($row = mysqli_fetch_assoc($result_posts_query)){
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];   
                        ?>

                        <h1 class="page-header">
                        VanCode Academy<br />
                        <small>A new way to learn how to code.</small>
                        </h1>

                        <!-- First Blog Post -->
                        <h2>
                        <a href="#"><?php echo $post_title ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $post_author ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                        <hr>
                        <p><?php echo $post_content ?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <hr>

                        <?php
                    }
                    ?>
            </div>

            <!-- Blog Sidebar Widgets Column.This sidebar calls the file search.php -->
            <?php include "includes/sidebar.php";?>
        <!-- /.row -->

        <hr>
        <!-- Footer -->
        <?php include "includes/footer.php";?>

        