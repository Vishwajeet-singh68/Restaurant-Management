<?php
include('conn.php');
$Name = $_POST['name'];
$Username = $_POST['username'];
$Email = $_POST['email'];
$Password =$_POST['password'];

$sql = "INSERT INTO signin (name,username,email,password)
     VALUES ('$Name','$Username','$Email','$Password')";
if (mysqli_query($conn, $sql)) {
//echo "New record has been added successfully !";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <div class="welcome">
        <h1>Welcome!!!</h1>
    </div>
    <div class="Email">
        <tr>
            <th>Name:</th>
            <td><?php echo $Name; ?></td><br>
        </tr>  
        <tr>
            <th>Username:</th>
            <td><?php echo $Username; ?></td><br>
        </tr>  
        <tr>
            <th>Email:</th>
            <td><?php echo $Email; ?></td><br>
        </tr>   
    </div>
</body>
</html>