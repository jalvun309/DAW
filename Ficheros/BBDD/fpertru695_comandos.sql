CREATE DATABASE ies_trafalgar;

USE ies_trafalgar;

CREATE TABLE 1_daw (
    expediente int,
    dni varchar(9),
    nombre varchar(30),
    domicilio varchar(50)
);

# INSERT INTO 1_daw (EXPEDIENTE, DNI, NOMBRE, DOMICILIO)
# VALUES (129861, '12345678S', 'Miguel Pérez','calle avenida 123');

SELECT * from 1_daw;