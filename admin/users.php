
    <!-- Start Switcher -->

    <?php include "include/header.php"?>
    <?php include "include/nav_right.php"?>
    <?php include "function/adminUsers.php"?>
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
                <?php
                if (isset($_GET['source'])){
                    $source = $_GET['source'];
                }else{
                    $source = '';
                }
                switch($source){
                    case 'add_user';
                        include "add_users.php";
                        break;
                    case 'edit_user';
                        include "edit_user.php";
                        break;
                    case '36';
                        echo "hewllo 36";
                        break;
                    default:
                        include "view_all_users.php";
                        break;
                }
                ?>



                <!-- ROW-3 CLOSED -->

            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>



<?php include "include/footer.php"?>