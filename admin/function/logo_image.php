<?php
class logo_image{
    function insertLogo(){
        global $connection;

    if(isset($_POST['insert_logo'])){

        $product_image =$_FILES['image_logo']['name'];
        $product_image_tmp =$_FILES['image_logo']['tmp_name'];
        $folder= '../assets/images/logo/' ;
        move_uploaded_file($product_image_tmp,$folder.$product_image);
if ($product_image == "" || empty($product_image)){

    echo "<div class=\"alert alert-danger\" role=\"alert\">OPPPSSSEE Update empty image</div>";
}else{
    $query =  "INSERT INTO logo (`logo_image`)VALUES('$product_image') ";
    $insert_image = mysqli_query($connection,$query);

        if ($insert_image){
            echo "<div class=\"alert alert-success\" role=\"alert\">Success Update image</div>";
        }else{
            echo "<div class=\"alert alert-danger\" role=\"alert\">OPPPSSSEE Update image</div>";
        }
}

        }

}
}