<?php
function sanitize($input) {
    return htmlspecialchars(strip_tags($input));
}

function get_featured_products($limit = 4) {
    global $conn;
    $sql = "SELECT * FROM products WHERE featured = 1 LIMIT ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $limit);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}

function get_product_by_slug($slug) {
    global $conn;
    $sql = "SELECT * FROM products WHERE slug = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function get_products_by_category($category_slug, $limit = 12) {
    global $conn;
    $sql = "SELECT p.* FROM products p
            JOIN categories c ON p.category_id = c.id
            WHERE c.slug = ?
            LIMIT ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $category_slug, $limit);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}

