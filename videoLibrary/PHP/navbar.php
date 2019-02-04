<?php

echo "
        <div class='container-fluid' id='wrapper'>
        <nav class='navbar navbar-inverse col-sm-12'>
            <div class='container-fluid'>
                <div class='navbar-header'>
                    <a class='navbar-brand' href='../index.php'>MyVideoDB</a>
                </div>
                <ul class='nav navbar-nav'>
                    <li><a href='../index.php'>Home</a></li>
                    <li><a href='videoLibrary.php'>My Playlist</a></li>
                    <li><a href='addVideo.php'>Add a Video</a></li>
                </ul>
                <ul class='nav navbar-nav navbar-right'>
                    <li><a href='register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
                    <li><a  href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
                    <li><a  href='../PHP/API.php?command=logout'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
                </ul>
        </nav>

        <div class='row' id='searchonYT'>
            <div class='col-sm-offset-3 col-sm-6' id='ytSearch'>
                <center>
                    <form class='form-inline my-2 my-lg-0' action='https://www.youtube.com/results' method='GET' target='_blank'>
                        <input class='form-control mr-sm-2' type='search' name='search_query' placeholder='Search on YouTube' aria-label='Search'>
                        <input  class='btn btn-outline-success my-2 my-sm-0' type='image' src='../assets/images/youtube-icon.png' alt='Submit' width='60' height='48'>
                    </form>
                </center>
            </div>
        </div>
    </div>";
