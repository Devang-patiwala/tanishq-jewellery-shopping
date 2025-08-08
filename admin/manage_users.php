<?php include 'includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Manage Users</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM users");
                while ($user = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$user['id']}</td>
                        <td>{$user['name']}</td>
                        <td>{$user['email']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
