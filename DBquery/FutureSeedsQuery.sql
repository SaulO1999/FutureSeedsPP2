CREATE TABLE Proyecto (
	id_proyecto serial PRIMARY KEY,
	nombre_proyecto varchar(200) NOT NULL,
	presupuesto integer NOT NULL,
	materiales varchar(200) NOT NULL
);

CREATE TABLE AreaEspecialidad (
	id_especialidad serial PRIMARY KEY,
	nombre_especialidad varchar(50) NOT NULL
);

CREATE TABLE Estudiante (
	id_estudiante serial PRIMARY KEY,
	nombres varchar(50) NOT NULL,
	apellidos varchar(50) NOT NULL,
	username varchar(50) NOT NULL,
	contrasena varchar(50) NOT NULL,
	estado boolean NOT NULL,
	email varchar(255) NOT NULL,
	codigo_institucion integer NOT NULL
);

CREATE TABLE Institucion (
	id_institucion serial PRIMARY KEY,
	nombre_institucion varchar(50) NOT NULL,
	telefono_contacto varchar(50)
);

CREATE TABLE Gupo (
	id_grupo serial PRIMARY KEY,
	nombre_grupo varchar(50) NOT NULL,
	codigo_especialidad integer NOT NULL,
	codigo_proyecto integer NOT NULL
);

CREATE TABLE coordinador (
	dui varchar(10) PRIMARY KEY,
	nombres varchar(50) NOT NULL,
	apellidos varchar(50) NOT NULL,
	fecha_nacimiento DATE NOT NULL,
	contrasena varchar(50) NOT NULL,
	telefon_contacto varchar(50),
	codigo_institucion integer NOT NULL,
	codigo_especialidad integer NOT NULL,
	email varchar(255) NOT NULL,
	username varchar(50) NOT NULL,
	passwd varchar(50) NOT NULL,
	activo boolean NOT NULL
);

CREATE TABLE Patrocinador (
	dui varchar(10) PRIMARY KEY,
	nombres varchar(50) NOT NULL,
	apellidos varchar(50) NOT NULL,
	fecha_nacimiento DATE NOT NULL,
	telefono_contacto varchar(50),
	sexo varchar(50),
	empresa varchar(50),
	codigo_especialidad integer NOT NULL,
	codigo_proyecto integer,
	email varchar(255) NOT NULL,
	username varchar(50) NOT NULL,
	psswd varchar(50) NOT NULL,
	activo boolean NOT NULL
);

CREATE TABLE Transaccion (
	id_transaccion serial PRIMARY KEY,
	monto integer NOT NULL,
	fecha_hora TIMESTAMP NOT NULL,
	codigo_institucion integer NOT NULL,
	identificacion_patrocinador varchar(10) NOT NULL
);

ALTER TABLE transaccion
add constraint fk_id_institucion FOREIGN KEY (codigo_institucion) REFERENCES institucion (id_institucion);

ALTER TABLE transaccion
add constraint fk_id_patrocinador FOREIGN KEY (identificacion_patrocinador) REFERENCES patrocinador (dui);

ALTER TABLE patrocinador
add constraint fk_id_especialidad FOREIGN KEY (codigo_especialidad) REFERENCES AreaEspecialidad (id_especialidad);

ALTER TABLE patrocinador
add constraint fk_id_proyecto FOREIGN KEY (codigo_proyecto) REFERENCES proyecto (id_proyecto);

ALTER TABLE coordinador
add constraint fk_id_especialidad FOREIGN KEY (codigo_especialidad) REFERENCES AreaEspecialidad (id_especialidad);

ALTER TABLE coordinador
add constraint fk_id_institucion FOREIGN KEY (codigo_institucion) REFERENCES institucion (id_institucion);

ALTER TABLE gupo
add constraint fk_id_especialidad FOREIGN KEY (codigo_especialidad) REFERENCES AreaEspecialidad (id_especialidad);

ALTER TABLE gupo
add constraint fk_id_proyecto FOREIGN KEY (codigo_proyecto) REFERENCES proyecto (id_proyecto);

ALTER TABLE estudiante
add constraint fk_id_institucion FOREIGN KEY (codigo_institucion) REFERENCES institucion (id_institucion);

ALTER TABLE estudiante
add constraint fk_id_grupo FOREIGN KEY (codigo_grupo) REFERENCES gupo (id_grupo);

ALTER TABLE estudiante
add constraint fk_id_coordinador FOREIGN KEY (codigo_encargado) REFERENCES coordinador (dui);

ALTER TABLE proyecto
add constraint fk_area_especialidad FOREIGN KEY (codigo_especialidad) REFERENCES AreaEspecialidad (id_especialidad);

ALTER TABLE proyecto ADD column codigo_especialidad integer NOT NULL;

ALTER TABLE estudiante ADD column codigo_grupo integer NOT NULL;

ALTER TABLE estudiante ADD column codigo_encargado varchar(10) NOT NULL;

ALTER TABLE patrocinador drop constraint fk_id_especialidad;

ALTER TABLE patrocinador drop column sexo;

ALTER TABLE patrocinador ADD COLUMN titulo varchar(50);

ALTER TABLE patrocinador ADD COLUMN nombre_publico_empresa varchar(50);

ALTER TABLE patrocinador ADD COLUMN razon_social varchar(50);

ALTER TABLE patrocinador ADD COLUMN NIT varchar(14);