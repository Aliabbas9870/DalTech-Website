<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = mysqli_connect("localhost", "root", "", "daltech");

        if (!$conn) {
            die("Connection Failed: " . mysqli_connect_error());
        }

        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {

            $_SESSION['email'] = $email;
            $_SESSION['logged_in'] = true;

            header("Location: index.php");
            exit();
        } else {

            header("Location: login.php?error=invalid_credentials");
            exit();
        }
    } else {
   
        header("Location: login.php?error=missing_fields");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section>
        <div class="container">
            <h2>Login</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary p-2" name="submit">Login</button>
            </form>
        </div>
    </section>
</body>
</html>
