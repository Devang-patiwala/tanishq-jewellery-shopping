<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

    if ($product_id > 0) {
        if (isset($_SESSION['cart'][$product_id])) {
            unset($_SESSION['cart'][$product_id]);
            $_SESSION['message'] = 'Product removed from cart successfully.';
        } else {
            $_SESSION['error'] = 'Product not found in cart.';
        }
    } else {
        $_SESSION['error'] = 'Invalid product.';
    }
}

header('Location: cart.php');
exit();

