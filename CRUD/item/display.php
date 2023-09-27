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
    <title>Items</title>
</head>
<body>
    <div class="container">
        <button style="background-color:blue; color:black; width:150px; height:40px;" ><a href="user.php" style = "color:black">Add Item</a>
    </button>
    <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "Select id,name from items";
$result = mysqli_query($con,$sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id']; 
        $name = $row['name'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td><a href="item.php?itemid='.$id.'">'.$name.'</a></td>
        <td>
        <button style="background-color:green; color:black; width:150px; height:40px;"><a href="update.php?updateid='.$id.'" style="color:black">Update</a></button>
        <button style="background-color:red; color:black; width:150px; height:40px;"><a href="delete.php?deleteid='.$id.'" style="color:black">Delete</a></button>
        </td>
    </tr>';
}
}

?>
</tbody>
</table>
</div>
</body>
</html>