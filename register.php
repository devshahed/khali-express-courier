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
            <!-- ================= Register ================ -->
            <section id="register" class="background-no-repeat background-cover background-fixed background-center">
                <div class="container">
                    <h2 class="text-center text-white mb-4 section-heading">Registration</h2>
                    <form class="row" action="<?php echo $hostname . "/add-user.php"; ?>" method="POST">
                        <div class="col-md-6 col-12 p-2">
                            <input type="text" name="fname" placeholder="First Name*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-6 col-12 p-2">
                            <input type="text" name="lname" placeholder="Last Name*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-6 col-12 p-2">
                            <input type="email" name="email" placeholder="Email*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-6 col-12 p-2">
                            <input type="text" name="phone" placeholder="Telephone #1*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-4 col-12 p-2">
                            <input type="text" name="street-addr" placeholder="Street Address*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-4 col-12 p-2">
                            <input type="text" name="city" placeholder="City" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent">
                        </div>
                        <div class="col-md-4 col-12 p-2">
                            <select name="parish" class="w-100 outline-none border border-white border-3 p-2 rounded-2">
                                <option selected disabled>Select Parish</option>
                                <option value="1">Parish 1</option>
                                <option value="2">Parish 2</option>
                                <option value="3">Parish 3</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 p-2">
                            <input type="text" name="trn" placeholder="TRN*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-6 col-12 p-2">
                        <select name="pickup-location" class="w-100 outline-none border border-white border-3 p-2 rounded-2">
                                <option selected disabled>Select Pickup Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                        <div class="col-12 p-2">
                            <input type="password" name="password" placeholder="Password*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 p-2">
                            <input type="password" placeholder="Confirm Password*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <input id="registerBtn" type="submit" name="register" value="Register" class="my-2 text-bold px-3 py-2 rounded-pill text-theme-color bg-white outline-none border-0">
                        </div>
                    </form>
                    <div class="text-white text-center pt-3 h6">Already a member? <a href="login.php" class="text-decoration-none text-primary">Login</a></div>
                </div>
            </section>
        </main>
        <?php include_once 'footer.php'; ?>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>