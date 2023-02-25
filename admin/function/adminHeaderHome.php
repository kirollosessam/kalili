<?php

class adminHeaderHome{
    /*insert Category  Start */
    function insertHeader(){
        global $connection;
        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $ditels = $_POST['ditels'];

            $cat_image =$_FILES['imageHeader']['name'];
            $cat_image_tmp =$_FILES['imageHeader']['tmp_name'];
            $folder= '../assets/images/headers/' ;
            move_uploaded_file($cat_image_tmp,$folder.$cat_image);


                $query = "INSERT INTO header (`imageHeader`, `title`, `ditels`) VALUE ('$cat_image','$title','$ditels') ";
                $insert_category = mysqli_query($connection,$query);
                if($insert_category){
                    echo "<div class=\"alert alert-success\" role=\"alert\">Success Insert Data</div>";

            }
        }
    }
    /*insert Category  End */
    /*select Category  Start */
    function selectheaders(){
        global $connection;
        $query =  "SELECT * FROM header";
        $select_category = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($select_category)){
            $id = $row['id'];
            $title = $row['title'];
            $ditels = $row['ditels'];
            $imageHeader = $row['imageHeader'];


            echo " <tr>
                  <th scope=\"row\">$id</th>
                  <td>$title</td>
                  <td>$ditels</td>
                  <th><img width='100'  class='avatar avatar-xxl bradius cover-image' src='../assets/images/headers/$imageHeader' alt='image'></th>\"
                  <td><a href='controlHeader.php?delete=$id'>Delete</a></td>
                  <td><a href='controlHeader.php?edit=$id'>Edit</a></td>
                  </tr>";
        }
    }
    /*select Category  Start */
    /*Delete Category  Start */
    function deleteheaders(){
        global $connection;
        if(isset($_GET['delete'])){
            $the_id = $_GET['delete'];
            $query = "DELETE FROM header WHERE id= $the_id";
            $delete_category = mysqli_query($connection,$query);
            header("Location: controlHeader.php");
        }
    }
    /*Delete Category  End */
}







