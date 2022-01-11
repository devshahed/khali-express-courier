<header class="position-fixed top-0 left-0 w-100 bg-white text-theme-color d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center p-3">
        <a href="/" class="me-3 d-block"><img src="/images/logotransparent.png" alt="logo" width="100" height=""></a>
        <nav class="d-flex justify-content-between align-items-center w-100">
            <ul class="d-flex justify-content-center align-items-center list-unstyled mb-0">
                <li class="px-1"><a href="./" class="p-1 text-decoration-none text-theme-color">Home</a></li>
                <li class="px-1"><a href="./#about" class="p-1 text-decoration-none text-theme-color">About</a></li>
                <li class="px-1"><a href="/contact.php" class="p-1 text-decoration-none text-theme-color">Contact</a></li>
                <li class="px-1"><a onclick="showRates()" href="javascript:void(0)" class="p-1 text-decoration-none text-theme-color">Rates</a></li>
                <li class="px-1"><a href="/login.php" class="p-1 text-decoration-none text-theme-color"><?php
                    if(isset($_SESSION['verified'])){
                        echo "Dashboard";
                    }else{
                        echo "Login";
                    }
                ?></a></li>
            </ul>
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
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-theme p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
                <tr class="d-flex justify-content-between align-items-center bg-indigo p-2">
                    <td>1</td>
                    <td>$ 550.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</header>