CREATE DATABASE gym_db;
USE gym_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('user','admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE memberships (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    duration INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    trainer VARCHAR(100),
    category VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO memberships (title,duration,price,trainer,category) VALUES
('Basic Plan',30,29.99,'John Smith','Fitness'),
('Premium Plan',90,79.99,'Anna Lee','Bodybuilding'),
('Yoga Plan',60,49.99,'Kate Brown','Yoga');