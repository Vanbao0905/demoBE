-- 1. Liệt kê hóa đơn của khách hàng
SELECT users.user_id, users.user_name, orders.order_id 
FROM users
JOIN orders ON users.user_id = orders.user_id;

-- 2. Liệt kê số lượng hóa đơn của khách hàng
SELECT users.user_id, users.user_name, COUNT(orders.order_id) AS total_orders
FROM users
LEFT JOIN orders ON users.user_id = orders.user_id
GROUP BY users.user_id, users.user_name;

-- 3. Liệt kê thông tin hóa đơn: mã đơn hàng, số sản phẩm
SELECT orders.order_id, COUNT(order_details.product_id) AS total_products
FROM orders
JOIN order_details ON orders.order_id = order_details.order_id
GROUP BY orders.order_id;

-- 4. Liệt kê thông tin mua hàng
SELECT users.user_id, users.user_name, orders.order_id, STRING_AGG(products.product_name, ', ') AS products
FROM users
JOIN orders ON users.user_id = orders.user_id
JOIN order_details ON orders.order_id = order_details.order_id
JOIN products ON order_details.product_id = products.product_id
GROUP BY users.user_id, users.user_name, orders.order_id;

-- 5. Liệt kê 7 người dùng mua nhiều đơn nhất
SELECT TOP 7 users.user_id, users.user_name, COUNT(orders.order_id) AS total_orders
FROM users
JOIN orders ON users.user_id = orders.user_id
GROUP BY users.user_id, users.user_name
ORDER BY total_orders DESC;

-- 6. Liệt kê 7 người dùng mua sản phẩm Samsung hoặc Apple
SELECT DISTINCT TOP 7 users.user_id, users.user_name, orders.order_id, products.product_name
FROM users
JOIN orders ON users.user_id = orders.user_id
JOIN order_details ON orders.order_id = order_details.order_id
JOIN products ON order_details.product_id = products.product_id
WHERE products.product_name LIKE '%Samsung%' OR products.product_name LIKE '%Apple%';

-- 7. Liệt kê danh sách mua hàng bao gồm tổng tiền
SELECT users.user_id, users.user_name, orders.order_id, SUM(products.product_price) AS total_price
FROM users
JOIN orders ON users.user_id = orders.user_id
JOIN order_details ON orders.order_id = order_details.order_id
JOIN products ON order_details.product_id = products.product_id
GROUP BY users.user_id, users.user_name, orders.order_id;

-- 8. Liệt kê mỗi user chỉ chọn 1 đơn hàng có giá tiền lớn nhất
SELECT user_id, user_name, order_id, total_price
FROM (
    SELECT users.user_id, users.user_name, orders.order_id, SUM(products.product_price) AS total_price,
           RANK() OVER (PARTITION BY users.user_id ORDER BY SUM(products.product_price) DESC) AS rank
    FROM users
    JOIN orders ON users.user_id = orders.user_id
    JOIN order_details ON orders.order_id = order_details.order_id
    JOIN products ON order_details.product_id = products.product_id
    GROUP BY users.user_id, users.user_name, orders.order_id
) AS ranked_orders
WHERE rank = 1;

-- 9. Liệt kê mỗi user chỉ chọn 1 đơn hàng có giá tiền nhỏ nhất
SELECT user_id, user_name, order_id, total_price
FROM (
    SELECT users.user_id, users.user_name, orders.order_id, SUM(products.product_price) AS total_price,
           RANK() OVER (PARTITION BY users.user_id ORDER BY SUM(products.product_price) ASC) AS rank
    FROM users
    JOIN orders ON users.user_id = orders.user_id
    JOIN order_details ON orders.order_id = order_details.order_id
    JOIN products ON order_details.product_id = products.product_id
    GROUP BY users.user_id, users.user_name, orders.order_id
) AS ranked_orders
WHERE rank = 1;

-- 10. Liệt kê mỗi user chỉ chọn 1 đơn hàng có số sản phẩm nhiều nhất
SELECT user_id, user_name, order_id, total_products
FROM (
    SELECT users.user_id, users.user_name, orders.order_id, COUNT(order_details.product_id) AS total_products,
           RANK() OVER (PARTITION BY users.user_id ORDER BY COUNT(order_details.product_id) DESC) AS rank
    FROM users
    JOIN orders ON users.user_id = orders.user_id
    JOIN order_details ON orders.order_id = order_details.order_id
    GROUP BY users.user_id, users.user_name, orders.order_id
) AS ranked_orders
WHERE rank = 1;