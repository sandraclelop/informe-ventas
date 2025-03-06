-- DROP DATABASE ventas_db;
CREATE DATABASE ventas_db;
USE ventas_db;

CREATE TABLE empresas (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR (100)
);

CREATE TABLE ventas (
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_empresa INT,
    CONSTRAINT id_empresa_ve_fk FOREIGN KEY (id_empresa) REFERENCES empresas (id)
	ON UPDATE CASCADE ON DELETE CASCADE,
    num_factura INT,
    fecha_venta DATE,
    comprador VARCHAR (150),
    articulos_vendidos INT,
    valor_total FLOAT
);

INSERT INTO empresas (nombre) VALUES ('Mercadona');
INSERT INTO empresas (nombre) VALUES ('Carrefour');
INSERT INTO empresas (nombre) VALUES ('Ahorramás');
INSERT INTO empresas (nombre) VALUES ('DIA');
INSERT INTO empresas (nombre) VALUES ('ALDI');
INSERT INTO empresas (nombre) VALUES ('LIDL');

INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (2, 43789, "2022-01-10", "Carrefour Express", 52, 1094.60);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (1, 67899, "2024-10-10", "Mercadona Albacete", 96, 2365.68);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (3, 45679, "2025-02-26", "Ahorramás Sevilla", 24, 1356.66);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (4, 34895, "2024-12-14", "Maxi Dia", 85, 2050.20);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (5, 25184, "2024-11-27", "Aldi Valencia", 12, 600.40);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (2, 48699, "2024-10-27", "Carrefour Express", 89, 2304.75);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (6, 98789, "2025-01-10", "Lidl Cuenca", 92, 1896.68);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (5, 56899, "2024-11-18", "Aldi Zaragoza", 59, 2356.60);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (1, 78989, "2024-03-15", "Mercadona Granada",78, 5000.60);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (2, 56249, "2024-10-26", "Carrefour Madrid", 89, 3294.60);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (2, 56248, "2024-11-10", "Carrefour Express", 95, 5294.20);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (1, 46446, "2023-10-10", "Mercadona Sevilla", 36, 1005.28);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (3, 86597, "2024-12-26", "Ahorramás Albacete", 20, 1220.60);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (4, 32314, "2024-10-14", "Maxi Dia", 80, 2050.20);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (5, 28975, "2024-11-27", "Aldi Madrid", 35, 690.40);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (2, 48964, "2024-11-27", "Carrefour Barcelona", 95, 3304.75);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (6, 98564, "2024-10-18", "Lidl Cuenca", 103, 9322.68);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (5, 58934, "2022-10-18", "Aldi Zaragoza", 63, 2563.60);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (1, 72356, "2024-11-15", "Mercadona Granada",98, 5086.60);
INSERT INTO ventas (id_empresa, num_factura, fecha_venta, comprador, articulos_vendidos, valor_total) VALUES (2, 56894, "2023-08-26", "Carrefour Madrid", 102, 4004.60);