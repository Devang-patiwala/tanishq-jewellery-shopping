<?php include 'db_config.php'; ?>
<?php
$product_id = $_GET['id'];
$product = $conn->query("SELECT * FROM products WHERE id = $product_id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Edit Product</h1>
        <nav>
            <a href="index.php">Dashboard</a>
        </nav>
    </header>
    <main>
        <form action="edit_product.php?id=<?php echo $product_id; ?>" method="POST" enctype="multipart/form-data">
            <label for="name">Product Name</label>
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required>

            <label for="price">Price</label>
            <input type="text" name="price" value="<?php echo $product['price']; ?>" required>

            <label for="image">Image</label>
            <input type="file" name="image" accept="image/*">
            <img src="<?php echo $product['image']; ?>" alt="Current Image" width="100">

            <button type="submit" name="edit_product">Save Changes</button>
        </form>
    </main>
    <?php
    if (isset($_POST['edit_product'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $product['image'];

        if (!empty($_FILES['image']['name'])) {
            $image = 'images/' . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        }

        $conn->query("UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$product_id");
        header('Location: index.php');
    }
    ?>
</body>
</html>
