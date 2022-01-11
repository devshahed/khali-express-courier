<header class="position-fixed top-0 left-0 w-100 bg-white text-theme-color d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center p-3">
        <a href="/" class="me-3 d-block"><img src="/images/logotransparent.png" alt="logo" width="100" height=""></a>
        <nav class="d-flex justify-content-sm-between justify-content-end align-items-center w-100">
            <ul class="d-flex flex-sm-row flex-column justify-content-center align-items-center list-unstyled mb-0">
                <li class="px-1"><a href="/dashboard" class="p-1 text-decoration-none text-theme-color <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){ echo "active"; } ?>" data-name="Dashboard">Dashboard</a></li>
                <li class="px-1"><a href="/dashboard/invoice.php" class="p-1 text-decoration-none text-theme-color <?php if(basename($_SERVER['PHP_SELF']) == "invoice.php"){ echo "active"; } ?>" data-name="Invoice">Invoice</a></li>
                <li class="px-1"><a href="/dashboard/track.php" class="p-1 text-decoration-none text-theme-color <?php if(basename($_SERVER['PHP_SELF']) == "track.php"){ echo "active"; } ?>" data-name="Track">Track</a></li>
                <li class="px-1"><a href="/dashboard/profile.php" class="p-1 text-decoration-none text-theme-color <?php if(basename($_SERVER['PHP_SELF']) == "profile.php"){ echo "active"; } ?>" data-name="Profile">Profile</a></li>
                <li class="px-1"><a href="/dashboard/logout.php" class="p-1 text-decoration-none text-theme-color" data-name="Logout">Logout</a></li>
            </ul>
            <p class="mb-0 d-md-block d-none">Welcome, <b><?php echo $_SESSION['username']; ?><span>!</span></b></p>
            <div id="navToggle" class="cursor-pointer d-sm-none d-block"><i class="fas fa-bars fa-2x d-block"></i></div>
        </nav>
    </div>
</header>