<?php
include('conn.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql = "INSERT INTO login (name,email,password)
     VALUES ('name','$email','$password')";
if (mysqli_query($conn, $sql)) {

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
            <th>Email:</th>
            <td><?php echo $name; ?></td><br>
        </tr>  
    </div>
</body>
</html>