<!DOCTYPE html>
<html lang="en-us">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="icon" href="images/favicon.ico">
    </head>

    <body>
        <?php include_once 'header.php'; ?>
        <main>
            <!-- ================= Login ================ -->
            <section id="login" class="background-no-repeat background-cover background-fixed background-center">
                <div class="container">
                    <h2 class="text-center text-white mb-4 section-header">Login</h2>
                    <form class="row w-75 mx-auto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="col-12 p-2">
                            <input type="email" name="email" placeholder="Email*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 p-2">
                            <input type="password" name="password" placeholder="Password*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <input id="loginBtn" type="submit" name="login" value="Login" class="my-2 px-3 py-2 rounded-pill text-danger bg-white outline-none border-0">
                        </div>
                    </form>
                    <div class="text-white text-center pt-3 h6"><a href="forgot.php" class="text-decoration-none text-primary">Forgot Your Password?</a></div>
                    <div class="text-white text-center h6">Not a member? <a href="register.php" class="text-decoration-none text-primary">Register</a></div>
                </div>
            </section>
        </main>
        <?php include_once 'footer.php'; ?>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>