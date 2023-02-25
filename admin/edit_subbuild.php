<?php
if(isset($_GET['sub_id'])){
$the_subbuild_id =  $_GET['sub_id'];
$query = "SELECT * FROM subbuild WHERE id=$the_subbuild_id ";
$select_all_product = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_all_product)) {
    $id = $row['id'];
    $id_build = $row['id_build'];
    $subname = $row['subname'];
    $subimage1 = $row['subimage1'];
    $subimage2 = $row['subimage2'];
    $subimage3 = $row['subimage3'];
    $subimage4 = $row['subimage4'];
    $subimage5 = $row['subimage5'];
    $subimage6 = $row['subimage6'];
    $space = $row['space'];
    $numberOfRooms = $row['numberOfRooms'];
    $numberOfBathroom = $row['numberOfBathroom'];
    $DressingRoom = $row['DressingRoom'];
    $Balcony = $row['Balcony'];
    $content = $row['content'];
}

if(isset($_POST['update_product'])){

    $id = $row['id'];
    $id_build = $row['id_build'];
    $subname = $row['subname'];
    $space = $row['space'];
    $numberOfRooms = $row['numberOfRooms'];
    $numberOfBathroom = $row['numberOfBathroom'];
    $DressingRoom = $row['DressingRoom'];
    $Balcony = $row['Balcony'];
    $content = $row['content'];

    $subimage1 =$_FILES['subimage1']['name'];
    $subimage1_tmp =$_FILES['subimage1']['tmp_name'];
    $folder= '../assets/images/Sub/' ;
    move_uploaded_file($subimage1_tmp,$folder.$subimage1);

    $subimage2 =$_FILES['subimage2']['name'];
    $subimage2_tmp =$_FILES['subimage2']['tmp_name'];
    $folder= '../assets/images/Sub/' ;
    move_uploaded_file($subimage2_tmp,$folder.$subimage2);

    $subimage3 =$_FILES['subimage3']['name'];
    $subimage3_tmp =$_FILES['subimage3']['tmp_name'];
    $folder= '../assets/images/Sub/' ;
    move_uploaded_file($subimage3_tmp,$folder.$subimage3);

    $subimage4 =$_FILES['subimage4']['name'];
    $subimage4_tmp =$_FILES['subimage4']['tmp_name'];
    $folder= '../assets/images/Sub/' ;
    move_uploaded_file($subimage4_tmp,$folder.$subimage4);

    $subimage5 =$_FILES['subimage5']['name'];
    $subimage5_tmp =$_FILES['subimage5']['tmp_name'];
    $folder= '../assets/images/Sub/' ;
    move_uploaded_file($subimage5_tmp,$folder.$subimage5);

    $subimage6 =$_FILES['subimage6']['name'];
    $subimage6_tmp =$_FILES['subimage6']['tmp_name'];
    $folder= '../assets/images/Sub/' ;
    move_uploaded_file($subimage6_tmp,$folder.$subimage6);





    if (empty($subimage1 || $subimage2 || $subimage3 || $subimage4 || $subimage5 || $subimage6)){
        $query = "SELECT * FROM subbuild WHERE id = $the_subbuild_id";
        $select_image = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_array($select_image)){
            $subimage1 = $row['subimage1'];
            $subimage2 = $row['subimage2'];
            $subimage3 = $row['subimage3'];
            $subimage4 = $row['subimage4'];
            $subimage5 = $row['subimage5'];
            $subimage6 = $row['subimage6'];
        }
    }




    $query = "UPDATE subbuild SET
`subname`='$subname',
`subimage1`='$subimage1',
`subimage2`='$subimage2',
`subimage3`='$subimage3',
`subimage4`='$subimage4',
`subimage5`='$subimage5',
`subimage6`='$subimage6',
`id_build`='$id_build',
`space`='$space',
`numberOfRooms`='$numberOfRooms',
`numberOfBathroom`='$numberOfBathroom',
`DressingRoom`='$DressingRoom',
`Balcony`='$Balcony',
`content`='$content' WHERE id = $the_subbuild_id";
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