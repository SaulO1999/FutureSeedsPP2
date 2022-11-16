--sin requisitos

INSERT INTO institucion (nombre_institucion,numero_telefono)
VALUES ('Colegio Ramza Beoulve','4954-7645');

INSERT INTO area_especialidad (nombre_especialidad)
VALUES ('Electrónica');

--con requisitos

INSERT INTO coordinador (dui,nombres,apellidos,fecha_nacimiento,contrasena,numero_telefono,codigo_institucion,codigo_especialidad,correo_electronico,nombre_usuario,activo)
VALUES ('34436584-6','Ernesto Pacheco','Rios Celeste','1985-12-30','toencryptalso','4554-3423',3,1,'erios@mail.com','erios',true);

INSERT INTO proyecto (nombre_proyecto,presupuesto,materiales,codigo_especialidad)
VALUES ('Maqueta Universidad',99.99,'Papel mache, pegamento, leds, foamy',1);

INSERT INTO grupo (nombre_grupo,codigo_especialidad,codigo_proyecto)
VALUES ('torogozes',1,1);

INSERT INTO patrocinador (dui,nombres,apellidos,fecha_nacimiento,numero_telefono,codigo_especialidad,correo_electronico,nombre_usuario,contrasena,activo,titulo,nombre_publico_empresa,razon_social,nit)
VALUES ('45894356-4','Ernesto','Caceres','1987-11-29','3432-4544',1,'ecaceres@mail.com','ecaceres','semeolvido',true,'Lic.','Buzos SV','Buzos SV S.A de C.V.','12345678901234');

INSERT INTO estudiante (nombres, apellidos, nombre_usuario, contrasena, estado, correo_electronico, codigo_institucion,codigo_grupo,codigo_encargado)
VALUES ('Juan Alejandro','Pérez Hernández','jperez','toencrypt',true,'jperez543@mail.com',1,1,'34436584-6');

INSERT INTO patrocinador (dui,nombres,apellidos,fecha_nacimiento,numero_telefono,codigo_especialidad,correo_electronico,nombre_usuario,contrasena,activo,titulo,nombre_publico_empresa,razon_social,nit)
VALUES ('45594222-1','Javier','Casas','09/05/1988','3758-4236',1,'jcasas@mail.com','jcasas','1234',true,'Lic.','Kaiser SV','Kaiser SV S.A de C.V.','12345648951224');

UPDATE patrocinador
SET ruta_imagen='Imagenes/Patrocinadores/construMarket.png'
WHERE patrocinador.dui='45894356-4'

--machote para generar inserts into:
/*
INSERT INTO table_name ()
VALUES ();

INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
*/

--hay que corregir gupo, doble passwd/contrasena,telefon
--ask saul for consistency
