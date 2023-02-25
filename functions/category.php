<?php
class  category{
    function selectCategory (){
        global $connection;
        $query = "SELECT * FROM categories ORDER BY cat_id LIMIT 0,2 ";
        $select_category = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($select_category)){
            $id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            echo "
            <li class=\"border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all\">
               <a href=\"Project.php?catid=$id\" class=\"font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-secondary hover:text-white text-center my-[-1px] rounded-b-[12px]\">$cat_title</a>
            </li>
            ";

        }
    }
    function selectBuildsCategory(){
       global $connection;
       if (isset($_GET['catid'])){
           $catid = $_GET['catid'];
           $query = "SELECT * FROM product WHERE product_category_id = $catid  ";
           $select_build_category = mysqli_query($connection,$query);
           while ($row = mysqli_fetch_assoc($select_build_category)){
               $product_id  =$row['product_id'] ;
               $product_title =$row['product_title'] ;
               $product_image =$row['product_image'] ;
               echo " 
                     <div class=\"relative group\">
                        <a href=\"buildingdetails.php?id=$product_id\" class=\"block\">
                            <img src=\"assets/images/biulding/$product_image\" class=\"w-full h-full block mx-auto rounded-[6px_6px_0px_0px]\" loading=\"lazy\" width=\"270\" height=\"290\" alt=\"Sale Property\">
                            <div class=\"drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]\">
                                <h3 class=\"font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]\">$product_title<span class=\"text-secondary group-hover:text-primary\">.</span> </h3>
                                <p class=\"font-light text-tiny\">$product_id  </p>
                            </div>
                        </a>
                    </div>";

           }
       }
}
}