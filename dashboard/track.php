<?php
    session_start();
    if(!isset($_SESSION['verified'])){
        exit(header("Location: /login.php"));
    }
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Track | Khali Express Courier</title>
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
                <div class="container">
                    <h4 class="text-center">Track</h4>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h6>Ready for pickup/delivery</h6>
                            <table class="w-100 mb-4">
                                <thead>
                                    <tr class="bg-theme text-white">
                                        <th class="p-2">Tracking</th>
                                        <th class="p-2">Sender</th>
                                        <th class="p-2">Date Arrived</th>
                                        <th class="p-2">Weight (lb)</th>
                                        <th class="p-2">Description</th>
                                        <th class="p-2">Item Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6>In Transit</h6>
                            <table class="w-100 mb-4">
                                <thead>
                                    <tr class="bg-theme text-white">
                                        <th class="p-2">Tracking</th>
                                        <th class="p-2">Sender</th>
                                        <th class="p-2">Weight (lb)</th>
                                        <th class="p-2">Description</th>
                                        <th class="p-2">Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2">8031611</td>
                                        <td class="p-2">AMAZON FULFILLMENT SERVICE</td>
                                        <td class="p-2">1.15</td>
                                        <td class="p-2">Merchandise</td>
                                        <td class="p-2">Florida</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6>Recently Shipped Items</h6>
                            <table class="w-100 mb-4">
                                <thead>
                                    <tr class="bg-theme text-white">
                                        <th class="p-2">Tracking</th>
                                        <th class="p-2">Sender</th>
                                        <th class="p-2">Weight (lb)</th>
                                        <th class="p-2">Description</th>
                                        <th class="p-2">Status</th>
                                        <th class="p-2">Delivery Date</th>
                                        <th class="p-2">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2">8031611</td>
                                        <td class="p-2">AMAZON FULFILLMENT SERVICE</td>
                                        <td class="p-2">1.15</td>
                                        <td class="p-2">Merchandise</td>
                                        <td class="p-2">Delivered</td>
                                        <td class="p-2">01/01/2022</td>
                                        <td class="p-2">
                                            <i class="far fa-file-pdf text-theme-color cursor-pointer" data-toggle="tooltip" data-placement="top" title="View Invoice"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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