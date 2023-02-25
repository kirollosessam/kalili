
<?php include "include/header.php"?>
<!-- Start Switcher -->
<?php include "include/nav_right.php"?>


<!-- End Switcher -->
<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->
<!-- PAGE -->
<div class="page">
    <div class="page-main">
        <!--APP-SIDEBAR-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <!--/APP-SIDEBAR-->
        <?php include "include/nav_left.php";?>
        <!-- Mobile Header -->
        <div class="app-content">
            <div class="side-app">

                <?php include "include/header2.php";?>
                <!-- ROW-1 OPEN -->
                <div class="row">
                    <div class="container">

                    <?php
                    include "time.php"; ?>
                    </div>
                </div>
                <!-- ROW-3 CLOSED -->

            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>



<?php include "include/footer.php"?>