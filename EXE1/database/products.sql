-- Tạo cơ sở dữ liệu
CREATE DATABASE BKE;
USE BKE;

-- Xóa cơ sở dữ liệu nếu cần (chỉ chạy nếu cần thiết)
-- DROP DATABASE BKE;

-- Tạo bảng users
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(25) NOT NULL,
    user_email VARCHAR(55) NOT NULL UNIQUE,
    user_pass VARCHAR(255) NOT NULL,
    updated_at DATETIME DEFAULT NOW(),
    created_at DATETIME DEFAULT NOW()
);

-- Tạo bảng products
CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_price FLOAT NOT NULL,
    product_description TEXT NOT NULL,
    updated_at DATETIME DEFAULT NOW(),
    created_at DATETIME DEFAULT NOW()
);

-- Tạo bảng orders
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    updated_at DATETIME DEFAULT NOW(),
    created_at DATETIME DEFAULT NOW(),
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Tạo bảng order_details
CREATE TABLE order_details (
    order_detail_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    updated_at DATETIME DEFAULT NOW(),
    created_at DATETIME DEFAULT NOW(),
    FOREIGN KEY (order_id) REFERENCES orders(order_id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(product_id) ON DELETE CASCADE
);