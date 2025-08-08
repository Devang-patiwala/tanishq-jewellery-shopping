<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tanishq Jewellery</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header>
        <div class="container">
            <h1>Tanishq Jewellery</h1>
        </div>
    </header>

    <main class="container">
        <section class="about-section">
            <div class="about-content">
                <h2>About Us</h2>
                <?php
                $about_text = "Tanishq, India's most-loved jewellery brand from the TATA Group, has been synonymous with superior craftsmanship, exclusive designs and guaranteed product quality for over two decades. We've set unprecedented standards for designing finest jewellery by bringing together traditional and modern techniques at our state-of-the-art manufacturing facilities.";
                echo "<p>$about_text</p>";
                ?>
                <p>Our commitment to excellence and our passion for innovation have made us one of the most renowned jewellery brands in India.</p>
            </div>
            <div class="about-image">
                <img src="image"alt="Tanishq Jewellery">
            </div>
        </section>

        <section class="features">
            <?php
            $features = [
                ["title" => "Exquisite Designs", "description" => "Our team of expert designers create stunning, unique pieces that blend traditional and contemporary styles."],
                ["title" => "Quality Assurance", "description" => "Every piece of jewellery undergoes rigorous quality checks to ensure the highest standards of craftsmanship."],
                ["title" => "Customer First", "description" => "We prioritize customer satisfaction and offer personalized services to meet individual needs and preferences."]
            ];

            foreach ($features as $feature) {
                echo "<div class='feature-card'>";
                echo "<h3>{$feature['title']}</h3>";
                echo "<p>{$feature['description']}</p>";
                echo "</div>";
            }
            ?>
        </section>
    </main>
</body>
</html>