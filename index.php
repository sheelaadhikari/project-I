<?php
$host = "mariadb";
$user = "testuser";
$pass = "testpassword";
$db = "mydb";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




$sql = "SELECT *
FROM article
 WHERE id = " . $_GET['id'];        
$results = mysqli_query($conn, $sql);
if($results === false){
echo mysqli_error($conn);
}
else {
$article = mysqli_fetch_assoc($results);             
}
?>        
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Blog</title>
</head>
<body>
<h1>My Blog</h1>
<?php if($article === null): ?>
        <p> No articles found. </p>
        <?php else: ?>

        <h2> <?= $article['title']; ?></h2>
        <p> <?= $article['content']; ?></p>
        

<?php endif; ?>
</body>
</html>