use nuschi;
create table alumnos(
Nombre varchar(50),
Apellido varchar(50),
Identificacion bigint,
GradoCursado bigint,
GradoAspirante bigint,
Edad bigint,
Sexo varchar(10),
Direccion bigint,
Barrio varchar(20),
Ciudad varchar(20),
Telefono bigint,
Correo varchar(20),
primary key(Identificacion,Nombre));
select * from alumnos
drop table alumnos;
show tables;

