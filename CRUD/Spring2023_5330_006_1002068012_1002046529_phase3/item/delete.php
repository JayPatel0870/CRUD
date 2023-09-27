//Team 19 Jay 1002068012 Sreelakshmi 1002046529

<?php

include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from items where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    } 
}

?>