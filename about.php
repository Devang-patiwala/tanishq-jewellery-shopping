<?php
session_start();
$page_title = "About Us";
include 'includes/header.php';
?>

<main class="about-page">
    <div class="container">
        <h1>About Tanishq Jewellery</h1>
        
        <section class="about-intro">
            <img src="images/tanishq-store.jpg" alt="Tanishq Jewellery Store" class="about-image">
            <p>Tanishq, India's most trusted jewellery brand, has been adorning the lives of Indian women with exquisite designs and unmatched quality since 1994. As a part of the Tata Group, one of India's largest and most respected conglomerates, Tanishq carries forward a legacy of trust, quality, and innovation.</p>
        </section>

        <section class="about-history">
            <h2>Our History</h2>
            <p>Founded in 1994, Tanishq has revolutionized the Indian jewellery market with its commitment to design excellence, superior craftsmanship, and guaranteed product quality. Over the years, we have grown from a single store to a nationwide network of over 300 exclusive boutiques, becoming a household name synonymous with fine jewellery.</p>
        </section>

        <section class="about-quality">
            <h2>Commitment to Quality</h2>
            <p>At Tanishq, we believe that every piece of jewellery should be a masterpiece. Our dedicated team of skilled artisans and designers work tirelessly to create stunning pieces that blend traditional craftsmanship with contemporary designs. We use only the finest materials, including certified diamonds and hallmarked gold, ensuring that every Tanishq creation is a testament to uncompromising quality.</p>
        </section>

        <section class="about-innovation">
            <h2>Innovation and Design</h2>
            <p>Tanishq has always been at the forefront of innovation in the jewellery industry. From introducing the concept of lightweight jewellery to pioneering the use of cutting-edge technology in design and manufacturing, we continuously strive to offer our customers the very best in jewellery craftsmanship.</p>
        </section>

        <section class="about-values">
            <h2>Our Values</h2>
            <ul>
                <li><strong>Trust:</strong> We uphold the highest standards of transparency and ethical business practices.</li>
                <li><strong>Quality:</strong> We are committed to delivering products of exceptional quality and value.</li>
                <li><strong>Customer-Centric:</strong> Our customers are at the heart of everything we do.</li>
                <li><strong>Innovation:</strong> We constantly push the boundaries of design and technology.</li>
                <li><strong>Sustainability:</strong> We are dedicated to responsible sourcing and environmental stewardship.</li>
            </ul>
        </section>

        <section class="about-cta">
            <h2>Experience the Tanishq Difference</h2>
            <p>We invite you to explore our exquisite collections and experience the unparalleled beauty and quality of Tanishq jewellery. Visit one of our stores or shop online to discover why millions of Indian women trust Tanishq for life's most precious moments.</p>
            <a href="products.php" class="btn">Explore Our Collections</a>
        </section>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

