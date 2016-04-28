INSERT INTO car_models (id, name, price, image, type_car_id, state_id)
VALUES (1, 'Fox', 10000, 'fox.jpg', 1, 1),
	   (2, 'Golf', 10000, 'golf.jpg', 1, 1),
	   (3, 'Polo', 10000, 'polo.jpg', 2, 1),
	   (4, 'Passat', 20000, 'passat.jpg', 2, 1),
	   (5, 'Touareg', 15000, 'touareg.jpg', 3, 1),
	   (6, 'New Beetle', 15000, 'beetle.jpg', 1, 1);

INSERT INTO services (name, description, price, state_id)
VALUES ('Instalacion de papel ahumado.', 'El precio no incluye el papel ahumado.', 10000, 1),
	   ('Limpieza de tapicería.', 'Profunda limpieza de tapicería.', 10000, 1),
	   ('Instalación de alarmas.', 'El precio no incluye la alarma.', 10000, 1),
	   ('Instalación de selenoides en las puertas.', 'Selenoides para apertura de puertas automáticas.', 20000, 1),
	   ('Cambio de Aceite y filtro.', 'El precio incluye el no filtro.', 15000, 1),
	   ('Mecánica general.', 'Previa revisión.',15000, 1);	   