<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>MyVideoDB</title>
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
        <!-- my CSS and JS -->
        <link rel="stylesheet" href="CSS/styles.css">
        <script src="JS/index.js"></script>
    </head>

    <body>
        <div class="container-fluid" id="wrapper">
            <nav class="navbar navbar-inverse col-sm-12">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">MyVideoDB</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="HTML/videoLibrary.php">My Playlist</a></li>
                        <li><a href="HTML/addVideo.php">Add a Video</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="HTML/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a  href="HTML/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a  href="API.php?command=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
            </nav>

            <div class="row" id="searchonYT">
                <div class="col-sm-offset-3 col-sm-6" id="ytSearch">
                    <center>
                        <form class="form-inline my-2 my-lg-0" action="https://www.youtube.com/results" method="GET" target="_blank">
                            <input class="form-control mr-sm-2" type="search" name="search_query" placeholder="Search on YouTube" aria-label="Search">
                            <input  class="btn btn-outline-success my-2 my-sm-0" type="image" src="assets/images/youtube-icon.png" alt="Submit" width="60" height="48">
                        </form>
                    </center>
                </div>
            </div>
        </div>

        <div class="container" id="pVideo">
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm">

                        <legend class="text-center header"> 
                            Welcome to MyVideoDB!
                            <p> Please <a href="HTML/register.php">Sign-Up</a> and start managing your own YouTube video library. </p>
                            <p>Here you can store all of your favorite videos and watch them! </p> 
                            <div class='embed-responsive embed-responsive-16by9' id="welcomeVideo">
                                <iframe  class='embed-responsive-item ' src="https://www.youtube.com/embed/cc2fm1kn6RQ"></iframe>
                            </div>
                        </legend>

                    </div>
                </div>
            </div>
        </div>

        <?php include_once 'PHP/footer.php'; ?>


