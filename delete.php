<?php
require_once ('connect.php');
    if(isset($_GET['id_delete'])){
        $id = $_GET['id_delete'];

        $sql = "delete from student where id ='$id'";

        $query = mysqli_query($conn,$sql);

        header('location: welcome.php');
    }
?>