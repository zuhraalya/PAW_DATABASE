CREATE DATABASE IF NOT EXISTS pemweb_film;
USE pemweb_film;


CREATE TABLE IF NOT EXISTS film (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    rating INT NOT NULL,
    review TEXT NOT NULL
);


INSERT INTO film (judul, genre, rating, review) VALUES
('27 Dresses', 'Romance', 8, 'Romcom, happy ending');
