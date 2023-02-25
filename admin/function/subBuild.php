<?php
class subBuild{
    function insertSubBuild(){
        global $connection;
        if (isset($_POST['sub_build'])){

            $subName = $_POST['subname'];
            $id_build = $_POST['id_build'];
            $space = $_POST['space'];
            $numberOfRooms = $_POST['numberOfRooms'];
            $numberOfBathroom = $_POST['numberOfBathroom'];
            $DressingRoom = $_POST['DressingRoom'];
            $Balcony = $_POST['Balcony'];
            $content = $_POST['content'];

            $subImage1 =$_FILES['subimage1']['name'];
            $subImage1_tmp =$_FILES['subimage1']['tmp_name'];
            $folder= '../assets/images/Sub/' ;
            move_uploaded_file($subImage1_tmp,$folder.$subImage1);

            $subImage2 =$_FILES['subimage2']['name'];
            $subImage2_tmp =$_FILES['subimage2']['tmp_name'];
            $folder= '../assets/images/Sub/' ;
            move_uploaded_file($subImage2_tmp,$folder.$subImage2);

            $subImage3 =$_FILES['subimage3']['name'];
            $subImage3_tmp =$_FILES['subimage3']['tmp_name'];
            $folder= '../assets/images/Sub/' ;
            move_uploaded_file($subImage3_tmp,$folder.$subImage3);

            $subImage4 =$_FILES['subimage4']['name'];
            $subImage4_tmp =$_FILES['subimage4']['tmp_name'];
            $folder= '../assets/images/Sub/' ;
            move_uploaded_file($subImage4_tmp,$folder.$subImage4);

            $subImage5 =$_FILES['subimage5']['name'];
            $subImage5_tmp =$_FILES['subimage5']['tmp_name'];
            $folder= '../assets/images/Sub/' ;
            move_uploaded_file($subImage5_tmp,$folder.$subImage5);

            $subImage6 =$_FILES['subimage6']['name'];
            $subImage6_tmp =$_FILES['subimage6']['tmp_name'];
            $folder= '../assets/images/Sub/' ;
            move_uploaded_file($subImage6_tmp,$folder.$subImage6);

            $query = "INSERT INTO `subbuild` (`subname`, `subimage1`, `subimage2`,`subimage3`,`subimage4`,`subimage5`,`subimage6`,`id_build`, `space`, `numberOfRooms`, `numberOfBathroom`, `DressingRoom`, `Balcony`,`content`)
            VALUES ('$subName','$subImage1','$subImage2','$subImage3','$subImage4','$subImage5','$subImage6','$id_build','$space','$numberOfRooms','$numberOfBathroom','$DressingRoom','$Balcony','$content') ";
            $insertSubBuild = mysqli_query($connection,$query);
            if($insertSubBuild){
            echo"done";
            }
        }
       }
       function viewSubBuild(){
        global $connection;
           $query = "SELECT * FROM subbuild ";
           $selectSubBuild = mysqli_query($connection,$query);
           while ($row = mysqli_fetch_assoc($selectSubBuild)){
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

               echo"<tr>" ;
               echo"<th>$subname</th>";
               $query = "SELECT * FROM product WHERE product_id=$id_build ";
               $select_category_id = mysqli_query($connection,$query);
               while($row = mysqli_fetch_assoc($select_category_id)) {
                   $product_title = $row['product_title'];
                   echo"<th>$product_title</th>";

               }
               echo"<th>$space</th>";
               echo"<th>$numberOfRooms</th>";
               echo"<th>$numberOfBathroom</th>";
               echo"<th>$DressingRoom</th>";
               echo"<th>$Balcony</th>";
               echo"<th>$content</th>";
               echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\" src='../assets/images/Sub/$subimage1' alt='image'></th>";
               echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\" src='../assets/images/Sub/$subimage2' alt='image'></th>";
               echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\" src='../assets/images/Sub/$subimage3' alt='image'></th>";
               echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\" src='../assets/images/Sub/$subimage4' alt='image'></th>";
               echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\" src='../assets/images/Sub/$subimage5' alt='image'></th>";
               echo"<th><img width='100'  class=\"avatar avatar-xxl bradius cover-image\" src='../assets/images/Sub/$subimage6' alt='image'></th>";
               echo"<th class=\"btn-list\"><a class=\" btn btn-info\" href='product.php?source=edit_subbuild&sub_id=$id'>Edite</a></th>";
               echo"<th class=\"btn-list\"><a class=\" btn btn-danger\" href='view_all_sub_Build.php?delete=$id'>Delete</a></th>";
           }
       }
}