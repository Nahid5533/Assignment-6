<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <h2>Registration</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Register">
    </form>
</body>

</html>