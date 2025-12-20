CREATE DATABASE IF NOT EXISTS nasagh_perfumes;
USE nasagh_perfumes;

CREATE TABLE products (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    family VARCHAR(50) NOT NULL,
    longevity VARCHAR(50),
    best_for VARCHAR(100),
    description TEXT,
    image_url VARCHAR(255),
    stock_quantity INT DEFAULT 0
);

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE orders (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    order_number VARCHAR(50) UNIQUE NOT NULL,
    order_date DATE NOT NULL,
    products_summary TEXT NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    status VARCHAR(50) DEFAULT 'Processing'
);

CREATE TABLE cart_items (
    cart_item_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    product_id INT,
    size VARCHAR(20) NOT NULL,
    quantity INT NOT NULL,
    unit_price DECIMAL(10, 2) NOT NULL
);

INSERT INTO products (name, price, family, longevity, best_for, description, image_url, stock_quantity) VALUES
('Midnight Oud', 25.00, 'Oud / Woody', '10-12 hours', 'Evening events', 'Deep woody scent with smoky oud notes', 'images/midnight-oud.jpg', 50),
('Desert Rose', 22.00, 'Floral / Oriental', '8-10 hours', 'Daytime & events', 'Delicate rose petals with jasmine', 'images/desert-rose.jpg', 75),
('Royal Amber', 30.00, 'Amber / Resinous', '12+ hours', 'Winter & formal gatherings', 'Opulent amber fused with musk', 'images/royal-amber.jpg', 30),
('Arabian Nights', 28.00, 'Musk / Spicy', '10-14 hours', 'Special occasions', 'Warm spices with exotic musk', 'images/arabian-nights.jpg', 45),
('Oud Essence Oil', 35.00, 'Essential Oils', '24+ hours', 'All day wear', 'Pure concentrated oud oil', 'images/oud-oil.jpg', 20);

INSERT INTO users (full_name, email, phone) VALUES
('Ahmed Al-Maawali', 'ahmed@example.com', '+968 71183928'),
('Fatima Al-Said', 'fatima@example.com', '+968 71234567'),
('Khalid Al-Harthy', 'khalid@example.com', '+968 71345678'),
('Mona Al-Rashdi', 'mona@example.com', '+968 71456789'),
('Salim Al-Balushi', 'salim@example.com', '+968 71567890');

INSERT INTO orders (user_id, order_number, order_date, products_summary, total_amount, status) VALUES
(1, 'ORD-2025-001', '2025-11-10', 'Midnight Oud (50ml)', 25.00, 'Delivered'),
(2, 'ORD-2025-002', '2025-11-12', 'Desert Rose (50ml), Royal Amber (75ml)', 52.00, 'In Transit'),
(3, 'ORD-2025-003', '2025-11-15', 'Arabian Nights (50ml)', 28.00, 'Processing'),
(1, 'ORD-2025-004', '2025-11-18', 'Oud Essence Oil (30ml)', 35.00, 'Delivered'),
(4, 'ORD-2025-005', '2025-11-20', 'Midnight Oud (50ml), Desert Rose (50ml)', 47.00, 'Processing');

INSERT INTO cart_items (user_id, product_id, size, quantity, unit_price) VALUES
(1, 1, '50ml', 1, 25.00),
(1, 3, '75ml', 2, 30.00),
(2, 2, '50ml', 1, 22.00),
(3, 4, '50ml', 3, 28.00),
(4, 5, '30ml', 1, 35.00);