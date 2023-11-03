-- Crea la tabla alumno con los campos id (auto-incremental), nombre, apellidos, email y edad
CREATE TABLE alumno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    edad INT
);

-- Inserta algunos registros manualmente
INSERT INTO alumno (nombre, apellidos, email, edad) VALUES ('Juan', 'Pérez', 'juan@example.com', 25);
INSERT INTO alumno (nombre, apellidos, email, edad) VALUES ('María', 'Gómez', 'maria@example.com', 22);
INSERT INTO alumno (nombre, apellidos, email, edad) VALUES ('Carlos', 'López', 'carlos@example.com', 24);
