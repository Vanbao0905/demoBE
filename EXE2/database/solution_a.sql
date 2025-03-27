-- 1. Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z)
SELECT * FROM users ORDER BY user_name ASC;

-- 2. Lấy ra 07 người dùng theo thứ tự tên theo Alphabet (A->Z)
SELECT TOP 7 * FROM users ORDER BY user_name ASC;

-- 3. Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z), trong đó tên người dùng có chữ 'a'
SELECT * FROM users WHERE user_name LIKE '%a%' ORDER BY user_name ASC;

-- 4. Lấy ra danh sách người dùng trong đó tên người dùng bắt đầu bằng chữ 'm'
SELECT * FROM users WHERE user_name LIKE 'm%' ORDER BY user_name ASC;

-- 5. Lấy ra danh sách người dùng trong đó tên người dùng kết thúc bằng chữ 'i'
SELECT * FROM users WHERE user_name LIKE '%i' ORDER BY user_name ASC;

-- 6. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ: example@gmail.com)
SELECT * FROM users WHERE user_email LIKE '%@gmail.com';

-- 7. Lấy ra danh sách người dùng trong đó email người dùng là Gmail, tên người dùng bắt đầu bằng chữ 'm'
SELECT * FROM users WHERE user_email LIKE '%@gmail.com' AND user_name LIKE 'm%';

-- 8. Lấy danh sách người dùng có email là Gmail, tên chứa 'i' và dài hơn 5 ký tự
SELECT * FROM users WHERE user_email LIKE '%@gmail.com' AND user_name LIKE '%i%' AND LEN(user_name) > 5;

-- 9. Lấy danh sách người dùng có tên chứa 'a', dài 5-9 ký tự, email Gmail, tên email chứa 'i'
SELECT * FROM users WHERE user_name LIKE '%a%' AND LEN(user_name) BETWEEN 5 AND 9 AND user_email LIKE '%@gmail.com' AND LEFT(user_email, CHARINDEX('@', user_email) - 1) LIKE '%i%';

-- 10. Lấy danh sách người dùng theo điều kiện phức tạp
SELECT * FROM users WHERE (user_name LIKE '%a%' AND LEN(user_name) BETWEEN 5 AND 9) OR (user_name LIKE '%i%' AND LEN(user_name) < 9) OR (user_email LIKE '%@gmail.com' AND LEFT(user_email, CHARINDEX('@', user_email) - 1) LIKE '%i%');

