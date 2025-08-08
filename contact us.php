<?php
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message_text = $_POST['message'] ?? '';
    
    // In a real-world scenario, you'd want to add proper validation and sanitization here
    // You'd also want to use a more secure method of sending emails
    $to = "contact@tanishq.com";
    $headers = "From: $email";
    $email_message = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message_text";
    
    if (mail($to, $subject, $email_message, $headers)) {
        $message = "Thank you for contacting us. We'll get back to you soon!";
    } else {
        $message = "Oops! Something went wrong. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tanishq Jewellery</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Tanishq Jewellery</h1>
        </div>
    </header>

    <div class="container">
        <div class="contact-form">
            <?php if ($message): ?>
                <div class="message"><?php echo $message; ?></div>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>