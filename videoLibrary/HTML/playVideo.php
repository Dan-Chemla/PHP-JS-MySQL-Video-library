<?php
session_start();
if (!isset($_SESSION["UserID"])) {
    header("Location: login.php");
}
include 'C:/xampp/htdocs/videoLibrary/PHP/headerT.php';
?>

<body>
    <?php include_once 'C:/xampp/htdocs/videoLibrary/PHP/navbar.php'; ?>

    <div class="container" id="wrapPVideo">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <legend class="text-center header"> 
                        <a class="btn btn-success" href="videoLibrary.php" ><i class="fa fa-backward" style="font-size: large"></i>My Playlist</a>
                        Share your Video
                        <a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a>
                        <a href="https://twitter.com" class="fa fa-twitter" target="_blank"></a>
                        <a href="#" class="fa fa-snapchat-ghost" target="_blank"></a>
                        <a href="https://www.linkedin.com" class="fa fa-linkedin" target="_blank"></a>
                        <a href="https://www.pinterest.com" class="fa fa-pinterest" target="_blank"></a>
                        <a href="https://www.tumblr.com" class="fa fa-tumblr" target="_blank"></a>
                    </legend>

                    <?php
                    $link = $_GET["link"];
                    echo "<div class='embed-responsive embed-responsive-16by9'><iframe  class='embed-responsive-item' src='$link'></iframe></div> ";
                    ?>

                </div>
            </div>
        </div>
    </div>

    <?php include_once 'C:/xampp/htdocs/videoLibrary/PHP/footer.php'; ?>



