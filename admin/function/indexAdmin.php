<?php

class indexAdmin{
 public $product_counts;
    function CountPost(){
        global $connection;
        $query = "SELECT * FROM product";
        $select_all_product = mysqli_query($connection,$query);
        $product_counts = mysqli_num_rows($select_all_product);
        echo "   <h2 class=\"mb-0 number-font\">$product_counts</h2>";
    }
    function CountCategory(){
        global $connection;
        $query = "SELECT * FROM categories";
        $select_all_categories = mysqli_query($connection,$query);
        $categories_counts = mysqli_num_rows($select_all_categories);
        echo "   <h2 class=\"mb-0 number-font\">$categories_counts</h2>";
    }

    function CountSub(){
        global $connection;
        $query = "SELECT * FROM subbuild";
        $select_all_comments = mysqli_query($connection,$query);
        $comments_counts = mysqli_num_rows($select_all_comments);
        echo "   <h2 class=\"mb-0 number-font\">$comments_counts</h2>";
    }



}