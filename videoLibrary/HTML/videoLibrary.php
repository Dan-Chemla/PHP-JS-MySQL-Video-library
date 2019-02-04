<?php
session_start();
if (!isset($_SESSION["UserID"])) {
    header("Location: login.php");
}
include '../PHP/headerT.php';
?>

<body  onload="getVideoByUser()">
    
    <?php include_once '../PHP/navbar.php'; ?>

    <div id="wrapMyVideos" class=" container-fluid col-xs-offset-2 col-xs-8">

        <nav class="navbar navbar-default col-sm-12">
            <a class="btn btn-primary navbar-btn navbar-left" href="addVideo.php">Add a Video</a>
            <div class="navbar-form navbar-right">
                <input type="text"  id="searchBox" class="form-control" placeholder="Search.." name="searchQ">
                <button type="submit" class="btn btn-default" onclick="searchVideo()"><i class="fa fa-search"></i></button>
            </div>
        </nav>

        <table  class="table table-hover " id="tableVideos"></table>

    </div>

    <?php include_once '../PHP/footer.php'; ?>

