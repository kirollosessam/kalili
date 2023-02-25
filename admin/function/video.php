<?php
class video{
    function insertvideo(){
        global $connection;
        if (isset($_POST['insertVideo'])){
            $video = $_POST['video'];
            $title = $_POST['title'];
            $query = "INSERT INTO video(`video`, `title`) VALUES ('$video','$title')";
            $insert = mysqli_query($connection,$query);
            if($insert){
                echo "<div class=\"alert alert-success\" role=\"alert\">Success Insert Data</div>";

            }
        }
    }
}