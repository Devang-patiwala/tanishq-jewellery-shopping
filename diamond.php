<?php
session_start();
$page_title = "Diamond Collection";
include 'includes/header.php';
include 'includes/db_connect.php';

// Fetch diamond products from the database
$stmt = $pdo->query("SELECT * FROM products WHERE category = 'Diamond' LIMIT 8");
$diamond_products = $stmt->fetchAll();
?>

<main class="diamond-page">
    <div class="container">
        <h1>Tanishq Diamond Collection</h1>
        
        <section class="diamond-intro">
            <img src="/placeholder.svg?height=400&width=600" alt="Tanishq Diamond Jewellery" class="diamond-hero-image">
            <div class="diamond-intro-text">
                <h2>Timeless Elegance, Unmatched Quality</h2>
                <p>Discover the brilliance of Tanishq's exquisite diamond collection. Each piece is a testament to our commitment to quality, craftsmanship, and timeless beauty. Our diamonds are carefully selected to meet the highest standards of cut, clarity, color, and carat weight.</p>
            </div>
        </section>

        <section class="diamond-quality">
            <h2>The Tanishq Diamond Difference</h2>
            <ul class="diamond-features">
                <li>
                    <i class="fas fa-certificate"></i>
                    <h3>Certified Quality</h3>
                    <p>All our diamonds are certified by international gemological laboratories.</p>
                </li>
                <li>
                    <i class="fas fa-cut"></i>
                    <h3>Expert Craftsmanship</h3>
                    <p>Our master artisans bring each diamond to life with precision and skill.</p>
                </li>
                <li>
                    <i class="fas fa-sparkles"></i>
                    <h3>Exceptional Brilliance</h3>
                    <p>We select only the most brilliant diamonds for our collection.</p>
                </li>
                <li>
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Ethical Sourcing</h3>
                    <p>Our diamonds are responsibly sourced, ensuring peace of mind with every purchase.</p>
                </li>
            </ul>
        </section>

        <section class="diamond-education">
            <h2>Understanding Diamond Quality</h2>
            <div class="diamond-4cs">
                <div class="diamond-4c">
                    <h3>Cut</h3>
                    <img src="/placeholder.svg?height=150&width=150" alt="Diamond Cut" class="diamond-4c-image">
                    <p>The cut determines a diamond's sparkle and brilliance.</p>
                </div>
                <div class="diamond-4c">
                    <h3>Color</h3>
                    <img src="/placeholder.svg?height=150&width=150" alt="Diamond Color" class="diamond-4c-image">
                    <p>The less color, the higher the grade and value.</p>
                </div>
                <div class="diamond-4c">
                    <h3>Clarity</h3>
                    <img src="/placeholder.svg?height=150&width=150" alt="Diamond Clarity" class="diamond-4c-image">
                    <p>Clarity refers to the absence of inclusions and blemishes.</p>
                </div>
                <div class="diamond-4c">
                    <h3>Carat</h3>
                    <img src="/placeholder.svg?height=150&width=150" alt="Diamond Carat" class="diamond-4c-image">
                    <p>Carat is the standard unit of weight for diamonds.</p>
                </div>
            </div>
        </section>

        <section class="featured-diamonds">
            <h2>Featured Diamond Pieces</h2>
            <div class="product-grid">
                <?php foreach ($diamond_products as $product): ?>
                    <div class="product-card">
                        <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-image">
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p class="product-price">₹<?php echo number_format($product['price'], 2); ?></p>
                        <a href="product-details.php?id=<?php echo $product['id']; ?>" class="btn">View Details</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="diamond-cta">
            <h2>Find Your Perfect Diamond</h2>
            <p>Whether you're celebrating a special moment or treating yourself to timeless elegance, our diamond collection has the perfect piece for you. Visit a Tanishq store or shop online to experience the brilliance of our diamonds firsthand.</p>
            <a href="products.php?category=Diamond" class="btn btn-large">Explore All Diamond Jewellery</a>
        </section>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

