<?php
class adminUsers{
    function selectUsers(){
        global $connection;
        $query = "SELECT * FROM users";
        $select_users = mysqli_query($connection ,$query);
        while($row = mysqli_fetch_assoc($select_users)){
            $user_id=$row['user_id'];
            $username=$row['username'];
            $user_password=$row['user_password'];
            $user_firestname=$row['user_firestname'];
            $user_lastname=$row['user_lastname'];
            $user_email=$row['user_email'];
//            $user_iamge=$row['user_iamge'];
            $user_role=$row['user_role'];
            echo "<tr>";
            echo "<td>$user_id</td>";
            echo "<td>$username</td>";
            echo "<td>$user_password</td>";
            echo "<td>$user_firestname</td>";
            echo "<td>$user_lastname</td>";
            echo "<td>$user_email</td>";
//            echo "<td>$user_iamge</td>";
            echo "<td>$user_role</td>";
            echo"<th class=\"btn-list\"><a class=\" btn btn-info\" href='users.php?admin=$user_id'>Admin</a></th>";
            echo"<th class=\"btn-list\"><a class=\" btn btn-info\" href='users.php?subscriber=$user_id'>Subscriber</a></th>";
            echo"<th class=\"btn-list\"><a class=\" btn btn-info\" href='users.php?source=edit_user&edit_user=$user_id'>Edit</a></th>";
            echo"<th class=\"btn-list\"><a class=\" btn btn-danger\" href='users.php?delete={$user_id}'>Delete</a></th>";
            echo "<tr>";
        }
    }

    function insertUsers(){
        global$connection;
        if(isset($_POST['create_user'])){
            $username=$_POST['username'];
            $user_password=$_POST['user_password'];
            $user_firestname=$_POST['user_firestname'];
            $user_lastname=$_POST['user_lastname'];
            $user_email=$_POST['user_email'];
//            $user_iamge=$_POST['user_iamge'];
            $user_role=$_POST['user_role'];
    $query = "INSERT INTO users 
    ( `username`, `user_password`, `user_firestname`,
     `user_lastname`, `user_email`, 
      `user_role`)VALUES('$username','$user_password',
      '$user_firestname','$user_lastname','$user_email',
      '$user_role')";
    $insqerusers = mysqli_query($connection,$query);
            if($insqerusers){
                echo "<div class=\"alert alert-success\" role=\"alert\">Success Insert User</div>";
            }
    }

    }
    function select_role_users(){
        $query = "SELECT * FROM users";
        global $connection;
        $select_category = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_category)) {
            $user_id = $row['user_id'];
            $user_role = $row['user_role'];
            echo "<option value=\" $user_id\">$user_role</option>";
        }
    }

    function delete_users(){
        global $connection;
        if(isset($_GET['delete'])){
         $delete_user_id  = $_GET['delete'];
        $query = "DELETE  FROM users WHERE user_id = $delete_user_id";
        $select_category = mysqli_query($connection, $query);
            header("Location= users.php");

        }
        }
    function Admin()
    {
        global $connection;
        if (isset($_GET['admin'])) {
            $the_user_id_admin = $_GET['admin'];
            $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id_admin  ";
            $unapprove_admin = mysqli_query($connection, $query);
            header("Location: users.php");
        }

    }
    function Subscriber()
    {
        global $connection;
        if (isset($_GET['subscriber'])) {
            $the_user_id_subscriber = $_GET['subscriber'];
            $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id_subscriber  ";
            $approve_subscriber = mysqli_query($connection, $query);
            header("Location: users.php");
        }

    }


}
