//Team 19 Jay 1002068012 Sreelakshmi 1002046529

<?php
include 'connect.php';
$id = $_GET['updateid'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];

    $sql = "update items set id=$id,name='$name' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:display.php');        
        //echo "Data Updated Successfully";
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
    <title>Update</title>
  </head>
  <body>
    <h1>Update</h1>
    <div class="container">
    <form method="post">
    <div class="mb-3">
    <label class="form-label"></label>
    <input type="text" class="form-control" name="name">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  </body>
</html>