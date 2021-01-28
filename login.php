<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>

<!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->





<!-- Page Content -->

<div class="well mt-4 container">
        <div class="col-md-8 m-auto">
            <div class="form-wrap">
                <h1>Register</h1>
                <form role="form" action="includes/login.php" method="post" id="login-form" autocomplete="off">
                    <h6 class="text-center">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control"
                                   placeholder=" Username">
                        </div>

                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control"
                                   placeholder="Password">
                        </div>

                        <input type="submit" name="login" id="btn-login"
                               class="btn btn-custom btn-lg btn-warning" value="login">
                </form>

            </div>
        </div> <!-- /.col-xs-12 -->
</div> <!-- /.container -->


