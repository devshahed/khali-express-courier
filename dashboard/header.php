<?php
    session_start();
?>
<header class="position-fixed top-0 left-0 w-100 bg-white text-theme-color d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center p-3">
        <a href="/" class="me-3 d-block"><img src="/images/logotransparent.png" alt="logo" width="100" height=""></a>
        <nav class="d-flex justify-content-between align-items-center w-100">
            <ul class="d-flex justify-content-center align-items-center list-unstyled mb-0">
                <li class="px-1"><a href="/dashboard" class="p-1 text-decoration-none text-theme-color">Dashboard</a></li>
                <li class="px-1"><a href="/dashboard/invoice.php" class="p-1 text-decoration-none text-theme-color">Invoice</a></li>
                <li class="px-1"><a href="/dashboard/track.php" class="p-1 text-decoration-none text-theme-color">Track</a></li>
                <li class="px-1"><a href="/dashboard/profile.php" class="p-1 text-decoration-none text-theme-color">Profile</a></li>
                <li class="px-1"><a href="/dashboard/logout.php" class="p-1 text-decoration-none text-theme-color">Logout</a></li>
            </ul>
            <p class="mb-0">Welcome, <b><?php echo $_SESSION['username']; ?><span>!</span></b></p>
        </nav>
    </div>
</header>