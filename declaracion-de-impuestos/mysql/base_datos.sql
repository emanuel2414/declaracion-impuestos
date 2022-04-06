create database declaracion_de_impuestos;

create table ingresos(
	cedula int primary key,
	fecha date,
	nombre_ingreso varchar(50),
	descripcion_ingreso varchar(50),
	ingreso_mensual int,
	impuestos int
);

create table gastos(
	cedula int primary key,
	fecha date,
	nombre_gasto varchar(50),
	descripcion_gasto varchar(50),
	valor_gastos int,
	beneficio int
);