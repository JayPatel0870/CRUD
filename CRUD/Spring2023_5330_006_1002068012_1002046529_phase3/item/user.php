//Team 19 Jay 1002068012 Sreelakshmi 1002046529

<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sql = "insert into items (name,price) values('$name',$price)";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:display.php');        
        //echo "Data Inserted Successfully";
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Items</title>
  </head>
  <body>
    <h1>Insert</h1>
    <div class="container">
    <form method="post">
    <div class="mb-3">
    <label class="form-label"></label>
    Name
    <input type="text" class="form-control" name="name">
    Price
    <input type="text" class="form-control" name="price">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>