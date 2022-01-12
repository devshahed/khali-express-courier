<?php
    include_once '../util.php';
    include_once '../db.php';
    session_start();
    if(!isset($_SESSION['username'])){
        exit(header("Location: /admin-panel/login.php"));
    }

    $sql = "SELECT * FROM admins";
    $result = $conn->query($sql);
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
            <!-- ================= Admins ================ -->
            <section id="dashboard">
                <div class="container-fluid">
                    <h4 class="text-center">Admins</h4>
                    <hr>
                    <table class="w-100 text-center border border-2">
                        <thead class="bg-theme text-white">
                            <tr>
                                <th class="p-2">ID</th>
                                <th class="p-2">Username</th>
                                <th class="p-2">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){ ?>
                            <tr class="border border-1">
                                <td class="p-2"><?php echo $row['id'] ?></td>
                                <td class="p-2"><?php echo $row['username'] ?></td>
                                <td class="p-2"><a class="text-decoration-none text-theme-color text-bold" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                            </tr>
                            <?php  }  }  ?>
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