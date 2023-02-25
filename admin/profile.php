
    <!-- Start Switcher -->

    <?php include "include/header.php"?>
    <?php include "include/nav_right.php"?>
    <?php include "function/adminUsers.php"?>
    <!-- End Switcher -->
<?php
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username='$username' ";
    $select_user_profile_query = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_array($select_user_profile_query)){
        $user_id=$row['user_id'];
        $username=$row['username'];
        $user_password=$row['user_password'];
        $user_firestname=$row['user_firestname'];
        $user_lastname=$row['user_lastname'];
        $user_email=$row['user_email'];
//            $user_iamge=$row['user_iamge'];
        $user_role=$row['user_role'];
    }
}

if (isset($_POST['update_profile'])){
        $username=$_POST['username'];
        $user_password=$_POST['user_password'];
        $user_firestname=$_POST['user_firestname'];
        $user_lastname=$_POST['user_lastname'];
        $user_email=$_POST['user_email'];
        $user_role=$_POST['user_role'];

        $query = "UPDATE users SET `username`='$username',
`user_password`='$user_password',`user_firestname`='$user_firestname',`user_lastname`='$user_lastname',
`user_email`='$user_email',`user_role`='$user_role' WHERE user_id = $user_id ";
        $update_user_id = mysqli_query($connection,$query);


}

?>
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

                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="user_firestname">First Name</label>
                        <input value="<?php echo $user_firestname?>" type="text" class="form-control" name="user_firestname">
                    </div>
                    <div class="form-group">

                        <div class="form-group">
                            <label for="user_lastname">Last Name</label>
                            <input value="<?php echo $user_lastname?>"  type="text" class="form-control" name="user_lastname">
                        </div>
                        <!--        <div class="form-group">-->
                        <!--            <label for="product_image">Product Image</label>-->
                        <!--            <input type="file"  name="product_image">-->
                        <!--        </div>-->
                    </div>
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input value="<?php echo $username?>"  type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email </label>
                        <input  value="<?php echo $user_email?>" type="email" class="form-control" name="user_email">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Password </label>
                        <input  value="<?php echo $user_password?>" type="password" class="form-control" name="user_password">
                    </div>
                    <div class="form-group">
                        <select name="user_role">
                            <?php
                            if($user_role == 'admin'){
                                echo"<option value='subscriber'>Subscriber</option>";
                            }else{
                                echo"<option value='admin'>Admin</option>";
                            }
                            ?>
                            <option   value="<?php echo $user_id?>"><?php echo $user_role?></option>


                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary btn-lg" type="submit" name="update_profile" value="Update Profile User">
                    </div>

                </form>

                <!-- ROW-3 CLOSED -->

            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>



<?php include "include/footer.php"?>