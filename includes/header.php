<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><php echo $page_title; ?></title> -->
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/radhe.png" alt="Tanishq Jewellery">
                </a>
            </div>
            <nav>
                <ul >
                    <li><a href="index.php">Home</a></li>
                    <li><a href="category.php?slug=necklaces">Necklaces</a></li>
                    <li><a href="category.php?slug=earrings">Earrings</a></li>
                    <li><a href="category.php?slug=rings">Rings</a></li>
                    <li><a href="category.php?slug=bracelets">Bracelets</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li><a href="account.php">My Account</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
   