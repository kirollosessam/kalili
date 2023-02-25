<?php
class adminComments
{
    function selectComments()
    {
        global $connection;
        $query = "SELECT * FROM comments ORDER BY comment_date ASC";
        $select_all_comments = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_comments)) {
            $comment_id = $row['comment_id'];
            $comment_product_id = $row['comment_product_id'];
            $comment_author = $row['comment_author'];
            $comment_email = $row['comment_email'];
            $comment_content = $row['comment_content'];
            $comment_status = $row['comment_status'];
            $comment_date = $row['comment_date'];
            echo "<tr>";
            echo "<th>$comment_id</th>";
            echo "<th>$comment_author</th>";
            echo "<th>$comment_content</th>";
            echo "<th>$comment_email</th>";
            // echo " <th>$comment_status</th>";


            $query = "SELECT * FROM product WHERE product_id = $comment_product_id";
            $select_title_comment = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_title_comment)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                echo " <th><a href='../productshop.php?p_id=$product_id'>$product_title</a></th>";
            }


            echo " <th>$comment_date</th>";
            // echo "<th><a href='comments.php?approve=$comment_id'>Approve</a></th>";
            // echo "<th><a href='comments.php?unapprove=$comment_id''>UnApprove</a></th>";
            echo "<th><a href='comments.php?delete=$comment_id'>Delete</a></th>";

            echo "</tr>";
        }
    }

    function deleteComments()
    {
        global $connection;
        if (isset($_GET['delete'])) {
            $delete_comment_id = $_GET['delete'];
            $query = "DELETE  FROM comments WHERE comment_id = $delete_comment_id ";
            $delete_comments = mysqli_query($connection, $query);
            if ($delete_comments) {

                echo "<div class=\"alert alert-success\" role=\"alert\">Success Delete Massege</div>";

            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">OPPPSSSEE Delete Massege</div>";

            }

        }
    }

    function unApprove()
    {
        global $connection;
        if (isset($_GET['unapprove'])) {
            $the_comment_id_unapprove = $_GET['unapprove'];
            $query = "UPDATE comments SET comment_status = 'unapprove' WHERE comment_id = $the_comment_id_unapprove ";
            $unapprove_comments = mysqli_query($connection, $query);
            header("Location: comments.php");
        }

    }
    function approve()
    {
        global $connection;
        if (isset($_GET['approve'])) {
            $the_comment_id_approve = $_GET['approve'];
            $query = "UPDATE comments SET comment_status = 'approve' WHERE comment_id = $the_comment_id_approve  ";
            $approve_comments = mysqli_query($connection, $query);
            header("Location: comments.php");
        }

    }
}