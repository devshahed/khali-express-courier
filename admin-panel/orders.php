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
            <!-- ================= Orders ================ -->
            <section id="dashboard">
                <div class="container-fluid">
                    <h4 class="text-center">Pending Orders</h4>
                    <hr>
                    <table class="w-100 text-center border border-2">
                        <thead class="bg-theme text-white">
                            <tr>
                                <th class="p-sm-2 p-1">Track</th>
                                <th class="p-sm-2 p-1">Sender</th>
                                <th class="p-sm-2 p-1">Details</th>
                                <th class="p-sm-2 p-1">Approve</th>
                                <th class="p-sm-2 p-1">Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border border-1">
                                <td class="p-sm-2 p-1">145</td>
                                <td class="p-sm-2 p-1">Amazon</td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="edit.php?id=1">Details</a></td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="approve.php?id=145">Approve</a></td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="cancel.php?id=145">Cancel</a></td>
                            </tr>
                            <tr class="border border-1">
                                <td class="p-sm-2 p-1">145</td>
                                <td class="p-sm-2 p-1">Amazon</td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="edit.php?id=1">Details</a></td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="approve.php?id=145">Approve</a></td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="cancel.php?id=145">Cancel</a></td>
                            </tr>
                            <tr class="border border-1">
                                <td class="p-sm-2 p-1">145</td>
                                <td class="p-sm-2 p-1">Amazon</td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="edit.php?id=1">Details</a></td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="approve.php?id=145">Approve</a></td>
                                <td class="p-sm-2 p-1"><a class="text-decoration-none text-theme-color text-bold" href="cancel.php?id=145">Cancel</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/all.min.js"></script>
        <script src="../js/app.js"></script>
    </body>
</html>