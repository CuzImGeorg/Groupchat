CREATE TABLE benutzer(
	id serial PRIMARY KEY,
	vorname varchar(63),
	nachname varchar(63),
	nickname varchar(63),
	password varchar(63)


);

INSERT INTO benutzer(vorname, nachname, nickname, password) VALUES ('admin', 'admin', 'admin' ,'sadasdakksdasdasdsadasd');

CREATE TABLE message(
	id serial PRIMARY KEY,
	msgtext varchar(1023),
	time TIMESTAMP,
    benutzerid int,

	FOREIGN KEY(benutzerid) REFERENCES benutzer(id) 

);

INSERT INTO message (msgtext, time, benutzerid) VALUES ('Willkommen und Abschied beim Chat! Ich hoffe Sie haben viele Glücksgefühle mit ' ||
                                                        'Ihren sogennanten Freunden sich eine Liste von Buchstaben zu schicken ' ||
                                                        'die von einer Datenverarbeitungsanlage in ein elektronischen Karteikasten ' ||
                                                        'für bessere Zeiten aufbewährt werden um sie von anderen Teilnehmern der Zeichenfolge' ||
                                                        'austauschanwendung entgegenzunehmen und zu interpretiern in der Zuversicht ebenfahs ein größe ' ||
                                                        'Ahnzahl  von 0 en und 1 sen zu erhalten die ein Magisches Gerät in eine Für Mitglieder der Spezies Mensch ' ||
                                                        'verstänlichen Ausdruckweiße trasformiert. '
, now(), 1);
