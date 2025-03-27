Select * from users;

DELETE FROM users;

DBCC CHECKIDENT ('users', RESEED, 0);

INSERT INTO users (user_name, user_email, user_pass) 
VALUES 
(N'Nguyen Van A', 'nguyenvana@gmail.com', '123456'),
(N'Tran Thi B', 'tranb@yahoo.com', '123456'),
(N'Le Van C', 'levanc@gmail.com', '123456'),
(N'Pham Minh D', 'phamminhd@gmail.com', '123456'),
(N'Bui Thi E', 'buie@yahoo.com', '123456'),
(N'Đang Hoang F', 'dangf@gmail.com', '123456'),
(N'Vo Thanh G', 'vothanhg@gmail.com', '123456'),
(N'Hoang Anh H', 'hoanganhh@gmail.com', '123456'),
(N'Minh Anh K', 'minhanhk@gmail.com', '123456'),
(N'Yen nhi', 'yennhi@gmail.com', '123456'),
(N'An Tay', 'anitay@gmail.com', 'pass123');

select * from products;

INSERT INTO products (product_name, product_price, product_description) 
VALUES 
('Tivi Samsung 55 inch', 15000000, 'Tivi man hinh LED 55 inch, do phan giai 4K'),
('Dien thoai iPhone 14', 23000000, 'Dien thoai iPhone 14 Pro Max, bo nho 256GB'),
('Laptop Dell XPS 13', 28000000, 'Laptop Dell XPS 13, chip Intel Core i7, RAM 16GB, SSD 512GB'),
('Tai nghe Sony WH-1000XM4', 5000000, 'Tai nghe chong on Sony WH-1000XM4, ket noi Bluetooth'),
('May giat LG 9kg', 12000000, 'May giat LG Inverter 9kg, cua truoc, tiet kiem dien'),
('Tu lanh Panasonic 300L', 15000000, 'Tu lanh Panasonic dung tich 300L, cong nghe Inverter'),
('Loa JBL Charge 5', 3500000, 'Loa Bluetooth JBL Charge 5, chong nuoc, am bass manh'),
('Ban phim co Razer BlackWidow', 2500000, 'Ban phim co Razer BlackWidow V3, switch xanh'),
('Chuot khong day Logitech MX Master 3', 2000000, 'Chuot khong day Logitech MX Master 3, pin sac, ket noi da thiet bi'),
('Camera an ninh Hikvision', 1800000, 'Camera an ninh Hikvision 2MP, ho tro quay dem, ket noi wifi');

select * from orders;

DELETE FROM orders;
DBCC CHECKIDENT ('orders', RESEED, 0);

INSERT INTO orders (user_id) 
VALUES 
((SELECT user_id FROM users WHERE user_email = 'nguyenvana@gmail.com')), 
((SELECT user_id FROM users WHERE user_email = 'tranb@yahoo.com')), 
((SELECT user_id FROM users WHERE user_email = 'levanc@gmail.com')), 
((SELECT user_id FROM users WHERE user_email = 'phamminhd@gmail.com')), 
((SELECT user_id FROM users WHERE user_email = 'buie@yahoo.com')), 
((SELECT user_id FROM users WHERE user_email = 'dangf@gmail.com')), 
((SELECT user_id FROM users WHERE user_email = 'vothanhg@gmail.com')), 
((SELECT user_id FROM users WHERE user_email = 'hoanganhh@gmail.com'));


select * from order_details;

DELETE FROM order_details;
DBCC CHECKIDENT ('order_details', RESEED, 0);

INSERT INTO order_details (order_id, product_id)
VALUES 
(1, 2),
(1, 3),
(2, 1),
(2, 4),
(3, 5),
(4, 2),
(5, 3),
(6, 1),
(7, 5),
(8, 4),
(9, 6),
(10, 7),
(11, 8),
(12, 9),
(13, 10),
(14, 3),
(15, 2),
(16, 1);




