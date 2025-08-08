<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';

if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = 'Please log in to proceed with checkout.';
    header('Location: login.php');
    exit();
}

if (empty($_SESSION['cart'])) {
    $_SESSION['error'] = 'Your cart is empty.';
    header('Location: cart.php');
    exit();
}

$page_title = "Checkout - Tanishq Jewellery";
include 'includes/header.php';

$cart_total = 0;
foreach ($_SESSION['cart'] as $product_id => $quantity) {
    //$product = get_product_by_id($product_id);
    $cart_total += $product['price'] * $quantity;
}
?>

<main>
    <h1>Checkout</h1>
    <form action="process_order.php" method="post">
        <h2>Shipping Information</h2>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" id="state" name="state" required>
        </div>
        <div class="form-group">
            <label for="zip">ZIP Code</label>
            <input type="text" id="zip" name="zip" required>
        </div>
        <h2>Payment Information</h2>
        <div class="form-group">
            <label for="card_number">Card Number</label>
            <input type="text" id="card_number" name="card_number" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Expiry Date</label>
            <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" required>
        </div>
        <h2>Order Summary</h2>
        <table class="order-summary">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $product_id => $quantity):
                  //  $product = get_product_by_id($product_id);
                ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td>₹<?php echo number_format($product['price'] * $quantity, 2); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Total</td>
                    <td>₹<?php echo number_format($cart_total, 2); ?></td>
                </tr>
            </tfoot>
        </table>
        <button type="submit" class="btn">Place Order</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>

