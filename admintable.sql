CREATE TABLE admin
(
	id int(15) primary key,
	username varchar(20) unique,
	password varchar(30) not null
)