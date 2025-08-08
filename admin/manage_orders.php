<?php include 'includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Manage Orders</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User ID</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM orders");
                while ($order = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$order['id']}</td>
                        <td>{$order['user_id']}</td>
                        <td>{$order['total']}</td>
                        <td>{$order['status']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
