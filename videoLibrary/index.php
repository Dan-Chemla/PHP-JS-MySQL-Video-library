<?php include 'PHP/headerT.php'; ?>

<body>
    <?php include_once 'PHP/navbar.php'; ?>

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


