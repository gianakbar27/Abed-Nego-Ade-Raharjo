<?php
session_start();
if (!isset($_POST['submit'])) {
    header("Location:index.php");
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" herf="https://stackpath.bootstrapcdn.com/font-awesome.min.css">
    <link rel="stylesheet" herf="style/style.css">
</head>
<body>
<div class="container-logout">
    <form action="controller/logout.php" method="POST" class=" login-username">
        <h1>welcome, <?php echo $_SESSION['nama'];?>!</h1>
        <div class ="input-group">
            <button type="submit" class ="btn">Logout</button>
        </div>
    </form>
    
</body>
</html>