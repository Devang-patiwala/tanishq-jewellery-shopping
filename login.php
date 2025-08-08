
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tanishq Jewellery Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h1>Tanishq Jewellery</h1>
      <p>Welcome Back! Please log in to continue shopping.</p>
      <form id="loginForm" action="login.php" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit">Login</button>
        <p class="register-link">Don't have an account? <a href="register.php">Register here</a>.</p>
      </form>
    </div>
  </div>
  <script src="js_main.js"></script>
</body>
</html>

<?php include 'includes/connection.php'; ?>
<?php
//session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($query);
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header('Location: index.php');
    } else {
        echo "Invalid login credentials!";
    }
}
?>


