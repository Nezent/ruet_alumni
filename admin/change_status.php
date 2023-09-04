<?php
    include_once 'db_connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "UPDATE alumni SET status=1 WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
            header('Location: alumni_list.php');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>