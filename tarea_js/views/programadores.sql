CREATE TABLE programadores (
    pro_id SERIAL PRIMARY KEY,
    pro_grado VARCHAR (30),
    pro_arma varchar (30),
    pro_nombre VARCHAR (30),
    pro_apellido VARCHAR (30),
    pro_catalogo INTEGER NOT NULL, 
    pro_situacion SMALLINT DEFAULT 1
);

CREATE TABLE aplicaciones (
    ap_id SERIAL PRIMARY KEY,
    ap_nombre VARCHAR (30),
    ap_descripcion VARCHAR (50),
    ap_situacion SMALLINT DEFAULT 1
);

CREATE TABLE tareas (
    ta_id SERIAL,
    ta_nombre VARCHAR (50),
    ta_fecha DATETIME YEAR TO DAY, 
    ta_situacion SMALLINT DEFAULT 1,
    ta_aplicacion INTEGER, 
    PRIMARY KEY (ta_id),
    FOREIGN KEY (ta_aplicacion) REFERENCES aplicaciones (ap_id)
);