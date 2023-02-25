
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
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card bg-primary img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">

                                                <?php
                                                include "function/indexAdmin.php";
                                                $product_count = new indexAdmin();
                                                $product_count->CountPost();
                                                ?>
                                                <p class="text-white mb-0"><a style="color:whitesmoke;" href="view_all_product.php">Total Building</a> </p>
                                            </div>
                                            <div class="ml-auto"> <i class="fa fa-send-o text-white fs-30 mr-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card bg-secondary img-card box-secondary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <?php

                                                $product_count = new indexAdmin();
                                                $product_count->CountCategory();
                                                ?>
                                                <p class="text-white mb-0"><a style="color:whitesmoke;" href="categories.php">Total Category </a></p>
                                            </div>
                                            <div class="ml-auto"> <i class="fa fa-bar-chart text-white fs-30 mr-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="col-md-6">-->
<!--                                <div class="card bg-secondary img-card box-secondary-shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <div class="d-flex">-->
<!--                                            <div class="text-white">-->
<!--                                                --><?php
//
//                                                $product_count = new indexAdmin();
//                                                $product_count->CountSub();
//                                                ?>
<!--                                                <p class="text-white mb-0"><a style="color:whitesmoke;" href="categories.php">Total Sub Build  </a></p>-->
<!--                                            </div>-->
<!--                                            <div class="ml-auto"> <i class="fa fa-bar-chart text-white fs-30 mr-2 mt-2"></i> </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card  bg-success img-card box-success-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <?php

                                                $product_count = new indexAdmin();
                                                $product_count->CountSub();
                                                ?>
                                                <p class="text-white mb-0"><a style="color:whitesmoke;" href="comments.php">Total Sub Build </a> </p>
                                            </div>
                                            <div class="ml-auto"> <i class="fa fa-building text-white fs-30 mr-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->

                        </div>
                        <!-- ROW-3 CLOSED -->

                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>



<?php include "include/footer.php"?>