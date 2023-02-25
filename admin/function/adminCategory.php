<?php

class adminCategory{
    /*insert Category  Start */
    function insertCategory(){
        global $connection;
        if(isset($_POST['submit'])){
            $cat_title = $_POST['cat_title'];

            $cat_image =$_FILES['cat_image']['name'];
            $cat_image_tmp =$_FILES['cat_image']['tmp_name'];
            $folder= '../assets/images/image_products/' ;
            move_uploaded_file($cat_image_tmp,$folder.$cat_image);


                $query = "INSERT INTO categories (`cat_title`, `cat_image`) VALUE ('$cat_title','$cat_image') ";
                $insert_category = mysqli_query($connection,$query);
                if($insert_category){
                    echo "<div class=\"alert alert-success\" role=\"alert\">Success Insert Data</div>";

            }
        }
    }
    /*insert Category  End */
    /*select Category  Start */
    function selectCategory(){
        global $connection;
        $query =  "SELECT * FROM categories";
        $select_category = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($select_category)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            $cat_image = $row['cat_image'];


            echo " <tr>
                  <th scope=\"row\">$cat_id</th>
                  <td>$cat_title</td>
                  <th><img width='100'  class='avatar avatar-xxl bradius cover-image' src='../assets/images/image_products/$cat_image' alt='image'></th>\"
                  <td><a href='categories.php?delete=$cat_id'>Delete</a></td>
                  <td><a href='categories.php?edit=$cat_id'>Edit</a></td>
                  </tr>";
        }
    }
    /*select Category  Start */
    /*Delete Category  Start */
    function deleteCategory(){
        global $connection;
        if(isset($_GET['delete'])){
            $the_cat_id = $_GET['delete'];
            $query = "DELETE FROM categories WHERE cat_id = $the_cat_id";
            $delete_category = mysqli_query($connection,$query);
            header("Location: categories.php");
        }
    }
    /*Delete Category  End */

    /*Edit Category  Start */
    function editSelectCategory(){
        global $connection;
        if(isset($_GET['edit'])){
            $cat_id = $_GET['edit'];
            $query =  "SELECT * FROM categories WHERE cat_id = $cat_id ";
            $editSelect_category = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($editSelect_category)){
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                $cat_image = $row['cat_image'];

        }
             if (isset ($cat_title)){
                 echo" <input value='$cat_title' class='form-control' type='text' name='cat_title'>";
                 echo"
                  <div class=\"form-group\">
                    <img width=\"100\" src=\"../assets/images/image_products/$cat_image\" alt=\"\">
                    <input type=\"file\" name=\"cat_image\">
                </div>
                 ";
            }
        }
    }
    /*Edit Category  End */
    /*Update Category  Start */
    function updateCategory(){
        global $connection;
        if(isset($_GET['edit'])){
           $the_cat_id = $_GET['edit'];

        if(isset($_POST['edit_category'])){
            $cat_title = $_POST['cat_title'];

            $cat_image = $_FILES['cat_image']['name'];
            $cat_image_temp = $_FILES['cat_image']['tmp_name'];
            $folder= '../assets/images/image_products/' ;
            move_uploaded_file($cat_image_temp,$folder.$cat_image);

            if (empty($cat_image)){
                $query = "SELECT * FROM product WHERE product_id = $the_cat_id";
                $select_image = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_array($select_image)){
                    $cat_image = $row['cat_image'];

                }
            }

            $query = "UPDATE `categories` SET `cat_title`='$cat_title',`cat_image`='$cat_image'
             WHERE cat_id = $the_cat_id ";
            $update_category = mysqli_query($connection,$query);
            if($update_category){
                echo "<div class=\"alert alert-success\" role=\"alert\">Success Update Data</div>";
            }
            }
        }
    }
    /*Update Category  end */
}







