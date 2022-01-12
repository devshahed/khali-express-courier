<?php
    session_start();
    if(!isset($_SESSION['username'])){
        exit(header("Location: /admin-panel/login.php"));
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
        <link rel="icon" href="images/favicon.ico">
    </head>

    <body>
        <?php include_once 'header.php'; ?>
        <main>
            <!-- ================= Dashboard ================ -->
            <section id="dashboard">
                <div class="container-lg">
                    <h4 class="text-center">Dashboard</h4>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-3 my-2">
                            <div class="card bg-indigo text-white rounded-2 p-2 d-flex justify-content-center align-items-center">
                                <i class="fas fa-shipping-fast fa-3x d-block my-2"></i>
                                <h5 class="text-center">Total Orders</h5>
                                <h2 class="text-center">100</h2>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-2">
                            <div class="card bg-danger text-white rounded-2 p-2 d-flex justify-content-center align-items-center">
                                <i class="fas fa-microchip fa-3x d-block my-2"></i>
                                <h5 class="text-center">Pending Orders</h5>
                                <h2 class="text-center">1</h2>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-2">
                            <div class="card bg-primary text-white rounded-2 p-2 d-flex justify-content-center align-items-center">
                                <i class="fas fa-box fa-3x d-block my-2"></i>
                                <h5 class="text-center">Ready</h5>
                                <h2 class="text-center">10</h2>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 my-2">
                            <div class="card bg-success text-white rounded-2 p-2 d-flex justify-content-center align-items-center">
                                <i class="fas fa-th-list fa-3x d-block my-2"></i>
                                <h5 class="text-center">Delivered</h5>
                                <h2 class="text-center">50</h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="border border-3 rounded-2 p-2 d-flex justify-content-center align-items-center">
                                <a href="/admin-panel/add-admin.php" class="btn btn-primary m-2 text-bold bg-indigo border-0">Add Admin</a>
                                <a href="/admin-panel/globmail.php" class="btn btn-primary m-2 text-bold bg-indigo border-0">Send Global Mail</a>
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