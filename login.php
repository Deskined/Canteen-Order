<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canteen Order System</title>
</head>
<body>
    <h1>John Allen Kim Samin</h>
    <h5>UCOS 2-2</h5>
    <h1>Login Here</h1>
    <?php
        if (isset($_GET['error'])) {
            echo "<p style='color: red;'>Invalid username or password.</p>";
        }
    ?>
    <form action="loginnext.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p><a href="register.php">Register Here</a></p>
</body>
</html>
