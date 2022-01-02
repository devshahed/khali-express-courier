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
            <!-- ================= Invoice ================ -->
            <section id="invoice">
                <div class="container">
                    <h4 class="text-center">Upload Invoice</h4>
                    <hr>
                    <form action="?" method="POST">
                        <div class="mb-3">
                            <label for="courier" class="mb-1">Courier</label>
                            <select name="courier" id="courier">
                                <option disabled>Courier</option>
                                <option selected disabled>Select Courier</option>
                                <option value="China Post">China Post</option>
                                <option value="China Post">China Post</option>
                                <option value="China Post">China Post</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tracking" class="mb-1">Tracking</label>
                            <input id="tracking" class="form-control bg-transparent" type="text" name="tracking">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="mb-1">Description</label>
                            <input id="description" class="form-control bg-transparent" type="text" name="description">
                        </div>
                        <div class="mb-3">
                            <label class="mb-1">Attach Invoice(s)</label>
                            <input id="invoiceFile" type="file" name="invoiceFile">
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="Submit" name="Submit" value="Submit" class="text-white bg-theme outline-none rounded-pill px-3 py-2 border-0">
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