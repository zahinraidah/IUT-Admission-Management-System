CREATE TABLE `iutatms`.`applicant` 
( 
	`id` INT(10) NOT NULL AUTO_INCREMENT, 
	`pin` VARCHAR(10) NOT NULL , 
	`password` VARCHAR(10) NOT NULL , 
	PRIMARY KEY (`id`), UNIQUE (`pin`)
) ENGINE = InnoDB;

CREATE TABLE DemoTransaction
(
	TransactionID VARCHAR(20),
	TransactionType VARCHAR(15),
	Amount int(10),
	Account_no int(13),
	From_Account int(13),
	PRIMARY KEY (TransactionID)
) ENGINE = InnoDB;

CREATE TABLE Transaction
(
	Pin bigint(20),
	TransactionID VARCHAR(20),
	TransactionType VARCHAR(15),
	Amount int(10),
	PRIMARY KEY (TransactionID), UNIQUE (pin)
) ENGINE = InnoDB;

CREATE TABLE DemoDatabase
(
	RegistrationNo INT(15) PRIMARY KEY,
	Name VARCHAR(40),
	DOB Date,
	SSC_GPA FLOAT(10) NOT NULL,
	HSC_GPA FLOAT(10) NOT NULL,
	HSC_Math FLOAT(10) NOT NULL,
	HSC_Physics FLOAT(10) NOT NULL,
	HSC_Chemistry FLOAT(10) NOT NULL,
	HSC_English FLOAT(10) NOT NULL
);


