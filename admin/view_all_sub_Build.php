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

                        <!-- ROW-3 CLOSED -->
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">Product Sales</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="grid-margin">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table card-table border table-vcenter text-nowrap align-items-center">
                                                        <thead class="">
                                                        <tr>
                                                            <th>Sub Name </th>
                                                            <th>Category</th>
                                                            <th>space</th>
                                                            <th>Number Of Rooms</th>
                                                            <th>Number Of Bathroom</th>
                                                            <th>Dressing Room</th>
                                                            <th>Balcony</th>
                                                            <th>content</th>
                                                            <th>Sub Image</th>
                                                            <th>Sub Image</th>
                                                            <th>Sub Image</th>
                                                            <th>Sub Image</th>
                                                            <th>Sub Image</th>
                                                            <th>Sub Image</th>
                                                            <th>Edit</th>
                                                            <th>DELETE</th>
                                                        </tr>
                                                        </thead>
                                                        <?php
                                                        $select_sub_Build = new subBuild();
                                                        $select_sub_Build->viewSubBuild();

                                                        ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                        </div><!-- ROW-5 END -->
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>



<?php include "include/footer.php"?>