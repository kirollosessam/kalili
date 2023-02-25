<?php
class admin_products{
    function selectProduct(){
        global $connection;
        $query = "SELECT * FROM product ORDER BY product_date DESC";
        $select_all_product = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_all_product)){
            $product_id = $row['product_id'];
            $product_category_id = $row['product_category_id'];
            $product_title = $row ['product_title'];
            $location = $row['location'];
            $location_link = substr($row['location_link'],0,30);

            $product_date=$row['product_date'];
            $centimetersMax = $row['centimetersMax'];
            $centimetersMin = $row['centimetersMin'];
            $gragh = $row['gragh'];

            $product_image=$row['product_image'];
            $product_image1=$row['product_image1'];
            $product_image_2=$row['product_image_2'];
            $product_image_3=$row['product_image_3'];
            $product_image_4=$row['product_image_4'];
            $product_image_5=$row['product_image_5'];
            $product_image_6=$row['product_image_6'];

            $product_content=  substr($row['product_content'] , 0,20);
            $product_tags=$row['product_tags'];
            $product_status=$row['product_status'];
            $PropertyAmenities=$row['PropertyAmenities'];
            $PropertyAmenities1=$row['PropertyAmenities1'];
            $PropertyAmenities2=$row['PropertyAmenities2'];
            $PropertyAmenities3=$row['PropertyAmenities3'];
            $PropertyAmenities4=$row['PropertyAmenities4'];
            $PropertyAmenities5=$row['PropertyAmenities5'];
            $PropertyAmenities6=$row['PropertyAmenities6'];
            $PropertyAmenities7=$row['PropertyAmenities7'];
            $PropertyAmenities8=$row['PropertyAmenities8'];
            $PropertyAmenities9=$row['PropertyAmenities9'];

echo"<tr>" ;
echo"<th>$product_id</th>";
$query = "SELECT * FROM categories WHERE cat_id = $product_category_id";
$select_category_id = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_category_id)) {
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];
echo"<th>$cat_title</th>";
}
echo"<th>$product_title</th>";
echo"<th>$location</th>";
echo"<th><a href='$location_link'>$location_link</a></th>";
echo"<th>$product_date</th>";
echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\" src='../assets/images/biulding/$product_image' alt='image'></th>";
echo"<th><img width='100' class=\"avatar avatar-xxl bradius cover-image\"  src='../assets/images/biulding/$product_image1' alt='image1'></th>";
echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\"  src='../assets/images/biulding/$product_image_2' alt='image2'></th>";
echo"<th><img width='100' class=\"avatar avatar-xxl bradius cover-image\"  src='../assets/images/biulding/$product_image_3' alt='image3'></th>";
echo"<th><img width='100' class=\"avatar avatar-xxl bradius cover-image\"  src='../assets/images/biulding/$product_image_4' alt='image4'></th>";
echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\"  src='../assets/images/biulding/$product_image_5' alt='image5'></th>";
echo"<th><img width='100' class=\"avatar avatar-xxl bradius cover-image\"  src='../assets/images/biulding/$product_image_6' alt='image6'></th>";
echo"<th>$product_content</th>";
echo"<th>$centimetersMax</th>";
echo"<th>$centimetersMin</th>";

echo"<th>$gragh</th>";
echo"<th>$PropertyAmenities</th>";
echo"<th>$PropertyAmenities1</th>";
echo"<th>$PropertyAmenities2</th>";
echo"<th>$PropertyAmenities3</th>";
echo"<th>$PropertyAmenities4</th>";
echo"<th>$PropertyAmenities5</th>";
echo"<th>$PropertyAmenities6</th>";
echo"<th>$PropertyAmenities7</th>";
echo"<th>$PropertyAmenities8</th>";
echo"<th>$PropertyAmenities9</th>";
echo"<th>$product_tags</th>";
echo" <th>$product_status</th>";
echo"<th class=\"btn-list\"><a class=\" btn btn-info\" href='product.php?source=edit_product&p_id=$product_id'>Edite</a></th>";
echo"<th class=\"btn-list\"><a class=\" btn btn-danger\" href='view_all_product.php?delete=$product_id'>Delete</a></th>";
echo"</tr>";
}
}
/*end select product*/

/*Start insert product*/

    function insertProduct(){
        if(isset($_POST['create_product'])){
            global $connection;
            $product_title = $_POST['product_title'];
            $product_category_id = $_POST['product_category_id'];
            $location = $_POST['location'];
            $location_link = $_POST['location_link'];
            $product_author = $_POST['product_author'];
            $product_content = $_POST['product_content'];

            $centimetersMax = $_POST['centimetersMax'];
            $centimetersMin = $_POST['centimetersMin'];
            $badroom = $_POST['badroom'];

            $gragh = $_POST['gragh'];

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

            $product_tags = $_POST['product_tags'];
            $product_status = $_POST['product_status'];

            $product_date = date('y-m-d');

            $product_image =$_FILES['product_image']['name'];
            $product_image_tmp =$_FILES['product_image']['tmp_name'];
            $folder= '../assets/images/biulding/' ;
            move_uploaded_file($product_image_tmp,$folder.$product_image);

            $product_image1 = $_FILES['product_image1']['name'];
            $product_image1_temp = $_FILES['product_image1']['tmp_name'];
            $folder= '../assets/images/inside-Build/' ;
            move_uploaded_file($product_image1_temp,$folder.$product_image1);

            $product_image_2 = $_FILES['product_image_2']['name'];
           $product_image_2_temp = $_FILES['product_image_2']['tmp_name'];
            $folder= '../assets/images/inside-Build/' ;
            move_uploaded_file($product_image_2_temp,$folder.$product_image_2);

            $product_image_3 = $_FILES['product_image_3']['name'];
            $product_image_3_temp = $_FILES['product_image_3']['tmp_name'];
            $folder= '../assets/images/inside-Build/' ;
            move_uploaded_file($product_image_3_temp,$folder.$product_image_3);

            $product_image_4 = $_FILES['product_image_4']['name'];
            $product_image_4_temp = $_FILES['product_image_4']['tmp_name'];
            $folder= '../assets/images/inside-Build/' ;
            move_uploaded_file($product_image_4_temp,$folder.$product_image_4);

            $product_image_5 = $_FILES['product_image_5']['name'];
            $product_image_5_temp = $_FILES['product_image_5']['tmp_name'];
            $folder= '../assets/images/Build-3D/' ;
            move_uploaded_file($product_image_5_temp,$folder.$product_image_5);

            $product_image_6 = $_FILES['product_image_6']['name'];
            $product_image_6_temp = $_FILES['product_image_6']['tmp_name'];
            $folder= '../assets/images/Build-3D/' ;
            move_uploaded_file($product_image_6_temp,$folder.$product_image_6);

            $query = "INSERT INTO product (`product_category_id`, `product_title`, `location`,`location_link`, `product_author`, `product_date`,
             `product_image`, `product_image1`, `product_image_2`, `product_image_3`,`product_image_4`,`product_image_5`,`product_image_6`, `product_content`, `product_tags`,
               `product_status`,`centimetersMax`,`centimetersMin`, `badroom`, `gragh`, `PropertyAmenities`, `PropertyAmenities1`,
                `PropertyAmenities2`, `PropertyAmenities3`, `PropertyAmenities4`, `PropertyAmenities5`, `PropertyAmenities6`, `PropertyAmenities7`, `PropertyAmenities8`, `PropertyAmenities9` ) 
                VALUES('$product_category_id','$product_title','$location','$location_link',
              '$product_author',CURRENT_TIMESTAMP,'$product_image','$product_image1','$product_image_2','$product_image_3','$product_image_4','$product_image_5','$product_image_6','$product_content',
              '$product_tags','$product_status', '$centimetersMax','$centimetersMin', '$badroom','$gragh','$PropertyAmenities','$PropertyAmenities1','$PropertyAmenities2','$PropertyAmenities3','$PropertyAmenities4','$PropertyAmenities5','$PropertyAmenities6','$PropertyAmenities7','$PropertyAmenities8','$PropertyAmenities9' )";
                $create_product_post = mysqli_query($connection,$query);
            if ($create_product_post){
                echo "<div class=\"alert alert-success\" role=\"alert\">Success Update Data</div>";
            }else{
                echo "<div class=\"alert alert-danger\" role=\"alert\">OPPPSSSEE Update Data</div>";
            }

        }

    }
    function delete_product(){
        if(isset($_GET['delete'])){
            global $connection;
            $product_delete_id = $_GET['delete'];
            $query = "DELETE FROM product WHERE product_id =$product_delete_id ";
            $delete_product = mysqli_query($connection,$query);
            if ($delete_product){
                echo "<div class=\"alert alert-success\" role=\"alert\">Success Update Data</div>";
                header("Location: view_all_product.php");
            }else{
                echo "<div class=\"alert alert-danger\" role=\"alert\">OPPPSSSEE Update Data</div>";
            }
        }
        }
        function select_categry_product(){
             global $connection;
            $query = "SELECT * FROM categories";
            $select_category = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_category)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                echo "<option value=\" $cat_id\">$cat_title</option>";
            }
        }

    function select_build_sub(){
        global $connection;
        $query = "SELECT * FROM product";
        $select_sub = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_sub)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];

            echo "<option value=\" $product_id\">$product_title</option>";
        }
    }
}