<?php include 'C:/xampp/htdocs/videoLibrary/PHP/headerT.php'; ?>

<body>

    <?php include_once 'C:/xampp/htdocs/videoLibrary/PHP/navbar.php'; ?>

    <div class="container formCard">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" action="http://localhost/videoLibrary/PHP/API.php" onsubmit="return validRegister()" method="post">
                        <fieldset>
                            <legend class="text-center header">Sign - Up</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="firstname" id="regFirstname" type="text" placeholder="First Name" class="form-control"><span id="regFirstnameError"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="lastname" id="regLastname" type="text" placeholder="Last Name" class="form-control"><span id="regLastnameError"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="email" type="text" placeholder="Email Address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user-circle bigicon"></i></span>
                                <div class="col-md-8">
                                    <input name="username" id="regUsername" type="text" placeholder="User Name" class="form-control"><span id="regUsernameError"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-key bigicon"></i></span>
                                <div class="col-md-8">
                                    <input name="password" id="regPassword" type="password" placeholder="Password" class="form-control"><span id="regPasswordError"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <input type="hidden" name="command" value="register">
                                    <button type="submit" class="btn btn-primary btn-lg">Sign-Up</button>
                                    <button type="reset" class="btn btn-warning btn-lg">Clear</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'C:/xampp/htdocs/videoLibrary/PHP/footer.php'; ?>


