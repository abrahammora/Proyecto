CREATE TABLE 'usuarios'(
	'id' int auto_increment primary key NOT NULL,
	'nombre' varchar(50) DEFAULT NULL,
	'app' varchar(50) DEFAULT NULL,
	'apm' varchar(50) DEFAULT NULL,
	'fnac' date DEFAULT NULL,
	'salario' float(20,4) DEFAULT NULL
);

INSERT INTO 'usuarios' ('nombre','app','apm','fnac','salario')
VALUES
('carlos','diaz','luna','2017-10-21',25000.0000),
('pablo','rodriguez','prisco',NULL,NULL),
('pedro','perez','perez','1980-10-10',12000.0000),
('jorge','perez','perez','1980-04-20',16000.4502),
('hugo','victoria','martinez','1970-12-19',16000.8896),
('carlos','roomero','muñoz','1986-05-15',14000.0000),
('mariana','olvera','romero','1990-06-01',10000.0000),
('arantza','rodriguez','rodriguez','1973-09-19',14000.5996),
('eduardo','montañez','lopez','1992-01-12',9000.4004),
('andrea','huerta','pimentel','1986-07-08',14000.5996),
('victor','peña','valle','1984-03-18',19000.0000);

CREATE TABLE 'x1' (
'id' int(11),'nombre' varchar(50),'app' varchar(50),'apm' varchar(50),'fnac' date,'salario' float(20,4)
);

INSERT INTO 'x1' ('id','nombre','app','apm','fnac','salario')
VALUES
(1,'pablo','rodriguez','prisco',NULL,NULL),
(2,'pedro','perez','perez','1980-10-10',12000.0000),
(3,'jorge','perez','perez','1980-04-20',16000.4502),
(4,'hugo','victoria','martinez','1970-12-19',16000.8896),
(6,'carlos','roomero','muñoz','1986-05-15',14000.0000),
(7,'mariana','olvera','romero','1990-06-01',10000.0000),
(8,'arantza','rodriguez','rodriguez','1973-09-19',14000.5996),
(9,'eduardo','montañez','lopez','1992-01-12',9000.4004),
(10,'andrea','huerta','pimentel','1986-07-08',14000.5996),
(11,'victor','peña','valle','1984-03-18',19000.0000);


CREATE TABLE 'x2' (
'id' int(11),'nombre' varchar(50),'app' varchar(50),'apm' varchar(50),'fnac' date
);

DROP TABLE iF EXISTS 'x2';
CREATE ALGORITHM=UNDEFINED DEFINER='root'@'localhost' SQL
SECURITY DEFINER VIEW 'x2' AS select 'x1'.'id' AS 'id','x1'.'nombre' AS 'nombre','x1'.'app' 
AS 'app','x1'.'apm' AS 'apm','x1'.'fnac' AS 'fnac' from 'x1';

ALTER TABLE 'usuarios'
	ADD PRIMARY KEY ('id');
COMMIT;

