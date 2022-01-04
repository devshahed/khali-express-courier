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
            <!-- ================= Home ================ -->
            <section id="contact.php" class="bg-indigo">
            <iframe id="map" class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3795.754103578916!2d-76.90042378509386!3d17.943619391246965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb6b727db7b9ab%3A0x2262db9e78fa20bd!2zQnJhZXRvbiBOZXd0b3duLCDgpqrgp4vgprDgp43gpp_gpq7gp4vgprAsIOCmnOCnjeCmr-CmvuCmruCmvuCmh-CmleCmvg!5e0!3m2!1sbn!2sbd!4v1641290242386!5m2!1sbn!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="container text-center d-flex justify-content-center align-items-center h-100 text-white flex-column pt-5">
                    <h2 class="text-center text-white mb-4 section-header">Contact Us</h2>
                    <form class="row" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="col-md-6 col-12 p-2">
                            <input type="text" name="fname" placeholder="First Name*" class="w-100 text-white outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-6 col-12 p-2">
                            <input type="text" name="lname" placeholder="Last Name*" class="w-100  text-white outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-6 col-12 p-2">
                            <input type="email" name="email" placeholder="Email*" class="w-100  text-white outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-md-6 col-12 p-2">
                            <input type="text" name="subject" placeholder="Subject*" class="w-100  text-white outline-none border border-white border-3 p-2 rounded-2 bg-transparent" required>
                        </div>
                        <div class="col-12 p-2">
                            <textarea class="w-100  text-white outline-none border border-white border-3 p-2 rounded-2 bg-transparent" name="message" rows="5" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 pt-2 d-flex justify-content-center align-items-center">
                            <input id="sendBtn" type="submit" name="send" value="Send" class="my-2 px-3 py-2 text-bold rounded-pill text-theme-color bg-white outline-none border-0">
                        </div>
                    </form>
                    <div class="row pt-5 justify-content-between align-items-center">
                        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                            <a href="mailto: khaliexpresscourier@gmail.com" class="d-block overflow-hidden rounded-circle"><i class="fas fa-envelope contact-icon rounded-circle bg-indigo text-white p-3 border border-3 border-white"></i></a>
                            <p class="mb-0 text-white">khaliexpresscourier@gmail.com</p>
                        </div>
                        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                            <a href="mailto: khaliexpresscourier@gmail.com" class="d-block overflow-hidden rounded-circle"><i class="fas fa-envelope contact-icon rounded-circle bg-indigo text-white p-3 border border-3 border-white"></i></a>
                            <p class="mb-0 text-white">khaliexpresscourier@gmail.com</p>
                        </div>
                        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                            <a href="mailto: khaliexpresscourier@gmail.com" class="d-block overflow-hidden rounded-circle"><i class="fas fa-envelope contact-icon rounded-circle bg-indigo text-white p-3 border border-3 border-white"></i></a>
                            <p class="mb-0 text-white">khaliexpresscourier@gmail.com</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include_once 'footer.php'; ?>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>