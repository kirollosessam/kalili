
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
                    <div class="col-lg-12">
                        <!-- Start Add Category -->
                        <div class="col-xs-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <!--start insert Category-->

                                <!--End insert Category-->
                                <div class="form-group">
                                    <?php
                                    include "function/logo_image.php";
                                    $insert_logo = new logo_image();
                                    $insert_logo->insertLogo();
                                    ?>
                                    <label for="logo">Add Iamge Logo :</label><br>
                                    <input  type="file" name="image_logo">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-success" type="submit" name="insert_logo" value="Add LOGO ">
                                </div>
                            </form>
                        </div>
                        <!-- End Add Category -->
                    </div>
                </div>
                <!-- ROW-3 CLOSED -->

            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>



<?php include "include/footer.php"?>