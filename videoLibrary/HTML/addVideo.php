<?php
session_start();
if (!isset($_SESSION["UserID"])) {
    header("Location: login.php");
}

 include '../PHP/headerT.php';
?>

<body>

     <?php include_once '../PHP/navbar.php'; ?>

    <div class="container formCard">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" action="../PHP/API.php" onsubmit="return validAdd()" method="post">
                        <fieldset>
                            <legend class="text-center header"><i class="fa fa-plus bigicon"></i> Add a Video <i class="fa fa-film bigicon"></i></legend>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><h4>Title</h4></span>
                                <div class="col-md-8">
                                    <input type="text" name="videoTitle" id="addTitle" placeholder="Title of your video.." class="form-control"><span id="addTitleError"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><h4>Category</h4></span>
                                <div class="col-md-8">
                                    <select name="categoryID" class="form-control">
                                        <option value=1>Automotive</option>
                                        <option value=52>Business and Finance</option>
                                        <option value=123>Careers</option>
                                        <option value=132>Education</option>
                                        <option value=150>Events and Attractions</option>
                                        <option value=186>Family and Relationships</option>
                                        <option value=201>Fine Art</option>
                                        <option value=210>Food and Drink</option>
                                        <option value=223>Healthy Living</option>
                                        <option value=239>Hobbies and Interests</option>
                                        <option value=274>Home and Garden</option>
                                        <option value=286>Medical Health</option>
                                        <option value=324>Movies</option>
                                        <option value=338>Music and Audio</option>
                                        <option value=379>News and Politics</option>
                                        <option value=391>Personal Finance</option>
                                        <option value=422>Pets</option>
                                        <option value=432>Pop Culture</option>
                                        <option value=441>Real Estate</option>
                                        <option value=453>Religion and Spirituality</option>
                                        <option value=464>Science</option>
                                        <option value=473>Shopping</option>
                                        <option value=483>Sports</option>
                                        <option value=552>Style and Fashion</option>
                                        <option value=596>Technology and Computing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><h4>Description</h4></span>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="description" placeholder="You can add her a desctiption of your video..." rows="7"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><h4>Link</h4></span>
                                <div class="col-md-8">
                                    <input  type="text" name="link" id="addLink" placeholder="Please enter a YouTube link.." class="form-control"><span id="addLinkError"></span>
                                </div>
                            </div>
                            <input type="hidden" name="command" value="addVideo">
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Add Video</button>
                                    <button type="reset" class="btn btn-warning btn-lg">Clear</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

   <?php include_once '../PHP/footer.php'; ?>

    