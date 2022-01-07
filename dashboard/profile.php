<?php
    session_start();
    include_once "../util.php";
    include_once "../db.php";
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
        <link rel="icon" href="images/favicon.ico">
    </head>

    <body>
        <?php include_once 'header.php'; ?>
        <main>
            <!-- ================= Profile ================ -->
            <section id="profile">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <form action="?" method="POST" class="mb-4">
                            <?php
                                $uid = $_SESSION['uid'];
                                $sql = "SELECT * FROM users WHERE id = $uid";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                            ?> 
                                <div class="mb-3">
                                    <label class="mb-1">KEC UID #</label>
                                    <input class="form-control" style="background: #c5c9cc;" type="text" value="KEC<?php echo $row['id']; ?>" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="fname" class="mb-1">First Name</label>
                                    <input id="fname" class="form-control bg-transparent" type="text" name="fname" value="<?php echo $row['first_name']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="lname" class="mb-1">Last Name</label>
                                    <input id="lname" class="form-control bg-transparent" type="text" name="lname" value="<?php echo $row['last_name']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="mb-1">Phone</label>
                                    <input id="phone" class="form-control bg-transparent" type="text" name="Phone" value="<?php echo $row['phone']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="trn" class="mb-1">TRN</label>
                                    <input id="trn" class="form-control bg-transparent" type="text" name="trn" value="<?php echo $row['trn']; ?>">
                                </div>
                                <h5 class="mb-3">Primary Address</h5>
                                <div class="mb-3">
                                    <label for="addr" class="mb-1">Address</label>
                                    <input id="addr" class="form-control bg-transparent" type="text" name="address" value="<?php echo $row['street_addr']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="mb-1">City</label>
                                    <input id="city" class="form-control bg-transparent" type="text" name="city" value="<?php echo $row['city']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="parish" class="mb-3">Parish</label>
                                    <select name="parish" id="parish">
                                        <option disabled>Select Parish</option>
                                        <option selected value="St.Catherine"><?php echo $row['parish']; ?></option>
                                        <option value="St.Catherine">St.Catherine</option>
                                        <option value="St.Catherine">St.Catherine</option>
                                        <option value="St.Catherine">St.Catherine</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="mb-1">Email</label>
                                    <input id="email" class="form-control bg-transparent" type="email" name="email" value="<?php echo $row['email']; ?>">
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="submit" name="update" value="Update" class="text-white bg-theme outline-none rounded-pill px-3 py-2 border-0">
                                    <a href="deleteuser.php" class=" text-decoration-none ms-2 text-white bg-theme outline-none rounded-pill px-3 py-2 border-0">Delete Account</a>
                                </div>
                            <?php   } } ?>
                            </form>
                            <form action="?" method="POST">
                                <h4>Password Management</h4>
                                <div class="mb-3">
                                    <label for="oldPass" class="mb-1">Old Password</label>
                                    <input id="oldPass" class="form-control bg-transparent" type="password" name="old-pass">
                                </div>
                                <div class="mb-3">
                                    <label for="newPass" class="mb-1">New Password</label>
                                    <input id="newPass" class="form-control bg-transparent" type="password" name="new-pass">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPass" class="mb-1">Old Password</label>
                                    <input id="confirmPass" class="form-control bg-transparent" type="password" name="confirm-pass">
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <input type="submit" name="change" value="Change" class="text-white bg-theme outline-none rounded-pill px-3 py-2 border-0">
                                </div>
                            </form>
                        </div>
                        <div class="col-4 d-flex flex-column text-white">
                            <div class="p-3 rounded-2 my-3 bg-theme">
                                <p>Total Items Shipped</p>
                                <div class="d-flex justify-content-between align-tems-center">
                                    <i class="fas fa-box fa-2x d-block"></i>
                                    <p class="mb-0">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/all.min.js"></script>
        <script src="../js/app.js"></script>
    </body>

</html>