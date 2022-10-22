INSERT INTO Proyecto (id_proyecto,nombre_proyecto,presupuesto,materiales)
VALUES (0,"Maqueta Universidad",99.99,"Papel mache, pegamento, leds, foamy");

INSERT INTO AreaEspecialidad (id_especialidad,nombre_especialidad)
VALUES (0,"Electrónica");

INSERT INTO Estudiante (id_estudiante, nombres, apellidos, username, contrasena, estado, email, codigo_institucion)
VALUES (0,"Juan Alejandro","Pérez Hernández","jperez","toencrypt","1","jperez543@mail.com",409334);

INSERT INTO Institucion (id_institucion,nombre_institucion,telefono_contacto)
VALUES (0,"Colegio Ramza Beoulve","4954-7645");

INSERT INTO Grupo (id_grupo,nombre_grupo,codigo_especialidad,codigo_proyecto)
VALUES (0,"torogozes",0,0);

INSERT INTO coordinador (dui,nombres,apellidos,fecha_nacimiento,contrasena,telefono_contacto,codigo_institucion,codigo_especialidad,email,username,passwd,activo)
VALUES ("34436584-6","Ernesto Pacheco","Rios Celeste","10/4/1985","toencryptalso","4554-3423",543243,0,"erios@mail.com","erios","otracontra",1);

INSERT INTO Transaccion (id_transaccion,monto,fecha_hora,codigo_institucion,identificacion_patrocinador)
VALUES (0,55.55,"23/3/2021:10:11:12",344534,0);

--machote para generar inserts into:
/*
INSERT INTO table_name ()
VALUES ();

INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
*/

--hay que corregir gupo, doble passwd/contrasena,telefon
--ask saul for consistency