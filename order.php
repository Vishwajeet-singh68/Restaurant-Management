<?php
include('conn.php');
$item=$_POST['item'];
$quantity=$_POST['quantity'];
$Name=$_POST['name'];
$number=$_POST['number'];

$sql = "INSERT INTO orders (item,quantity,name,number)
     VALUES ('$item','$quantity','$Name','$number')";
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
    <title>Order Page</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div class="container">
      <section>
        <h1>Welcome to GLA Canteen!</h1>
        <p>_____________________________________ORDER HERE____________________________________</p>
      </section>
      <section>
        <h2>Order Form</h2>
        <form action="order.php" method="post">
          <label for="item">Select an item:</label>
          <select id="item" name="item">
            <option value="Chicken-Biryani">Chicken-Biryani</option>
            <option value="Butter-Chicken">Butter-Chicken</option>
            <option value="Chilli-Fish">Chilli-Fish</option>
            <option value="Naan">Naan</option>
            <option value="Jeera-Rice">Jeera-Rice</option>
            <option value="Dal-Makhni">Dal-Makhni</option>
            <option value="Mushroom-Manchurian">Mushroom-Manchurian</option>
            <option value="Veg-Biryani">Veg-Biryani</option>
            <option value="Litti-Chokha">Litti-Chokha</option>
            <option value="Dosa">Dosa</option>
            <option value="Phaluda">Phaluda</option>
            <option value="Rasmalai">Rasmalai</option>
          </select>
          <br>
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
          <br>
          <label>Extras:</label>
          <input type="checkbox" id="cheese" name="cheese" value="cheese">
          <label for="cheese">Extra Cheese</label>
          <input type="checkbox" id="sauce" name="sauce" value="sauce">
          <label for="sauce">Extra Sauce</label>
          <br>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <br>
          <label for="number">Mobile Number:</label>
          <input type="number" id="number" name="number" required>
          <br>
          <input type="submit" value="Submit Order">
        </form>
      </section>
      <section>
        <h2>Order Summary</h2>
        <table>
          <thead>
            <tr>
              <th>Item</th>
              <th>Quantity</th>
              <th>Name</th>
              <th>Mobile Number</th>
            </tr>
            <tr>
              <th><?php echo $item;?></th>
              <th><?php echo $quantity;?></th>
              <th><?php echo $Name;?></th>
              <th><?php echo $number;?></th>
            </tr>
          </thead>
          <tbody>
            <!-- Here is where the order summary will be displayed -->
          </tbody>
        </table>
      </section>
    </div>
    <footer>
      <p>Gla canteen,Gla university Mathura</p>
    </footer>
  </body>
</html>