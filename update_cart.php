<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

    if ($product_id > 0 && $quantity > 0) {
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] = $quantity;
            $_SESSION['message'] = 'Cart updated successfully.';
        } else {
            $_SESSION['error'] = 'Product not found in cart.';
        }
    } else {
        $_SESSION['error'] = 'Invalid product or quantity.';
    }
}

header('Location: cart.php');
exit();

