CREATE TABLE IF NOT EXISTS `members` (
  `fullname` varchar(30) NOT NULL ,
  `username` varchar(30) NOT NULL ,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

INSERT INTO `members`(`fullname`,`username`,`email`,`password`) VALUES
('Ajay','ajay1297','ajay@gmail.com','aj@123456');