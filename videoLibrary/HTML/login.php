<?php include '../PHP/headerT.php'; ?>

<body>

    <?php include_once '../PHP/navbar.php'; ?>

    <div class="container formCard">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" action="../PHP/API.php" onsubmit="return validLogin()" method="post">
                        <fieldset>
                            <legend class="text-center header">Login</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user-circle bigicon"></i></span>
                                <div class="col-md-8">
                                    <input name="username" type="text" id="logUsername" placeholder="User Name" class="form-control"><span id="logUsernameError"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-key bigicon"></i></span>
                                <div class="col-md-8">
                                    <input  name="password" type="password" id="logPassword" placeholder="Password" class="form-control"><span id="logPasswordError"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success btn-lg">Login</button>
                                    <a href="register.php" class="btn btn-primary btn-lg">SignUp</a>
                                </div>
                            </div>
                        </fieldset>
                        <input type="hidden" name="command" value="login">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once '../PHP/footer.php'; ?>
    

