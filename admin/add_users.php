
<form action="" method="post" enctype="multipart/form-data">
<?php
$insert = new adminUsers();
$insert->insertUsers();

?>
    <div class="form-group">
        <label for="user_firestname">First Name</label>
        <input type="text" class="form-control" name="user_firestname">
    </div>
    <div class="form-group">

        <div class="form-group">
            <label for="user_lastname">Last Name</label>
            <input type="text" class="form-control" name="user_lastname">
        </div>
<!--        <div class="form-group">-->
<!--            <label for="product_image">Product Image</label>-->
<!--            <input type="file"  name="product_image">-->
<!--        </div>-->
        </div>
        <div class="form-group">
            <label for="username">UserName</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="user_email">Email </label>
            <input type="email" class="form-control" name="user_email">
        </div>
    <div class="form-group">
        <label for="user_password">Password </label>
        <input type="password" class="form-control" name="user_password">
    </div>
    <div class="form-group">
        <select name="user_role">
        <option name="user_role" id="product_category_id">
        Select User Role
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>
        </select>
    </div>
        <div class="form-group">
            <input class="btn btn-primary btn-lg" type="submit" name="create_user" value="Add User">
        </div>

</form>