CREATE TABLE registros (
  id INT(11) primary key auto_increment,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  email VARCHAR(70),
  password VARCHAR(50),
  avatar MEDIUMBLOB NOT NULL
);