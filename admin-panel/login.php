<?php
    include_once '../util.php';
    include_once '../db.php';
    session_start();
    session_regenerate_id(true);
    if(isset($_SESSION['username'])){
        exit(header("Location: {$hostname}/admin-panel"));
    }
    if(isset($_POST['login'])){
        $username = $conn->real_escape_string(test_input($_POST['username']));
        $password = sha1(str_replace("x", "a", md5(test_input($_POST['password']))));

        $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if($result->num_rows == 1){
            $_SESSION['username'] = $username;
            exit(header("Location: {$hostname}/admin-panel"));
        }else{
            $error = "Username or password was incorrect!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en-us">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <link rel="icon" href="../images/favicon.ico">
    </head>

    <body>
        <main>
            <!-- ================= Login ================ -->
            <section id="login" class="background-no-repeat background-cover background-fixed background-center">
                <div class="container">
                    <h2 class="text-center text-white mb-4 section-heading">Login</h2>
                    <form class="row w-75 mx-auto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="col-12 p-2">
                            <p style="color: orange"><?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?></p>
                            <input type="text" name="username" placeholder="Username*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 p-2">
                            <input type="password" name="password" placeholder="Password*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <input id="loginBtn" type="submit" name="login" value="Login" class="text-bold my-2 px-3 py-2 rounded-pill text-theme-color bg-white outline-none border-0">
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/all.min.js"></script>
        <script src="../js/app.js"></script>
    </body>

</html>