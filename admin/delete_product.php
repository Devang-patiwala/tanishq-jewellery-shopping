<?php include 'includes/connection.php'; ?>
<?php
$product_id = $_GET['id'];
$conn->query("DELETE FROM products WHERE id = $product_id");
header('Location: index.php');
?>
