CREATE TABLE `guide` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `Name` varchar(255) NOT NULL,
 `Certifications` varchar(255) DEFAULT NULL,
 PRIMARY KEY (`ID`)
);

INSERT INTO guide (Name, Certifications) VALUES ('1', 'Handsome Gentleman');