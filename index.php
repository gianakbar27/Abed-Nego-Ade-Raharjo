<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" herf="https://stackpath.bootstrapcdn.com/font-awesome.min.css">
    <link rel="stylesheet" herf="style/style.css">
</head>
<body>
    <div class="container">
        <form action ="controller/login.php" method="POST" class= "login_username">
            <p class ="login_text" style="font-size: 2rem; font-weight: 800;">login</p>
            <div class="input-group">
                <input type="text" placeholder="username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="password" name="password" required>
            </div>
            <div class="input-group">
                 <button name="submit" class="btn">login</button>
            </div>
        </form>
    </div>
</body>
</html>