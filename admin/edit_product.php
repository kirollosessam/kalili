<?php
if(isset($_GET['p_id'])){
$the_product_id =  $_GET['p_id'];
$query = "SELECT * FROM product WHERE product_id =$the_product_id ";
$select_all_product = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_all_product)) {
    $product_id = $row['product_id'];
    $product_category_id = $row['product_category_id'];
    $product_title = $row['product_title'];
    $location= $row['location'];
    $location_link  = $row['location_link'];
    $product_title = $row['product_title'];
    $product_date = $row['product_date'];

    $product_image = $row['product_image'];
    $product_image1 = $row['product_image1'];
    $product_image_2 = $row['product_image_2'];
    $product_image_3 = $row['product_image_3'];
    $product_image_3 = $row['product_image_4'];
    $product_image_3 = $row['product_image_5'];
    $product_image_3 = $row['product_image_6'];

    $product_content = $row['product_content'];
    $product_tags = $row['product_tags'];
    $product_status = $row['product_status'];
    $product_price = $row['product_price'];
    $product_price1 = $row['product_price1'];

    $product_content = $row['product_content'];
    $centimeters = $row['centimeters'];
    $badroom = $row['badroom'];
    $bathroom = $row['bathroom'];
    $gragh = $row['gragh'];

    $PropertyAmenities = $row['PropertyAmenities'];
    $PropertyAmenities1 = $row['PropertyAmenities1'];
    $PropertyAmenities2 = $row['PropertyAmenities2'];
    $PropertyAmenities3 = $row['PropertyAmenities3'];
    $PropertyAmenities4 = $row['PropertyAmenities4'];
    $PropertyAmenities5 = $row['PropertyAmenities5'];
    $PropertyAmenities6 = $row['PropertyAmenities6'];
    $PropertyAmenities7 = $row['PropertyAmenities7'];
    $PropertyAmenities8 = $row['PropertyAmenities8'];
    $PropertyAmenities9 = $row['PropertyAmenities9'];
}

if(isset($_POST['update_product'])){
    
    $product_category_id = $_POST['product_category_id'];
    $product_title = $_POST['product_title'];
    $location= $_POST['location'];
    $location_link  = $_POST['location_link'];
    $product_date = $_POST['product_date'];
    $product_content = $_POST['product_content'];
    $centimeters = $_POST['centimeters'];
    $badroom = $_POST['badroom'];
    $bathroom = $_POST['bathroom'];
    $gragh = $_POST['gragh'];

    $product_content = $_POST['product_content'];
    $product_status = $_POST['product_status'];
    $product_price = $_POST['product_price'];
    $product_price1 = $_POST['product_price1'];

    $PropertyAmenities = $_POST['PropertyAmenities'];
    $PropertyAmenities1 = $_POST['PropertyAmenities1'];
    $PropertyAmenities2 = $_POST['PropertyAmenities2'];
    $PropertyAmenities3 = $_POST['PropertyAmenities3'];
    $PropertyAmenities4 = $_POST['PropertyAmenities4'];
    $PropertyAmenities5 = $_POST['PropertyAmenities5'];
    $PropertyAmenities6 = $_POST['PropertyAmenities6'];
    $PropertyAmenities7 = $_POST['PropertyAmenities7'];
    $PropertyAmenities8 = $_POST['PropertyAmenities8'];
    $PropertyAmenities9 = $_POST['PropertyAmenities9'];

    $product_image =$_FILES['product_image']['name'];
    $product_image_tmp =$_FILES['product_image']['tmp_name'];
    $folder= '../assets/images/image_products/' ;
    move_uploaded_file($product_image_tmp,$folder.$product_image);
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image1_temp = $_FILES['product_image1']['tmp_name'];
    $folder= '../assets/images/image_products/' ;
    move_uploaded_file($product_image1_temp,$folder.$product_image1);
    $product_image_2 = $_FILES['product_image_2']['name'];
    $product_image_2_temp = $_FILES['product_image_2']['tmp_name'];
    $folder= '../assets/images/image_products/' ;
    move_uploaded_file($product_image_2_temp,$folder.$product_image_2);
    $product_image_3 = $_FILES['product_image_3']['name'];
    $product_image_3_temp = $_FILES['product_image_3']['tmp_name'];
    $folder= '../assets/images/image_products/' ;
    move_uploaded_file($product_image_3_temp,$folder.$product_image_3);
    $product_image_4 = $_FILES['product_image_4']['name'];
    $product_image_4_temp = $_FILES['product_image_4']['tmp_name'];
    $folder= '../assets/images/image_products/' ;
    move_uploaded_file($product_image_4_temp,$folder.$product_image_4);
    $product_image_5 = $_FILES['product_image_5']['name'];
    $product_image_5_temp = $_FILES['product_image_5']['tmp_name'];
    $folder= '../assets/images/image_products/' ;
    move_uploaded_file($product_image_5_temp,$folder.$product_image_5);
    $product_image_6 = $_FILES['product_image_6']['name'];
    $product_image_6_temp = $_FILES['product_image_6']['tmp_name'];
    $folder= '../assets/images/image_products/' ;
    move_uploaded_file($product_image_6_temp,$folder.$product_image_6);


    if (empty($product_image || $product_image1 || $product_image_2 || $product_image_3 || $product_image_4 || $product_image_5 || $product_image_6)){
        $query = "SELECT * FROM product WHERE product_id = $the_product_id";
        $select_image = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_array($select_image)){
            $product_image = $row['product_image'];
            $product_image1 = $row['product_image1'];
            $product_image_2 = $row['product_image_2'];
            $product_image_3 = $row['product_image_3'];
            $product_image_4 = $row['product_image_4'];
            $product_image_5 = $row['product_image_5'];
            $product_image_6 = $row['product_image_6'];
        }
    }




    $query = "UPDATE product SET
`product_category_id`='$product_category_id',
`location`='$location',
`location_link`='$location_link',
`product_title`='$product_title',
`product_date`='$product_date ',
`product_image`='$product_image',
`product_image1`='$product_image1',
`product_image_2`='$product_image_2',
`product_image_3`='$product_image_3',
`product_image_4`='$product_image_4',
`product_image_5`='$product_image_5',
`product_image_6`='$product_image_6',
`product_content`='$product_content',
`product_status`='$product_status',
`product_price`='$product_price',
`product_price1`='$product_price1',
`centimeters`='$centimeters',
`badroom`='$badroom',
`bathroom`='$bathroom',
`gragh`='$gragh',
`PropertyAmenities`='$PropertyAmenities',
`PropertyAmenities1`='$PropertyAmenities1',
`PropertyAmenities2`='$PropertyAmenities2',
`PropertyAmenities3`='$PropertyAmenities3',
`PropertyAmenities4`='$PropertyAmenities4',
`PropertyAmenities5`='$PropertyAmenities5',
`PropertyAmenities6`='$PropertyAmenities6',
`PropertyAmenities7`='$PropertyAmenities7',
`PropertyAmenities8`='$PropertyAmenities8',
`PropertyAmenities9`='$PropertyAmenities9' WHERE product_id = $the_product_id";
    $update_product = mysqli_query($connection,$query);
    if ($update_product){
        echo "<div class=\"alert alert-success\" role=\"alert\">Success Update Data</div>";
    }else{
        echo "<div class=\"alert alert-danger\" role=\"alert\">OPPPSSSEE Update Data</div>";
    }
}
?>

<form action=""  method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="product_title">Product Title</label>
        <input type="text" value="<?php echo $product_title;?>" class="form-control" name="product_title">
    </div>
    <div class="form-group">
        <select name="product_category_id" id="product_category_id">
            <?php

        $select_category_product = new admin_products();
        $select_category_product->select_categry_product();

            ?>


        </select>

    </div>
    <div class="form-group">
        <label for="location">Location</label>
        <input type="text" value="<?php echo $location;?>" class="form-control" name="location">
    </div>
    <div class="form-group">
        <label for="location_link">Location_link</label>
        <input type="text" value="<?php echo $location_link;?>" class="form-control" name="location_link">
    </div>




    <div class="form-group">
        <img width="100" src="../assets/images/image_products/<?php echo $product_image;?>" alt="">
        <input type="file" name="product_image">
    </div>
    <div class="form-group">
        <img width="100" src="../assets/images/image_products/<?php echo $product_image1;?>" alt="">
        <input type="file" name="product_image1">
    </div>
    <div class="form-group">
        <img width="100" src="../assets/images/image_products/<?php echo $product_image_2;?>" alt="">
        <input type="file" name="product_image_2">
    </div>
    <div class="form-group">
        <img width="100" src="../assets/images/image_products/<?php echo $product_image_3;?>" alt="">
        <input type="file" name="product_image_3">
    </div>
    <div class="form-group">
        <img width="100" src="../assets/images/image_products/<?php echo $product_image_4;?>" alt="">
        <input type="file" name="product_image_4">
    </div>
    <div class="form-group">
        <img width="100" src="../assets/images/image_products/<?php echo $product_image_5;?>" alt="">
        <input type="file" name="product_image_5">
    </div>
    <div class="form-group">
        <img width="100" src="../assets/images/image_products/<?php echo $product_image_6;?>" alt="">
        <input type="file" name="product_image_6">
    </div>
    <div class="form-group">
        <label for="product_content">Product Content</label>
        <textarea class="form-control" name="product_content" id="" cols="30" rows="10"><?php echo $product_content;?></textarea>
    </div>
    <div class="form-group">
        <label for="centimeters">Centimeters</label>
        <input type="text"  value="<?php echo $centimeters;?>" class="form-control" name="centimeters">
    </div>

    <div class="form-group">
        <label for="badroom">Bad Room</label>
        <input type="text"  value="<?php echo $badroom;?>" class="form-control" name="badroom">
    </div>

    <div class="form-group">
        <label for="bathroom">Bath Room</label>
        <input type="text"  value="<?php echo $bathroom;?>" class="form-control" name="bathroom">
    </div>

    <div class="form-group">
        <label for="gragh">Graph</label>
        <input type="text"  value="<?php echo $gragh;?>" class="form-control" name="gragh">
    </div>

    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities;?>" class="form-control" name="PropertyAmenities">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities1;?>" class="form-control" name="PropertyAmenities1">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities2;?>" class="form-control" name="PropertyAmenities2">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities3;?>" class="form-control" name="PropertyAmenities3">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities4;?>" class="form-control" name="PropertyAmenities4">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities5;?>" class="form-control" name="PropertyAmenities5">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities6;?>" class="form-control" name="PropertyAmenities6">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities7;?>" class="form-control" name="PropertyAmenities7">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities8;?>" class="form-control" name="PropertyAmenities8">
    </div>
    <div class="form-group">
        <label for="PropertyAmenities">Property Amenities</label>
        <input type="text"  value="<?php echo $PropertyAmenities9;?>" class="form-control" name="PropertyAmenities9">
    </div>


    <label for="product_status">Product Status</label>
    <div class="form-group">
        
    <select name="product_status" id="">
        <option value='1'><?php echo $product_status;?></option>
        <?php
        if($product_status == '1'){
            echo "<option value='0'>0</option>";
        }else{
            echo "<option value='1'>1</option>";
        }
        ?>
    </select>
    
    </div>
    <div class="form-group">
        <label for="product_price">Product Price</label>
        <input type="text" value="<?php echo $product_price;?>"  class="form-control" name="product_price">
    </div>
    <div class="form-group">
        <label for="product_price1">Product Price1</label>
        <input type="text" value="<?php echo $product_price1;?>"  class="form-control" name="product_price1">
    </div>
    <div class="form-group">
        <input class="btn btn-primary"   type="submit" name="update_product" value="Update Product">
    </div>

</form>
<?php }?>