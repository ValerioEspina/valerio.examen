<? include_once '_funciones.php'?>

<? $titulo="DDBB Alumni.Valerio."?>
<? include_once '_header.php'?>


<?php

$sql="-- Eliminar tabla Alumnos si existe
DROP TABLE IF EXISTS Alumnos;";
consulta($sql);

$sql="-- Crear tabla para almacenar información de los alumnos
CREATE TABLE Alumnos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    fechaNacimiento DATE,
    direccion VARCHAR(255),
    email VARCHAR(100),
    telefono VARCHAR(15)
);";
consulta($sql);

$sql="-- Insertar algunos alumnos de ejemplo
INSERT INTO Alumnos (Nombre, Apellido, FechaNacimiento, Direccion, Email, Telefono) VALUES
('Juan', 'Pérez', '2000-05-15', 'Calle Principal 123', 'juan@example.com', '123456789'),
('María', 'González', '2001-07-20', 'Avenida Central 456', 'maria@example.com', '987654321'),
('Pedro', 'Martínez', '1999-12-10', 'Calle Secundaria 789', 'pedro@example.com', '555123456'),
('Laura', 'Sánchez', '2002-02-28', 'Paseo Peatonal 321', 'laura@example.com', '333999777'),
('Ana', 'López', '1998-08-05', 'Plaza Principal 654', 'ana@example.com', '777888999');
";
consulta($sql);


?>



<? include_once '_footer.php'?>
