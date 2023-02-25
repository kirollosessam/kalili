<?php
if(isset($_GET['edit_user'])){
$the_user_id = $_GET['edit_user'];
$query = "SELECT * FROM users WHERE user_id = $the_user_id";
$select_user_id = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($select_user_id)) {
$user_id=$row['user_id'];
$username=$row['username'];
$user_password=$row['user_password'];
$user_firestname=$row['user_firestname'];
$user_lastname=$row['user_lastname'];
$user_email=$row['user_email'];
$user_role=$row['user_role'];

    if(isset($_POST['edit_user'])){
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
        <input class="btn btn-primary btn-lg" type="submit" name="edit_user" value="Edit User">
    </div>

</form>
<?php }    }?>