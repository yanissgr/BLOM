<main>



<body>
    <div class="container">
        <h1>Login</h1>
        <form method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php">Sign up</a></p>
    </div>

    <?php
    // PHP code to handle login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Here, you would typically check the username and password against a database
        // For simplicity, we'll just check if the username is "admin" and the password is "password"
        if ($username == "admin" && $password == "password") {
            // Login successful
            echo "Login successful!";
        } else {
            // Login failed
            echo "Invalid username or password.";
        }
    }
    ?>
</body>

</main>