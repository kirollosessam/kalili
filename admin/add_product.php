
<?php
$insert_product = new admin_products();
$insert_product->insertProduct();

?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_title">Building Title</label>
        <input type="text" class="form-control" name="product_title">
    </div>
    <div class="form-group">
        <label for="Category">Category</label><br>
        <select name="product_category_id" id="product_category_id">

            <?php
            $select_category_product = new admin_products();
            $select_category_product->select_categry_product();
            ?>

        </select><br><br><br>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <label for="location_link">Location Link </label>
            <input type="text" class="form-control" name="location_link">
        </div>
        <div class="form-group">
            <label for="centimetersMax">Centimeters Max </label>
            <input type="text" class="form-control" name="centimetersMax">
        </div>
        <div class="form-group">
            <label for="centimetersMin">Centimeters Min </label>
            <input type="text" class="form-control" name="centimetersMin">
        </div>

        <div class="form-group">
            <label for="gragh">Gragh</label>
            <input type="text" class="form-control" name="gragh">
        </div>

        <div class="form-group">
            <label for="product_image">Main Building </label>
            <input type="file"  name="product_image">
        </div>
        <div class="form-group">
            <label for="product_image1">Inside Building </label>
            <input type="file" name="product_image1">
        </div>
        <div class="form-group">
            <label for="product_image_2">Inside Building  </label>
            <input type="file"  name="product_image_2">
        </div>
        <div class="form-group">
            <label for="product_image_3">Inside Building </label>
            <input type="file"  name="product_image_3">
        </div>
        <div class="form-group">
            <label for="product_image_4">Inside Building </label>
            <input type="file"  name="product_image_4">
        </div>
        <div class="form-group">
            <label for="product_image_5">Building Image 3D</label>
            <input type="file"  name="product_image_5">
        </div>
        <div class="form-group">
            <label for="product_image_6">Building Image 3D</label>
            <input type="file"  name="product_image_6">
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
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities1">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities2">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities3">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities4">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities5">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities6">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities7">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities8">
        </div>

        <div class="form-group">
            <label for="PropertyAmenities">Property Amenities :</label>
            <input type="text" class="form-control" name="PropertyAmenities9">
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_product" value="publicProduct">
        </div>

</form>