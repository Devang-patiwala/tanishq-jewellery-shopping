<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';

$category_slug = isset($_GET['slug']) ? sanitize($_GET['slug']) : '';
$products = get_products_by_category($category_slug);

if (empty($products)) {
    header("Location: index.php");
    exit();
}

$page_title = ucfirst($category_slug) . " - Tanishq Jewellery";
include 'includes/header.php';
?>

<main>
    <h1><?php echo ucfirst($category_slug); ?></h1>
    <div class="product-grid">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
                <p class="price">₹<?php echo number_format($product['price'], 2); ?></p>
                <a href="product.php?slug=<?php echo $product['slug']; ?>" class="btn">View Details</a>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

