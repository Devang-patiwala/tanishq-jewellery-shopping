<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';

$product_slug = isset($_GET['slug']) ? sanitize($_GET['slug']) : '';
$product = get_product_by_slug($product_slug);

if (!$product) {
    header("Location: index.php");
    exit();
}

$page_title = $product['name'] . " - Tanishq Jewellery";
include 'includes/header.php';
?>

<main>
    <div class="product-details">
        <div class="product-image">
            <img src="<?php echo $product['11.jpg']; ?>" alt="<?php echo $product['name']; ?>">
        </div>
        <div class="product-info">
            <h1><?php echo $product['name']; ?></h1>
            <p class="price">₹<?php echo number_format($product['price'], 2); ?></p>
            <p class="description"><?php echo $product['description']; ?></p>
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="10">
                <button type="submit" class="btn">Add to Cart</button>
            </form>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

