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
                <div class="container">
                    <h4 class="text-center">Dashboard</h4>
                    <hr>
                    <div class="row py-4 my-4 text-center">
                        <div class="col-4">
                            <h5>Ready For Delivery</h5>
                            <p>0</p>
                        </div>
                        <div class="col-4">
                            <h5>In Transit</h5>
                            <p>0</p>
                        </div>
                        <div class="col-4">
                            <h5>Current Balance</h5>
                            <p>&#36; <span>0.00</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <h6>Ready for pickup/delivery</h6>
                            <table class="w-100 my-3">
                                <thead>
                                    <tr class="bg-theme text-white">
                                        <th class="p-2">Tracking</th>
                                        <th class="p-2">Sender</th>
                                        <th class="p-2">Date Arrived</th>
                                        <th class="p-2">Weight (lb)</th>
                                        <th class="p-2">Description</th>
                                        <th class="p-2">Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6>In Transit</h6>
                            <table class="w-100 my-3">
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
                        </div>
                        <div class="col-lg-4 col-12 my-3">
                            <div class="border border-secondary">
                                <h5 class="text-center bg-theme text-white p-2">Shipping Address</h5>
                                <p class="mn-0 p-2">Mailbox #: <span>DITE 226</span></p>
                                <hr>
                                <div class="p-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Name:</p>
                                        <p class="mb-0">Simone Reid</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Address 1:</p>
                                        <p class="mb-0">1946 NW 54th Ave</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Address 2:</p>
                                        <p class="mb-0">DITE 226</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">City:</p>
                                        <p class="mb-0">Margate</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Florida</p>
                                        <p class="mb-0">Simone Reid</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Zip:</p>
                                        <p class="mb-0">33063</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Country:</p>
                                        <p class="mb-0">United States</p>
                                    </div>
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