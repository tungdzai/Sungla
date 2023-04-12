INSERT INTO brands (name, created_at, updated_at)
VALUES ('D&G', NOW(), NOW()),
       ('Dior', NOW(), NOW()),
       ('Tom Ford', NOW(), NOW()),
       ('Thom Browne', NOW(), NOW()),
       ('Gucci', NOW(), NOW());

INSERT INTO sungla.products (name, description, price, image, brand_id, category_id, created_at, updated_at)
VALUES ('Product 1', 'Description 1', 100, 'image1.jpg', 1, 1, NOW(), NOW()),
       ('Product 2', 'Description 2', 200, 'image2.jpg', 2, 1, NOW(), NOW()),
       ('Product 3', 'Description 3', 300, 'image3.jpg', 3, 2, NOW(), NOW()),
       ('Product 4', 'Description 4', 400, 'image4.jpg', 4, 2, NOW(), NOW()),
       ('Product 5', 'Description 5', 500, 'image5.jpg', 5, 3, NOW(), NOW());

INSERT INTO categories (name, created_at, updated_at)
VALUES ('Category 1', NOW(), NOW()),
       ('Category 2', NOW(), NOW()),
       ('Category 3', NOW(), NOW()),
       ('Category 4', NOW(), NOW()),
       ('Category 5', NOW(), NOW());


INSERT INTO customers (name, email, phone, created_at, updated_at)
VALUES ('Customer 1', 'customer1@example.com', '123456789', NOW(), NOW()),
       ('Customer 2', 'customer2@example.com', '234567890', NOW(), NOW()),
       ('Customer 3', 'customer3@example.com', '345678901', NOW(), NOW()),
       ('Customer 4', 'customer4@example.com', '456789012', NOW(), NOW()),
       ('Customer 5', 'customer5@example.com', '567890123', NOW(), NOW());

INSERT INTO carts (customer_id, created_at, updated_at)
VALUES (1, NOW(), NOW()),
       (2, NOW(), NOW()),
       (3, NOW(), NOW()),
       (4, NOW(), NOW()),
       (5, NOW(), NOW());

INSERT INTO cart_items (cart_id, product_id, quantity, price, created_at, updated_at)
VALUES (1, 11, 2, 100.00, NOW(), NOW()),
       (2, 12, 1, 50.00, NOW(), NOW()),
       (3, 13, 3, 75.00, NOW(), NOW()),
       (4, 14, 1, 30.00, NOW(), NOW()),
       (5, 15, 2, 80.00, NOW(), NOW());


INSERT INTO orders (customer_id, total_amount, payment_method, shipping_address, created_at, updated_at)
VALUES (1, 100.00, 'Cash', '123 ABC Street, XYZ City', NOW(), NOW()),
       (2, 75.00, 'Credit Card', '456 DEF Street, XYZ City', NOW(), NOW()),
       (3, 60.00, 'PayPal', '789 GHI Street, XYZ City', NOW(), NOW()),
       (4, 40.00, 'Cash', '321 JKL Street, XYZ City', NOW(), NOW()),
       (5, 120.00, 'Credit Card', '654 MNO Street, XYZ City', NOW(), NOW());
;
INSERT INTO order_products (order_id, product_id, quantity, price, created_at, updated_at)
VALUES (1, 11, 2, 50.00, NOW(), NOW()),
       (1, 12, 1, 30.00, NOW(), NOW()),
       (2, 13, 3, 20.00, NOW(), NOW()),
       (3, 14, 2, 40.00, NOW(), NOW()),
       (4, 15, 1, 60.00, NOW(), NOW());



