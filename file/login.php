

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
<link rel="stylesheet" href="./public/login.css">

</head>
    
<body>
    <h2>Login As User </h2>

    <form  method="POST" action="./controller/login.controller.php">
            <label for="Username">Username :</label>
            <input type="text" name="username" required><br>
            <label for="Password">Password :</label >
            <input type="password" name="password" required >
            <input type="submit" value="login" name="user" >
            </form>
        
            <h2>Login As Admin </h2>
            <form  method="POST" action="./controller/login.controller.php">
            <label for="Username">Username :</label>
            <input type="text" name="username" required><br>
            <label for="Password">Password :</label>
            <input type="password" name="password" required>
            <input type="submit" value="login" name="admin">
            </form>

</body>
</html>
