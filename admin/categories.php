
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
                                <?php
                                $insert_category = new adminCategory();
                                $insert_category->insertCategory();
                                ?>
                                <!--End insert Category-->
                                <div class="form-group">
                                    <label for="cat_title"> Add Category :</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <label for="cat_image">Category Image</label>
                                    <input type="file"  name="cat_image">
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-success" type="submit" name="submit" value="Add Categories">
                                </div>
                            </form>

                            <form action="" method="post" enctype="multipart/form-data">
                                <?php
                                $admin_category = new adminCategory();
                                $admin_category->editSelectCategory();
                                $admin_category->updateCategory();
                                ?>
                                <div class="form-group">
                                    <label for="cat_title"> Updateee Category :</label>
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-success" type="submit" name="edit_category" value="Edit Categories">
                                </div>
                            </form>
                        </div>

                        <!-- End Add Category -->
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Title</th>
                                    <th scope="col">image</th>
                                    <th scope="col">Delete Title</th>
                                    <th scope="col">Edit Title</th>

                                </tr>
                                </thead>
                                <!--start select and Delete-->
                                <?php
                                $admin_category = new adminCategory();
                                $admin_category->selectCategory();
                                $admin_category->deleteCategory();
                                ?>
                                <!--End select and Delete-->

                            </table>
                        </div>
                    </div>
                </div>
                <!-- ROW-3 CLOSED -->

            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>



<?php include "include/footer.php"?>