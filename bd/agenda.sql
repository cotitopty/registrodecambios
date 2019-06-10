

create database pruebas;
use pruebas;

create table cambioscartonesa(
			id int auto_increment,
			tipo varchar(50),
			objeto varchar(50),
			departamento varchar(50),
			solicitado_por varchar(50),
			autorizado_por varchar(50),
			responsable varchar(50),
			cerificado_por varchar(50),
			fecha_cambio date,
			causa_cambio varchar(100),
			primary key(id)
					);

create table cartonesa_dep(
				id int auto_increment,
				nombre VARCHAR(5),
				primary key(id)
				);

create table cartonesa_user(
		     id int auto_increment,
			 departamno varchar(50),
			 nombre varchar(20),
			 apellido varchar(50),
			 primary KEY(id)
			);