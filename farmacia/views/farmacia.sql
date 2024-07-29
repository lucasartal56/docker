
CREATE TABLE clientes(
    cliente_id SERIAL PRIMARY KEY,
    cliente_nombre VARCHAR (40),
    cliente_apellido VARCHAR (40),
    cliente_nit INTEGER,
    cliente_telefono INTEGER,
    cliente_situacion SMALLINT DEFAULT 1

);

CREATE TABLE productos(
    producto_id SERIAL PRIMARY KEY,
    producto_nombre VARCHAR (40),
    prodcuto_descripcion VARCHAR (100), 
    producto_precio MONEY (10,2),
    producto_situacion SMALLINT DEFAULT 1
);