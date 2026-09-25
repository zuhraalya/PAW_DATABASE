CREATE DATABASE IF NOT EXISTS crud_film;
USE crud_film;

CREATE TABLE IF NOT EXISTS film (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    rating INT NOT NULL,
    review TEXT NOT NULL
);

INSERT INTO film (judul, genre, rating, review) VALUES
('Run', 'Romance', 8, 'Bagus seru banget filmnya enak ditonton'),
('27 Dresses', 'Romance', 8, 'Romcom, happy ending');
