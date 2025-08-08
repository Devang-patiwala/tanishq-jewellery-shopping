CREATE DATABASE tanishq_jewellery;
USE tanishq_jewellery;


CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255),
    featured BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO users (email, password) VALUES ('user@example.com', 'password123');

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total_amount DECIMAL(10, 2) NOT NULL,
    status ENUM('pending', 'processing', 'shipped', 'delivered') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE user_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    action VARCHAR(50),
    timestamp DATETIME,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


-- Insert sample data
INSERT INTO categories (name, slug) VALUES
('Necklaces', 'necklaces'),
('Earrings', 'earrings'),
('Rings', 'rings'),
('Bracelets', 'bracelets');

INSERT INTO products (category_id, name, slug, description, price, image_url, featured) VALUES
(1, 'Diamond Pendant Necklace', 'diamond-pendant-necklace', 'Elegant diamond pendant necklace in 18K gold', 49999.99, '/placeholder.svg?height=300&width=300', TRUE),
(2, 'Ruby Stud Earrings', 'ruby-stud-earrings', 'Classic ruby stud earrings with diamond accents', 29999.99, '/placeholder.svg?height=300&width=300', TRUE),
(3, 'Sapphire Engagement Ring', 'sapphire-engagement-ring', 'Stunning sapphire engagement ring with diamond halo', 79999.99, '/placeholder.svg?height=300&width=300', TRUE),
(4, 'Gold Tennis Bracelet', 'gold-tennis-bracelet', 'Luxurious gold tennis bracelet with diamonds', 99999.99, '/placeholder.svg?height=300&width=300', TRUE);



