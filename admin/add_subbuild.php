
<?php

$insertSub = new subBuild();
$insertSub->insertSubBuild();

?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="subname">Sub Building Title</label>
        <input type="text" class="form-control" name="subname">
    </div>
    <div class="form-group">
        <label for="Category">Category</label><br>
        <select name="id_build" id="product_category_id">

            <?php
            $select_category_product = new admin_products();
            $select_category_product->select_build_sub();
            ?>

        </select><br><br><br>

        <div class="form-group">
            <label for="subimage1">Sub Building Image</label>
            <input type="file"  name="subimage1">
        </div>
        <div class="form-group">
            <label for="subimage2">Sub Building Image </label>
            <input type="file" name="subimage2">
        </div>

        <div class="form-group">
            <label for="subimage3">Sub Building Image </label>
            <input type="file" name="subimage3">
        </div>

        <div class="form-group">
            <label for="subimage4">Sub Building Image </label>
            <input type="file" name="subimage4">
        </div>

        <div class="form-group">
            <label for="subimage5">Sub Building Image </label>
            <input type="file" name="subimage5">
        </div>

        <div class="form-group">
            <label for="subimage6">Sub Building Image </label>
            <input type="file" name="subimage6">
        </div>

        <div class="form-group">
            <label for="product_content">Building Content</label>
            <textarea class="form-control" name="product_content" id="" cols="30" rows="10">

        </textarea>
        </div>
        <div class="form-group">
            <label for="product_tags">Building Tags</label>
            <input type="text" class="form-control" name="product_tags">
        </div>

        <label for="product_status">Building Status</label>
        <select name="product_status" id="">
            <option value='1'>1</option>";
            <option value='0'>0</option>";
        </select>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="sub_build" value="publicProduct">
        </div>

</form>