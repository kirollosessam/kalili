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
                                                            <th>id</th>
                                                            <th>Category</th>
                                                            <th>product Title</th>
                                                            <th>Location</th>
                                                            <th>Location Link</th>
                                                            <th>product_date</th>
                                                            <th>product_image</th>
                                                            <th>product_image1</th>
                                                            <th>product_image_2</th>
                                                            <th>  product_image_3</th>
                                                            <th>  product_image_4</th>
                                                            <th>  product_image_5</th>
                                                            <th>  product_image_6</th>
                                                            <th>  product_content</th>
                                                            <th>  centimeters</th>
                                                            <th>  badroom</th>
                                                            <th>  bathroom</th>
                                                            <th> gragh</th>
                                                            <th>  Property Amenities</th>
                                                            <th> Property Amenities1</th>
                                                            <th> Property Amenities2</th>
                                                            <th> Property Amenities3</th>
                                                            <th>  Property Amenities4</th>
                                                            <th>  Property Amenities5</th>
                                                            <th>  Property Amenities6</th>
                                                            <th> Property Amenities7</th>
                                                            <th> Property Amenities8</th>
                                                            <th> Property Amenities9</th>
                                                            <th>   product_price</th>
                                                            <th>  product_price1</th>
                                                            <th>  product_tags</th>
                                                            <th>  product_status</th>
                                                            <th>Edit</th>
                                                            <th>DELETE</th>
                                                        </tr>
                                                        </thead>
                                                        <?php
                                                        $select_product = new admin_products();
                                                        $select_product->selectProduct();
                                                        $select_product->delete_product();
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