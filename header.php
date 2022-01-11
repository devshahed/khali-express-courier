<header class="position-fixed top-0 left-0 w-100 bg-white text-theme-color d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center p-3">
        <a href="/" class="me-3 d-block"><img src="/images/logotransparent.png" alt="logo" width="100" height=""></a>
        <nav class="d-flex justify-content-sm-between justify-content-end align-items-center w-100">
            <ul class="d-flex flex-sm-row flex-column justify-content-center align-items-center list-unstyled mb-0">
                <li class="px-1 py-sm-0 py-1"><a href="./" class="p-1 text-decoration-none text-theme-color <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){ echo "active"; } ?>" data-name="Home">Home</a></li>
                <li class="px-1 py-sm-0 py-1"><a href="./#about" class="p-1 text-decoration-none text-theme-color" data-name="About">About</a></li>
                <li class="px-1 py-sm-0 py-1"><a href="/contact.php" class="p-1 text-decoration-none text-theme-color <?php if(basename($_SERVER['PHP_SELF']) == "contact.php"){ echo "active"; } ?>" data-name="Contact">Contact</a></li>
                <li class="px-1 py-sm-0 py-1"><a onclick="showRates()" href="javascript:void(0)" class="p-1 text-decoration-none text-theme-color" data-name="Rates">Rates</a></li>
                <li class="px-1 py-sm-0 py-1"><a href="/login.php" class="p-1 text-decoration-none text-theme-color <?php if(basename($_SERVER['PHP_SELF']) == "login.php"){ echo "active"; } ?>" data-name="<?php if(isset($_SESSION['verified'])){ echo "Dashboard"; }else{ echo "Login"; } ?>"><?php
                    if(isset($_SESSION['verified'])){
                        echo "Dashboard";
                    }else{
                        echo "Login";
                    }
                ?></a></li>
            </ul>
            <div id="navToggle" class="cursor-pointer d-sm-none d-block"><i class="fas fa-bars fa-2x d-block"></i></div>
        </nav>
    </div>
    <div id="rates" class="d-none justify-content-center align-items-center position-fixed text-white">
        <table>
            <thead>
                <tr class="d-flex justify-content-between align-items-center bg-primary p-3">
                    <th>Weight (lbs)</th>
                    <th>Rate (JMD)</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $count = 1;
                    ?>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 450.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 800.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 1,100.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 1,300.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 1,550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 1,850.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 2,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 2,350.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 2,600.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 2,750.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 3,150.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 3,450.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 3,650.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 3,950.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 4,250.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 4,550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 4,800.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 5,100.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 5,400.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 5,750.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 6,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 6,300.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 6,550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 6,850.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 7,150.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 7,400.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 7,650.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 8,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 8,350.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 8,600.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 8,750.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 9,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 9,250.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 9,500.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 9,750.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 10,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 10,300.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 10,550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 10,800.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 11,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 11,300.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 11,600.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 11,850.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 12,100.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 12,350.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 12,650.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 12,950.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 13,250.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 13,600.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 13,900.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 14,250.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 14,575.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 14,900.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 15,225.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 15,550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 15,875.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 16,200.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 16,525.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 16,850.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 17,175.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 17,500.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 17,825.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 18,150.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 18,475.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 18,800.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 19,125.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 19,450.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 19,775.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 20,100.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 20,425.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 20,750.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 21,075.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 21,400.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 21,725.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 22,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 22,375.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 22,700.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 23,025.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 23,350.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 23,675.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 24,000.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 24,325.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 24,650.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 24,975.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 25,300.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 25,625.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 25,950.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 26,275.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 26,600.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 26,925.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 27,250.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 27,575.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 27,900.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 28,225.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 28,550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 28,875.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 29,200.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 29,525.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 29,850.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 30,175.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 30,750.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 31,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 31,350.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 31,750.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 32,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 32,350.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 32,750.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 33,050.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 32,350.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td><?php echo $count++; ?></td>
                    <td>$ 33,650.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</header>