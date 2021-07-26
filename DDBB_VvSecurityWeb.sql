drop database vv_Web;

create database vv_Web;

use vv_Web;

create table Extras(
	Id int auto_increment not null,
	CaptorRonda text not null,
	CtrlAsis text not null,
	SuperExcl text not null,
	CamSeg text not null,
	AlarmSeg text not null,

	constraint pk_Extras primary key(Id)
);

INSERT INTO `extras`(`CaptorRonda`, `CtrlAsis`, `SuperExcl`, `CamSeg`, `AlarmSeg`) VALUES ('Captor de Ronda TEST','Control de Asistencia TEST','Supervisor Exclusivo TEST','Camara de Seguridad TEST','Alarma de Seguridad TEST');

CREATE table Servicios_Basicos(
	Id int auto_increment,
	Agua int not null,
	Luz int not null,
	Bano int not null,
	Casino int not null,
	Caseta int not null,
	Internet int not null,

	constraint pk_Basicos primary key (Id)
);

INSERT INTO Servicios_Basicos (Agua,Luz,Bano,Casino,Caseta,Internet) VALUES(1,1,0,1,1,0);

CREATE table Tipo_Servicio(
	Id int auto_increment,
	Ggss int not null,
	ServiAseoInd int not null,
	Caseta int not null,
	Otros text not null,

	constraint pk_Tipo_Servicio primary key (Id)

);

INSERT INTO Tipo_Servicio (Ggss,ServiAseoInd,Caseta,Otros) VALUES (1,1,1,'Otros Detalle TEST');

create table Referencia(
	Id int auto_increment,
	Nombre_Persona varchar(100) not null,
	Depto varchar(100) not null,

	constraint pk_Referencias primary key (Id)
);

insert into Referencia(Nombre_Persona,Depto) VALUES ('Nombre referencia TEST','Departamento referencia TEST');

create table Matriz_Servicio(
	Id int not null auto_increment,
	Ubicacion varchar(150) not null,
	Duracion varchar(20) not null,
	Referencia_Ubi Text not null,
	Jornada varchar(20) not null,
	Turno varchar(20) not null,
	HorarioLaboral time not null,
	Obervaciones text not null,
	TipoServicio_Id int,
	ServicioBasicos_Id int,
	Extras_Id int,
	Referencias_Id int,

	constraint pk_Servicio primary key(Id),
	constraint fk_Servicio_TipoServicio_Id foreign key (TipoServicio_Id) references Tipo_Servicio(Id),
	constraint fk_Servicio_ServicioBasicos_Id foreign key (ServicioBasicos_Id) references Servicios_Basicos(Id),
	constraint fk_Servicio_Extras_Id foreign key (Extras_Id) references Extras (Id),
	constraint fk_Servicio_Referencias_Id foreign key  (Referencias_Id) references Referencia(Id)

);

create table Requerimiento(
	Id int not null auto_increment,
	Nombre varchar(50) not null,
	Observacion text not null,
	Fecha_Ing date not null,
	Fecha_Fin date not null ,

	constraint pk_Requerimiento primary key (Id)
);

	INSERT INTO Requerimiento (Nombre,Observacion,Fecha_Ing,Fecha_Fin) VALUES ('Nombre requerimiento TEST','Observacion requerimiento TEST','2021/03/12','2021/03/13');


create table Empresas_CtrlRoll(
	Id int not null auto_increment,
	CtrlRoll_Id varchar(400) not null,
	Rut_Emp varchar(15) not null,
	Nombre_Fantasia varchar(300) not null,
	R_Social varchar(300) not null,
	Giro varchar(300) not null,

	constraint pk_Empresas_CtrlRoll primary key (Id)
);

	INSERT INTO Empresas_CtrlRoll(CtrlRoll_Id,Rut_Emp,Nombre_Fantasia,R_Social,Giro) VALUES('1234','12345-2','Nombre_Fantasia Ctrl_Roll TEST','R_Social Ctrl_Roll TEST',' Ctrl_Roll Giro TEST');

create table Estados(
	Id int not null auto_increment,
	Nombre varchar(50) not null,

	constraint pk_Estados primary key(Id)
);

insert into Estados(nombre) values('Activo');

create table Matriz_Requerimientos(
	Id int not null auto_increment,
	EmpresaCtrlRoll_Id int not null,
	Requerimiento_Id int not null,
	Estado_Id int not null,

	constraint pk_Matriz_Requerimientos primary key (Id),
	constraint fk_Matriz_Requerimientos_EmpresaCtrlRoll_Id foreign key (EmpresaCtrlRoll_Id) references Empresas_CtrlRoll (Id),
	constraint fk_Matriz_Requerimientos_Requerimiento_Id foreign key (Requerimiento_Id) references Requerimiento (Id),
	constraint fk_Matriz_Requerimientos_Estado_Id foreign key (Estado_Id) references Estados (Id)

);


create table Persona_Natural(
	Id int not null auto_increment,
	Rut varchar (15) not null,
	Primer varchar (100) not null,
	Segundo varchar (100) not null,
	Paterno varchar (100) not null,
	Materno varchar (100) not null,
	Fono varchar (20) not null,
	Direccion varchar(500) not null,
	Numero varchar(50) not null,
	Comuna varchar(150) not null,
	Ciudad varchar(150) not null,
	Mail varchar (400) not null,

	constraint pk_Persona_Natural primary key (Id)

);

insert INTO Persona_Natural(Rut,Primer,Segundo,Paterno,Materno,Fono,Direccion,Numero,Comuna,Ciudad,Mail) VALUES('1111-1','PrimerTEST','SegundoTEST','PaternoTEST','MaternoTEST','+569333333','DireccionTEST','123','ComunaTEST','CiudadTEST','MailTEST@MailTEST.CL');

create table Representante_Legal(
	Id int not null auto_increment,
	Rut varchar(15) not null,
	Primero varchar(400) not null,
	Segundo varchar(400) not null,
	Paterno varchar(400) not null,
	Materno varchar(400) not null,
	Fono varchar(20) not null,
	Mail varchar(400) not null,

	constraint pk_Representante_Legal primary key (Id)
);

INSERT INTO Representante_Legal(Rut,Primero,Segundo,Paterno,Materno,Fono,Mail) values('22222-2','PrimeroTEST','SegundoTEST','PaternoTEST','MaternoTEST','+569333333','MailTEST@MailTEST.CL');

create table Empresa(
	Id int not null auto_increment,
	Rut varchar(15) not null,
	Razon_Social varchar(400) not null,
	Giro_Comercial varchar(400) not null,
	Fono varchar(20) not null,
	Direccion varchar(400) not null,
	Numero varchar(10) not null,
	Comuna varchar(200) not null,
	Ciudad varchar(200) not null,
	Representante_Id int not null,

	constraint pk_Empresa primary key (Id),
	constraint fk_Empresa_Representante_Id foreign key (Representante_Id) references Representante_Legal (Id)

);



create table Cargos(
	Id int not null auto_increment,
	Nombre varchar(100) not null,

	constraint pf_Cargos primary key (Id)
);

INSERT INTO Cargos (nombre) values ('NombreTEST Cargo');

create table Contacto (
	Id int not null auto_increment,
	Primer varchar(200) not null,
	Segundo varchar(200) not null,
	Paterno varchar(200) not null,
	Materno varchar(200) not null,
	Fono varchar(15) not null,
	Mail varchar(400) not null,
	Cargo_Id int not null,

	constraint pk_Contacto primary key (Id),
	constraint fk_Contacto_Cargo_Id foreign key (Cargo_Id) references Cargos (Id)

);

create table Matriz_Cotizante(
	Id int not null auto_increment,
	Empresa_Id int not null,
	Contacto_Id int not null,
	Natural_Id int not null,
	Servicio_Id int not null,

	constraint pk_Matriz_Cotizantes primary key (Id),
	constraint fk_Matriz_Cotizante_Empresa_Id 	foreign key (Empresa_Id) 		references Empresa 			(Id),
	constraint fk_Matriz_Cotizante_Contacto_Id  foreign key (Contacto_Id)		references Contacto 		(Id),
	constraint fk_Matriz_Cotizante_Natural_Id	foreign key (Natural_Id) 		  references Persona_Natural	(Id),
	constraint fk_Matriz_Cotizante_Servicio_Id	foreign key (Servicio_Id)		references Matriz_Servicio	(Id)
);
create table Departamento(
	Id int not null auto_increment,
	nombre varchar(100) not null,

	constraint pk_Departamento primary key (Id)
);

INSERT INTO Departamento (nombre) values('Nombre Departamento TEST');

create table Usuarios(
	Id int not null auto_increment,
	Rut varchar(15) not null,
	Primero varchar(200) not null,
	Segundo varchar(200) not null,
	Paterno varchar(200) not null,
	Materno varchar(200) not null,
	Mail varchar(200) not null,
	Departamento_Id int not null,

	constraint pk_user primary key (Id),
	constraint fk_user_Departamento_Id 			foreign key(Departamento_Id)	references Departamento (Id)


);


create table Categorias(
	Id int not null auto_increment,
	Nombre varchar(450) not null,

	constraint pk_Categoria primary key (Id)
);

insert into Categorias (nombre) values('Nombre categorias TEST');

create table Noticias(
	Id int not null auto_increment,
	Fecha_registro date not null,
	Titulo varchar(450) not null,
	img varchar(450) not null,
	Contenido text not null,
	Categoria_Id int not null,

	constraint pk_Noticias primary key (Id),
	constraint fk_Noticias_Categoria_Id foreign key (Categoria_Id) references Categorias (Id)
);

-- constraint pk_[Nombre tabla local] primary key ('Id referencia')
-- constraint fk_[Nombre Tabla local]_[columna en local nombre] foreign key ('columna en local nombre') references 'tabla referencia'(Id referencia)
