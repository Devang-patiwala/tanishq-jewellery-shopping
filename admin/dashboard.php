<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="manage_products.php">Manage Products</a>
            <a href="manage_users.php">Manage Users</a>
            <a href="manage_orders.php">Manage Orders</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Welcome, Admin!</h2>
        <p>Use the navigation links above to manage the website.</p>
    </main>
</body>
</html>


<!-- part 2 -->
<?php include 'includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="add_product.php">Add Product</a></li>
                <li><a href="manage_users.php">Manage Users</a></li>
                <li><a href="manage_orders.php">Manage Orders</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Welcome, Admin</h2>
        <div class="dashboard-overview">
            <div>
                <h3>Total Products</h3>
                <p><?php echo $conn->query("SELECT COUNT(*) FROM products")->fetch_row()[0]; ?></p>
            </div>
            <div>
                <h3>Total Users</h3>
                <p><?php echo $conn->query("SELECT COUNT(*) FROM users")->fetch_row()[0]; ?></p>
            </div>
            <div>
                <h3>Total Orders</h3>
                <p><?php echo $conn->query("SELECT COUNT(*) FROM orders")->fetch_row()[0]; ?></p>
            </div>
        </div>
    </main>
</body>
</html>

