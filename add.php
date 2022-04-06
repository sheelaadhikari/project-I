<?php
$host = "mariadb";
$user = "testuser";
$pass = "testpassword";
$db = "mydb";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully dfdfgf";
} catch (PDOException $e) {
    echo "Connection failed: \n" . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="add.php" method="post">
        <div class="imgcontainer">
            <img src="/avatar.jpeg" alt="Avatar" class="avatar">
        </div>

        <div class="ad-details">
        <label>Username : </label>
        <input type="text" placeholder="Enter Username" name="username" required><br><br>

        <label>Id : </label>
        <input type="number" placeholder="Id NUmber" name="id" required><br><br>

        <label>Title : </label>
        <input type="text area" placeholder="Enter Title" name="title" required><br><br>

        <label>Product Name : </label>
        <input type="text area" placeholder="Enter Product Name" name="Product name" required><br><br>

        <label>Price: </label>
        <input type="Number" placeholder="Enter Price" name="price" required><br><br>

        <label>Valid-upto : </label>
        <input type="date" name="valid-upto" max="2023-12-31" required><br><br>

        <!-- <label>Contact-no : </label>
        <input type="tel" name="contact-no" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br> -->

        <label>Location : </label>
        <input type="teXT" placeholder="Enter location" name="location" required><br><br>

        <button type="submit" value="submit">submit</button>
        </div>

    </form>
</body>

</html>

<?php
if(isset($_POST)){
    echo $_POST['title']."<br/>",$_POST['username']."<br/>",$_POST['id']."<br/>",$_POST['Product Name']."<br/>",$_POST['price'] ."<br/>",$_POST['valid-upto']."<br/>",$_POST['location']."<br/>";
   

  
 
    
}
?>





