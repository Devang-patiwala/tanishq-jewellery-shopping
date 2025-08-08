<?php
include 'includes/connection.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Manage Products</h1>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="add_product.php">Add Product</a>
        </nav>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>" width="50"></td>
                        <td>
                            <a href="edit_product.php?id=<?= $row['id'] ?>">Edit</a>
                            <a href="delete_product.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
