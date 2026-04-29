CREATE DATABASE university_portal;
USE university_portal;

CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY,email VARCHAR(100),password VARCHAR(255));
CREATE TABLE admins(id INT AUTO_INCREMENT PRIMARY KEY,email VARCHAR(100),password VARCHAR(255));
CREATE TABLE students (
 id INT AUTO_INCREMENT PRIMARY KEY,
 fullname VARCHAR(100),
 gender VARCHAR(10),
 district VARCHAR(50),
 nationality VARCHAR(50),
 education VARCHAR(50),
 olevel TEXT,
 alevel TEXT,
 field VARCHAR(20),
 course VARCHAR(100),
 program VARCHAR(50),
 nin VARCHAR(20),
 contact VARCHAR(12),
 email VARCHAR(50),
 parent_name VARCHAR(100),
 parent_contact VARCHAR(20),
 parent_nin VARCHAR(20),
 status ENUM('pending','paid') DEFAULT 'pending',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    tx_ref VARCHAR(100) UNIQUE,
    flw_tx_id VARCHAR(100),
    amount INT,
    currency VARCHAR(10) DEFAULT 'UGX',
    phone VARCHAR(20),
    status VARCHAR(50),
    payment_method VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

