create database Dwash
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

use Dwash;
  
  -- ----------------------
  -- tabla admin
  -- ----------------------
  create table admin(
  id int(10) not null auto_increment ,
  nombre varchar(200) not null,
  nick varchar(200) not null,
  contrasena varchar(200) not null,
  primary key(id));
  
  
 create table usuarios(
 id int(10) not null auto_increment,
 nombre varchar(100) not null,
 apellidos varchar(200) not null,
 edad int(3) not null,
 usuario varchar(200) not null,
 contrasena varchar(255) not null,
 correo varchar(255) not null,
 Primary key(id)
 );


create table visitas(
id int(10) not null AUTO_INCREMENT,
fecha  timestamp not null default current_timestamp,
user int(10) not null,
servicio varchar(200) not null,
estado  varchar (200) not null, 
Primary key(id),
Foreign key (user) REFERENCES usuarios(id) on update cascade on delete cascade);


create table promociones(
id int(10) not null AUTO_INCREMENT,
promociones varchar(200) not null,
fecha_vencimiento varchar(200) not null,
Primary key(id)
);

CREATE TABLE premios(
id int(10) not null  AUTO_INCREMENT,
premio varchar(200) not null,
detalles varchar(255) not null,
num_visitas varchar(200) not null,
Primary key(id));
    
    
   


  -- INSERTS
  -- admin
  insert into admin values (1,'administrador','admin','admin');

  -- usuarios

  insert into usuarios VALUES (1,'Alfredo','Zurita',20,'alfredoz134','zurita1234','alfredoguevara13@gmail.com'),
  (2,'Ramón','Mata',22,'moncmata','MATA590987','mata2448@gmail.com');

  insert into usuarios VALUES (3,'Estefania','Rodriguez',22,'estfania','popotes','1430100@upv.edu.mx');

  -- visitas

  insert into visitas VALUES (1,now(),1,'Lavado','normal'),(2,now(),1,'encerado','normal'),(3,now(),2,'Lavado','normal'),(4,now(),3,'encerado','normal');

  -- promociones 
 insert into promociones VALUES (1,'Lavado 25%','2018-11-20'),
 (2,'Encerado 25%','2018-11-25'),
 (3,'Lavado y Aspirado Camioneta 25%','2018-11-22'),
 (4,'Lavado y Aspirado Carro 30%','2018-11-20'),
 (5,'Lavado , Aspirado y Encerado Camioneta 20%','2018-11-15'),
 (6,'Lavado , Aspirado y Encerado Carro 25%','2018-11-20');


-- 
 insert into premios values (1,'Lavada gratis','Una lavada gratis Auto o Camioneta','5 visitas'),
 (2,'Encerado Gratis','Encerado gratis para su auto o camioneta','7 visitas'),
 (3,'Liqiuido Pulidor 750gr','Botella con liquido para su automovil','10 visitas'),
 (4,'Lavado y Encerado al 60%','Lavado & Encerado para su automovil con descuento','15 visitas'),
 (5,'Cera Super Hard Shell','Producto legendario para maxima protección y brillo','20 visitas'),
 (7,'Cupón cambio de 5 lavados free','Cupon para lavados gratis','25 visitas'),
 (8,'Encerado Gratis','Encerado gratis para su auto o camioneta','27 visitas'),
 (9,'Abrillantador para neumaticos','Espuma abrillantadora para neumaticos','30 Visitas'),
 (10,'Restaurador de Mica de Faro','Restaurador de Mica de faro 700ml','35 visitas');

-- iiner join pruebas
SELECT v.id , v.fecha , CONCAT(u.nombre ,' ',u.apellidos) as Nombre , v.servicio , v.estado
FROM visitas v
INNER JOIN usuarios u on u.id = v.user
ORDER BY id asc;


SELECT v.id , v.fecha , u.id as Nombre , v.servicio , v.estado
FROM visitas v
INNER JOIN usuarios u on u.id = v.user
where u.id = 3
ORDER BY id asc;

update usuarios set usuario = 'moncmata' where id = 2; 

select * from premios;
select * from visitas;

select count(id) 
from visitas 
where user = 1;

