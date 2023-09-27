//Team 19 Jay 1002068012 Sreelakshmi 1002046529

<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Details</title>
</head>
<body>
    <h1>Item Details</h1>
    <table class="table" border="1">
        <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
    <?php
        $id = $_GET['itemid'];
        $sql = "Select * from items where id = $id ";
        $result =  mysqli_query($con,$sql);
        
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id']; 
                $name = $row['name'];
                $price = $row['price'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$price.'</td>
                <tr>';
        }
    }
    ?>
    </tbody>
</table>
    <button><a href="display.php">Back</button>
</body>
</html>