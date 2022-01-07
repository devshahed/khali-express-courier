<?php
    session_start();
    session_regenerate_id(true);
    include 'util.php';
    require_once("db.php");
    if(isset($_SESSION['verified'])){
        exit(header("Location: {$hostname}/dashboard"));
    }
    if(isset($_POST['login'])){
        $email = $conn->real_escape_string(test_input($_POST['email']));
        $pass = sha1(str_replace("x", "a", md5(test_input($_POST['password']))));
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$pass}'";
            $result = $conn->query($sql);
            if($result->num_rows == 1){
                while($row = $result->fetch_assoc()){
                    if($row['verified'] != 1){
                        exit(header("Location: thankyou.php"));
                    }else{
                        $_SESSION['uid'] = $row['id'];
                        $_SESSION['username'] = $row['first_name'] . $row['last_name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['verified'] = $row['verified'];
                        exit(header("Location: {$hostname}/dashboard"));
                    }
                }
            }else{
               $error = "Username or password was incorrect"; 
            }
        }else{
            $error = "Invalid email address";
        }
    }
?>

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
                    <h2 class="text-center text-white mb-4 section-heading">Login</h2>
                    <form class="row w-75 mx-auto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="col-12 p-2">
                            <p style="color: orange"><?php
                                if(isset($error)){
                                    echo $error;
                                }
                            ?></p>
                            <input type="email" name="email" placeholder="Email*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 p-2">
                            <input type="password" name="password" placeholder="Password*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <input id="loginBtn" type="submit" name="login" value="Login" class="text-bold my-2 px-3 py-2 rounded-pill text-theme-color bg-white outline-none border-0">
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