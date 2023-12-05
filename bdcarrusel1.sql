-- Crea la base de datos
CREATE DATABASE bdcarrusel1;

-- Selecciona la base de datos
USE bdcarrusel1;

-- Crea la tabla "usuarios" con las restricciones
CREATE TABLE registro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    CONSTRAINT chk_valid_email CHECK (email LIKE '%@%')
); 