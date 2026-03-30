CREATE DATABASE IF NOT EXISTS shop_db;
USE shop_db;

CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255),
    category_id INT,
    is_featured BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

-- Sample Data
INSERT INTO categories (name) VALUES ('Electronics'), ('Clothing'), ('Home & Garden');

INSERT INTO products (name, description, price, image, category_id, is_featured) VALUES
('Smartphone X', 'Latest model with advanced features', 799.99, 'product1.jpg', 1, 1),
('Laptop Pro', 'High performance laptop for professionals', 1299.99, 'product2.jpg', 1, 1),
('Summer T-Shirt', 'Comfortable cotton t-shirt', 19.99, 'product3.jpg', 2, 0),
('Coffee Maker', 'Brews delicious coffee in minutes', 49.99, 'product4.jpg', 3, 1),
('Wireless Headphones', 'Noise cancelling headphones', 199.99, 'product5.jpg', 1, 0);
