CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    equipo VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    estado ENUM('Pendiente', 'En Proceso', 'Completado') DEFAULT 'Pendiente',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);