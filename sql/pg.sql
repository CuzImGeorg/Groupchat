CREATE TABLE benutzer(
	id serial PRIMARY KEY,
	vorname varchar(63),
	nachname varchar(63),
	nickname varchar(63),
	password varchar(63)


);

CREATE TABLE message(
	id serial PRIMARY KEY,
	msgtext varchar(1023),
	time TIMESTAMP,
       	benutzerid int,

	FOREIGN KEY(benutzerid) REFERENCES benutzer(id) 
 

);
