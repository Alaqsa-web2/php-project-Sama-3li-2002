
<?php  require "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5 css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style-->
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Social Media</title>
</head>

<body>

    <!--start nav bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand brand">Social Media</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText" style="flex-grow: 0;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="login.html">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link asignUp" href="signup.html">SIGNUP</a>
                    </li>
                </ul>
                <!--if login-->
                <!-- <div class="flexPostForm">
            <div class="imgPostForm imgHead" >
                <img src="img/man.jpg" alt="">
            </div>
            <div class="namePostCard">
                <p class="name">Omar Khaled</p>
            </div>   
        </div>  -->
            </div>
        </div>
    </nav>
    <!--end nav bar-->

    <!--start content-->
    <div class="container">
        


        <div class="postCard">
        <div class="postForm">
        <?php 
        $query = "SELECT * FROM posts ORDER BY id  DESC";
        $select_posts = mysqli_query($conn,$query);  
        while($row = mysqli_fetch_assoc($select_posts)){

        $post_status   = $row['post_status'];
        $post_image    = $row['post_image'];
        $post_content  = $row['post_content'];
        $post_tags     = $row['post_tags'];
        $post_date     = $row['post_date'];
        $post_title    = $row['post_title'];?>
        
        
                <div class="flexPostForm">
                   <?php echo "<div class='imgPostForm'>
                        <img src=  '../img/$post_image' alt='faild'>
                    </div>"; ?>
                    <div class="namePostCard">
                        <p class="name"><?php echo $post_title; ?></p>
                        <div class="divTime">
                            <i class="fa-solid fa-clock"></i>
                            <p><?php echo $post_date; ?></p>
                        </div>
                    </div>
                    </div>

                   <?php echo  "<div class='imgPost'>
                    <img  src='../img/$post_image' class='img-fluid rounded' alt='...'>
                </div> ";?>


                 <div class="divNumComments">
                    <i class="fa-solid fa-comment pNumComments"></i>
                    <p class="pNumComments"><?php echo  $post_content ; ?></p>
                </div>
                    <br><br>
                </div>
                </div>
                <?php  } ?>
                <br><br>

        <div class="postCard">
            <div class="postForm">
                <div class="flexPostForm">
                    <div class="imgPostForm">
                        <img src="img/man.jpg" alt="">
                    </div>
                    <div class="namePostCard">
                        <p class="name">Omar Khaled</p>
                        <div class="divTime">
                            <i class="fa-solid fa-clock"></i>
                            <p>4h</p>
                        </div>
                    </div>
                </div>
                <div class="imgPost">
                    <img src="img/business.jpg" class="img-fluid rounded" alt="...">
                </div>
                <div class="divNumComments">
                    <i class="fa-solid fa-comment pNumComments"></i>
                    <p class="pNumComments">22 Comments</p>
                </div>
                <div>
                    <div class="flexPostForm">
                        <div class="imgPostForm">
                            <img src="img/man.jpg" alt="">
                        </div>
                        <input class="form-control" type="text" placeholder="Type your comment"
                            aria-label=".form-control-lg example">
                    </div>
                </div>
                <hr class="hr">
                <div class="comment">
                    <div class="flexPostForm">
                        <div class="imgPostForm">
                            <img src="img/man.jpg" alt="">
                        </div>
                        <div class="boxComment">
                            <p class="nameBoxComment">Omar Khaled</p>
                            <p class="contentBoxComment">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry</p>
                            <div class="divTime">
                                <i class="fa-solid fa-clock"></i>
                                <p>4h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <div class="flexPostForm">
                        <div class="imgPostForm">
                            <img src="img/girlface.jpg" alt="">
                        </div>
                        <div class="boxComment">
                            <p class="nameBoxComment">Amal Ahmed</p>
                            <p class="contentBoxComment">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry</p>
                            <div class="divTime">
                                <i class="fa-solid fa-clock"></i>
                                <p>4h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        <!--Bootstrap 5 js-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</body>
</html>






<!-- <?php include "nav.php"; ?> -->

<!-- <div class="container">
<div class="col-5 offset-1"> -->



<?php
if(isset($_POST['create'])) {
$post_title        = ($_POST['title']);
$post_status       = ($_POST['post_status']);
$post_image        = ($_FILES['file']['name']);
$post_image_temp   = ($_FILES['file']['tmp_name']);
$post_tags         = ($_POST['post_tags']);
$post_content      = ($_POST['post_content']);
move_uploaded_file($post_image_temp, "../img/$post_image" );



$query = "INSERT INTO posts(post_date, post_image, post_content, post_tags, post_status,post_title)
VALUES(now(), '$post_image', '$post_content', '$post_tags', '$post_status', '$post_title')";  
//  mysqli_query($conn,$query);    
$create_post_query = mysqli_query($conn, $query);    
// confirmQuery($create_post_query);
// $the_post_id = mysqli_insert_id($connection);
}?>     



