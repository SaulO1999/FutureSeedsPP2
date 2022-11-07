select * from institucion;
select * from area_especialidad;
select * from coordinador;
select * from proyecto;
select * from grupo;
select * from patrocinador;
select * from estudiante;

ALTER TABLE patrocinador drop column empresa;

ALTER TABLE estudiante
drop constraint fk_id_coordinador;

ALTER TABLE estudiante
add constraint fk_id_coordinador FOREIGN KEY (codigo_encargado) REFERENCES coordinador (id);

