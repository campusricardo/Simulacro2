-- SQLBook: Code
USE alquilartemis;
-- Pagina
CREATE TABLE salida(
    salida_id INT PRIMARY KEY AUTO_INCREMENT,
    id_constructora INT NOT NULL ,
    fecha_salida VARCHAR(60) NOT NULL,
    subtotalPeso INT NOT NULL,
    id_empleado INT NOT NULL,
    placatransporte VARCHAR(10) NOT NULL,
    observaciones VARCHAR(60) NOT NULL,
    FOREIGN KEY (id_constructora) REFERENCES constructoras(id_constructora),
    FOREIGN KEY (id_empleado) REFERENCES empleados(id_empleado)
);


CREATE TABLE salida_detalle (
    salida_id INT PRIMARY KEY AUTO_INCREMENT,
    producto_id INT NOT NULL,
    obra_id INT NOT NULL,
    cantidad_salida INT NOT NULL,
    valorUnitario INT NOT NULL,
    fecha_standBye TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    estado INT NOT NULL,
    valorTotal INT NOT NULL,
    id_empleado INT NOT NULL,    
    FOREIGN KEY (salida_id) REFERENCES salida(salida_id),
    FOREIGN KEY (obra_id) REFERENCES obras(obra_id),
    FOREIGN KEY (id_empleado) REFERENCES empleados(id_empleado)
);



CREATE TABLE entrada (
    entrada_id INT PRIMARY KEY AUTO_INCREMENT,
    id_empleado INT NOT NULL,
    id_constructora INT NOT NULL,
    fecha_entrega VARCHAR(60) NOT NULL,
    observaciones VARCHAR(60) NOT NULL,
    FOREIGN KEY (id_empleado) REFERENCES empleados(id_empleado),
    FOREIGN KEY (id_constructora) REFERENCES constructoras(id_constructora)
);

DROP TABLE entrada;

CREATE TABLE entrada_detalle (
    entrada_id INT PRIMARY KEY,
    id_inventario INT NOT NULL,
    obra_id INT NOT NULL,
    entrada_cantidad INT NOT NULL,
    entrada_cantidad_propia INT NOT NULL,
    entrada_cantidad_subalquilada INT NOT NULL,
    estado VARCHAR(60) NOT NULL, 
    FOREIGN KEY (entrada_id) REFERENCES entrada(entrada_id),
    FOREIGN KEY (id_inventario) REFERENCES inventario(id_inventario),
    FOREIGN KEY (obra_id) REFERENCES obras(obra_id)
    
);
DROP TABLE entrada_detalle;

-- Se llena en phpmyadmin
CREATE TABLE obras (
    obra_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_obra VARCHAR(100) NOT NULL,
    lugar_obra VARCHAR(60) NOT NULL
);

CREATE TABLE inventario (
    id_inventario INT PRIMARY KEY,
    id_producto INT NOT NULL,
    cantidadInicial INT NOT NULL,
    cantidadIngresos INT NOT NULL,
    CantidadSalidas INT NOT NULL,
    CantidadFinal INT NOT NULL,
    FechaInventario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    TipoOperacion INT NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

DROP TABLE inventario;

DROP TABLE inventario;



CREATE TABLE constructoras (
  id_constructora INT PRIMARY KEY AUTO_INCREMENT,
  nombre_constructora varchar(60) DEFAULT NULL,
  telefono_constructora int NOT NULL );


DROP TABLE constructoras;