<?php
include 'includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // In production, handle file uploads properly

    $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
    if ($conn->query($sql) === TRUE) {
        header('Location: manage_products.php');
        exit;
    } else {
        $error = "Error adding product: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Product</h1>
    </header>
    <main>
        <form method="POST">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <label for="image">Image URL:</label>
            <input type="text" id="image" name="image" required>

            <button type="submit">Add Product</button>
        </form>
    </main>
</body>
</html>


<!-- part 2 -->
<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Product</h1>
        <nav>
            <a href="index.php">Dashboard</a>
        </nav>
    </header>
    <main>
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <label for="name">Product Name</label>
            <input type="text" name="name" required>

            <label for="price">Price</label>
            <input type="text" name="price" required>

            <label for="image">Image</label>
            <input type="file" name="image" accept="image/*" required>

            <button type="submit" name="add_product">Add Product</button>
        </form>
    </main>
    <?php
    if (isset($_POST['add_product'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = 'images/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);

        $conn->query("INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')");
        header('Location: index.php');
    }
    ?>
</body>
</html>
