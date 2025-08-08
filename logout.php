<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout - Tanishq Jewellery</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Tanishq Jewellery</h1>
  </header>
  <main>
    <section class="logout-container">
      <h2>You have successfully logged out!</h2>
      <p>Thank you for visiting Tanishq Jewellery. We hope to see you again!</p>
      <button onclick="redirectHome()">Back to Home</button>
    </section>
  </main>
  <footer>
    <p>&copy; 2025 Tanishq Jewellery. All rights reserved.</p>
  </footer>
  <script src="js_main.js"></script>
</body>
</html>


<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

// Handle logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: home.php");
    exit();
}
?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanishq Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="logout-container">
        <h1>Thank you for shopping at Tanishq!</h1>
        <p>Are you sure you want to logout?</p>
        <form method="POST" action="">
            <button type="submit" name="logout" class="logout-btn">Logout</button>
        </form>
    </div>
    <script src="js_main.js"></script>
</body>
</html> -->
