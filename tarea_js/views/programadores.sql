CREATE TABLE clientes(
    cliente_id SERIAL PRIMARY KEY,
    cli_nombre VARCHAR (50),
    cli_apellido VARCHAR (50),
    cli_nit INTEGER,
    cli_telefono INTEGER,
    cli_situacion SMALLINT DEFAULT 1

);

CREATE TABLE programadores (
    pro_id SERIAL PRIMARY KEY,
    pro_grado VARCHAR (30),
    pro_arma varchar (30),
    pro_nombre VARCHAR (30),
    pro_apellido VARCHAR (30),
    pro_catalogo INTEGER NOT NULL, 
    pro_situacion SMALLINT DEFAULT 1
    
);

