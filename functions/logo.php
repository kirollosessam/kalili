<?php
 class logo {
     function selectLogo(){
         global $connection;
         $query = "SELECT * FROM logo ORDER BY image_date DESC";
         $select_logo = mysqli_query($connection,$query);
         $row = mysqli_fetch_assoc($select_logo);
         $logo_image = $row['logo_image'];
         echo "
                 <img src='assets/images/logo/$logo_image' alt=\"logo\" width=\"99\" height=\"45\" />
                    ";

     }
 }