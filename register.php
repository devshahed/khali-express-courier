<?php
    session_start();
    include_once 'util.php';
    require_once("db.php");
    if(isset($_SESSION['verified'])){
        exit(header("Location: {$hostname}/dashboard"));
    }
    if(isset($_POST['register'])){
        $errors = array('fname_error' => null, 'lname_error' => null, 'email_error' => null, 'phone_error' => null, 'addr_error' => null, 'city_error' => null, 'parish_error' => null, 'trn_error' => null, 'pickup_error' => null, 'password_error' => null);
        $fname = test_input($_POST['fname']);
        $lname = test_input($_POST['lname']);
        $name = $fname . " " . $lname;
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $street_addr = filter_var(test_input($_POST['street-addr']), FILTER_SANITIZE_STRING);
        $city = filter_var(test_input($_POST['city']), FILTER_SANITIZE_STRING);
        $parish = filter_var(test_input($_POST['parish']), FILTER_SANITIZE_STRING);
        $trn = test_input($_POST['trn']);
        $password = test_input($_POST['password']);
        $pass = sha1(str_replace("x", "a", md5($password)));
        $confirm_password = test_input($_POST['confirm-password']);

        $vkey = md5($email . uniqid());

        if(!empty($fname)){
            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $fname)){
                $errors['fname_error'] = "Please enter a valid first name";
            }
        }else{
            $errors['fname_error'] = "Please enter a first name";
        }
        if(!empty($lname)){
            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $lname)){
                $errors['lname_error'] = "Please enter a valid last name";
            }
        }else{
            $errors['lname_error'] = "Please enter a last name";
        }
        if(!empty($email)){
            $sql_email = "SELECT email FROM users WHERE email = '{$email}'";
            $result_email = $conn->query($sql_email);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email_error'] = "Please enter a valid email";
            }elseif($result_email->num_rows != 0){
                $errors['email_error'] = "This email has already registered";
            }
        }else{
            $errors['email_error'] = "Please enter email address";
        }
        if(!empty($phone)){
            if(!filter_var($phone, FILTER_VALIDATE_INT)){
                $errors['phone_error'] = "Please enter a phone number";
            }
        }else{
            $errors['phone_error'] = "Please enter phone number";
        }
        if(empty($street_addr)){
           $errors['addr_error'] = "Please enter street address";
        }
        if(!empty($city)){
            if (preg_match('/[\'^£$%&*()}{@#~?><>|=_+¬-]/', $city)){
                $errors['city_error'] = "Please enter a valid city name";
            }
        }else{
            $errors['city_error'] = "Please enter city name";
        }
        if(!empty($parish)){
            if (preg_match('/[\'^£$%&*()}{@#~?><>|=_+¬-]/', $parish)){
                $errors['parish_error'] = "It's not a valid parish";
            }
        }else{
            $errors['parish_error'] = "Please choose a parish";
        }
        if(!empty($trn) || $trn > 4){
            if(!filter_var($trn, FILTER_VALIDATE_INT)){
                $errors['trn_error'] = "Please enter a valid trn";
            }
        }else{
            $errors['trn_error'] = "Please enter trn";
        }
        if(strlen($password) > 6){
            if($password != $confirm_password){
                $errors['password_error'] = "Passwords does not match";
            }
        }else{
            $errors['password_error'] = "Password is too short";
        }

        //INSERT INTO DATABASE
        if(count(array_unique($errors)) === 1) {
            $sql = "INSERT INTO users (first_name, last_name, email, phone, street_addr, city, parish, trn, password, vkey) VALUES ('{$fname}', '{$lname}', '{$email}', '{$phone}', '{$street_addr}', '{$city}', '{$parish}', '{$trn}', '{$pass}', '{$vkey}')";
            if($conn->query($sql)){
                $link = $hostname . "/verify.php?vkey=" . $vkey;
                $to = $email;
                $subject = "Verify your email address";
                $message = "<!DOCTYPE html>
                <html lang=\"en\">
                <head>
                    <meta charset=\"UTF-8\">
                    <title>Thank you for registration</title>
                </head>
                <body>
                    <h2>Thank you for registration, click here to active your account: </h2>
                    <a style=\"color: white; background: orange; padding: 5px 10px; text-decoration: none;\" href=\"$link\">Verify</a>
                    <p>or go to this link: $link</p>
                </body>
                </html>";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: khaliexpresscourier@gmail.com" . "\r\n";

                if(mail($to, $subject, $message, $headers)){
                    exit(header("Location: ./thankyou.php"));
                }
            }
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
            <!-- ================= Register ================ -->
            <section id="register" class="background-no-repeat background-cover background-fixed background-center">
                <div class="container">
                    <h2 class="text-center text-white mb-4 section-heading">Registration</h2>
                    <form class="row" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="col-md-6 col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['fname_error'])){ echo $errors['fname_error']; } ?></span>
                            <input type="text" name="fname" placeholder="First Name*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" >
                        </div>
                        <div class="col-md-6 col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['lname_error'])){ echo $errors['lname_error']; } ?></span>
                            <input type="text" name="lname" placeholder="Last Name*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" >
                        </div>
                        <div class="col-md-6 col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['email_error'])){ echo $errors['email_error']; } ?></span>
                            <input type="text" name="email" placeholder="Email*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" >
                        </div>
                        <div class="col-md-6 col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['phone_error'])){ echo $errors['phone_error']; } ?></span>
                            <input type="text" name="phone" placeholder="Telephone (with country code)*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" >
                        </div>
                        <div class="col-md-6 col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['addr_error'])){ echo $errors['addr_error']; } ?></span>
                            <input type="text" name="street-addr" placeholder="Street Address*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" >
                        </div>
                        <div class="col-md-6 col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['city_error'])){ echo $errors['city_error']; } ?></span>
                            <input type="text" name="city" placeholder="City*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent">
                        </div>
                        <div class="col-md-6 col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['parish_error'])){ echo $errors['parish_error']; } ?></span>
                            <select name="parish" class="w-100 outline-none border border-white border-3 p-2 rounded-2">
                                <option selected value="">Select Parish</option>
                                <option value="St.Catherine">St.Catherine</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['trn_error'])){ echo $errors['trn_error']; } ?></span>
                            <input type="text" name="trn" placeholder="TRN*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" >
                        </div>
                        <div class="col-12 p-2 d-flex flex-column justify-content-end">
                            <span style="color:orange"><?php if(isset($errors['password_error'])){ echo $errors['password_error']; } ?></span>
                            <input type="password" name="password" placeholder="Password*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" >
                        </div>
                        <div class="col-12 p-2 d-flex flex-column justify-content-end">
                            <input type="password" name="confirm-password" placeholder="Confirm Password*" class="w-100 outline-none border border-white border-3 p-2 rounded-2 bg-transparent" >
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