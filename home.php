<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanishq Jewellery</title>
    <link rel="stylesheet" href="style.css">
    <script src="js_main.js" defer></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/radhe.png?height=50&width=100" alt="Tanishq Jewellery Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#collections">Collections</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <div class="hero">
                <h1>Elegance Redefined</h1>
                <p>Explore our exclusive collection of exquisite jewellery.</p>
                <a href="#collections" class="btn">Shop Now</a>
            </div>
        </section>

        <section id="collections">
            <h2>Our Collections</h2>
            <div class="gallery">
                <!-- Example product cards -->
                <div class="product">
                    <img src="images/necklace.jpg" alt="Necklace">
                    <h3>Diamond Necklace</h3>
                    <p>Price: $1200</p>
                </div>
                <div class="product">
                    <img src="images/earrings.jpg" alt="Earrings">
                    <h3>Gold Earrings</h3>
                    <p>Price: $800</p>
                </div>
                <div class="product">
                    <img src="images/ring.jpg" alt="Ring">
                    <h3>Ruby Ring</h3>
                    <p>Price: $500</p>
                </div>
            </div>
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p>Tanishq Jewellery is a symbol of trust and elegance, offering unparalleled craftsmanship and timeless designs.</p>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <form action="process_contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Tanishq Jewellery. All rights reserved.</p>
    </footer>
</body>
</html>
