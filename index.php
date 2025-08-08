<?php
require_once 'includes/connection.php';
require_once 'includes/functions.php';

$featured_products = get_featured_products();

$page_title = "Welcome to Tanishq Jewellery";
include 'includes/header.php';
?>

<main>
    <section class="hero">
        <div class="hero-content">
            <h1>Exquisite Jewellery for Every Occasion</h1>
            <p>Discover timeless elegance with Tanishq</p>
            <a href="product.php" class="btn">Shop Now</a>
        </div>
    </section>

    <section class="featured-products">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <?php foreach ($featured_products as $product): ?>
                <div class="product-card">
                    <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
                    <h3><?php echo $product['name']; ?></h3>
                    <p class="price">₹<?php echo number_format($product['price'], 2); ?></p>
                    <a href="product.php?slug=<?php echo $product['slug']; ?>" class="btn">View Details</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="categories">
        <h2>Shop by Category</h2>
        <div class="category-grid">
            <a href="category.php?slug=necklaces" class="category-card">
                <img src="images/Necklace?height=300&width=300" alt="Necklaces">
                <h3>Necklaces</h3>
            </a>
            <a href="category.php?slug=earrings" class="category-card">
                <img src="/placeholder.svg?height=300&width=300" alt="Earrings">
                <h3>Earrings</h3>
            </a>
            <a href="category.php?slug=rings" class="category-card">
                <img src="/placeholder.svg?height=300&width=300" alt="Rings">
                <h3>Rings</h3>
            </a>
            <a href="category.php?slug=bracelets" class="category-card">
                <img src="/placeholder.svg?height=300&width=300" alt="Bracelets">
                <h3>Bracelets</h3>
            </a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>










