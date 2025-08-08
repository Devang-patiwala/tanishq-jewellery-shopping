<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';

$page_title = "Shopping Cart - Tanishq Jewellery";
include 'includes/header.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cart_total = 0;
?>

<main>
    <h1>Shopping Cart</h1>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $product_id => $quantity):
                   // $product = get_product_by_id($product_id);
                    $total = $product['price'] * $quantity;
                    $cart_total += $total;
                ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td>₹<?php echo number_format($product['price'], 2); ?></td>
                    <td>
                        <form action="update_cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <input type="number" name="quantity" value="<?php echo $quantity; ?>" min="1" max="10">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>₹<?php echo number_format($total, 2); ?></td>
                    <td>
                        <form action="remove_from_cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td>₹<?php echo number_format($cart_total, 2); ?></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        <div class="cart-actions">
            <a href="index.php" class="btn">Continue Shopping</a>
            <a href="checkout.php" class="btn">Proceed to Checkout</a>
        </div>
    <?php endif; ?>
</main>

<?php include 'includes/footer.php'; ?>

