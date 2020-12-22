INSERT INTO DemoDatabase VALUE (1247109601,'Maliha Noushin Raida','1998-01-01', '5.00', '5.00', '5', '5', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109602,'Shahriar Anika','1998-12-14', '5.00', '5.00', '5', '5', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109603,'Atandrila Anuva','1999-03-03', '5.00', '5.00', '5', '5', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109604,'Fahim Arsad Nafis','1998-04-12', '5.00', '5.00', '5', '5', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109605,'Abdul Bari','1998-01-19', '5.00', '4.92', '5', '5', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109606,'Md. Tanvir Hossain','1998-07-25', '4.90', '4.75', '5', '4', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109607,'Nafis Saami Azad','1999-07-10', '4.75', '5.00', '5', '5', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109608,'Eftekhar Sazid','1999-01-15', '5.00', '4.75', '5', '5', '4', '4');
INSERT INTO DemoDatabase VALUE (1247109609,'Rafid Islam','1998-12-12', '4.75', '4.92', '4', '5', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109610,'Al Muhaimin','1998-12-29', '5.00', '5.00', '5', '5', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109611,'Ratun Rahman','1999-03-21', '5.00', '5.00', '5', '5', '4', '5');
INSERT INTO DemoDatabase VALUE (1247109612,'Jarin Tanzim Meem','1998-11-20', '5.00', '4.92', '4', '5', '4', '5');
INSERT INTO DemoDatabase VALUE (1247109613,'Md Akib Ahmed','1999-11-01', '5.00', '5.00', '5', '5', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109614,'Istiak Siam','1999-07-01', '5.00', '5.00', '5', '5', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109615,'Mahfuz Ahmed','1998-05-31', '5.00', '5.00', '5', '5', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109616,'Shah Hasan Babu','1999-02-01', '5.00', '4.75', '4', '5', '4', '4');
INSERT INTO DemoDatabase VALUE (1247109617,'Mahmud R. Khan','1999-05-15', '5.00', '5.00', '5', '4', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109618,'Nafis Ahmed','1998-11-23', '5.00', '5.00', '5', '5', '4', '5');
INSERT INTO DemoDatabase VALUE (1247109619,'Md Zarif Hossain','1999-02-28', '5.00', '5.00', '5', '5', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109620,'Lisa Chowdhury','1998-12-19', '5.00', '5.00', '5', '5', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109621,'Sadman Sakib Swatcha','1998-01-01', '4.75', '4.92', '4', '4', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109622,'Mahbubur Karim Snigdha','1998-09-11', '4.92', '4.75', '4', '5', '4', '5');
INSERT INTO DemoDatabase VALUE (1247109623,'Nafis Mahmud','1999-01-26', '5.00', '4.92', '5', '4', '5', '4');
INSERT INTO DemoDatabase VALUE (1247109624,'Suzad Mohammad Zilkod','1998-08-15', '5.00', '5.00', '5', '5', '5', '5');
INSERT INTO DemoDatabase VALUE (1247109625,'Mahir Ashraf Emad','1999-04-25', '5.00', '5.00', '5', '4', '5', '5');



INSERT INTO demotransaction VALUE('60852U81V5','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608C00RH0G','bkash',1490,01551234561);
INSERT INTO demotransaction VALUE('608OYLYOR9','bkash',1520,01551234561);
INSERT INTO demotransaction VALUE('6080ZU75L0','bkash',1510,01551234561);
INSERT INTO demotransaction VALUE('608HLIQT3I','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608JPWSDO1','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608FSOH399','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('6088B1W1MV','bkash',1495,01551234561);
INSERT INTO demotransaction VALUE('608V68A5MW','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608RG45K36','bkash',1501,01551234561);
INSERT INTO demotransaction VALUE('608GN2B2TC','bkash',1520,01551234561);
INSERT INTO demotransaction VALUE('608RQAX9Z2','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608K2A6IGW','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608BSNKS4E','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608TKR74OP','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608CQUZSEK','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608LJN38DY','bkash',1510,01551234561);
INSERT INTO demotransaction VALUE('60876HKMGX','bkash',1505,01551234561);
INSERT INTO demotransaction VALUE('60883SFHVF','bkash',1500,01551234561);
INSERT INTO demotransaction VALUE('608IRPDM44','bkash',1501,01551234561);




TRIGGERS STATUS:
CREATE TRIGGER paymentstatus
AFTER INSERT ON transaction
FOR EACH ROW

SELECT ID 
FROM applicant_info
WHERE pin=NEW.Pin;
UPDATE userinfo
SET PaymentConfirm='YES'
WHERE ID=(SELECT ID 
FROM applicant_info
WHERE pin=NEW.Pin);

---2

CREATE VIEW final_list AS(
	SELECT A.ID AS ID, D.pin AS PIN, A.Reg_No AS Registration_No, Name, (SSC_GPA*8 + HSC_GPA*12) AS GPA_SCORE, 
	(HSC_Math+HSC_Physics+HSC_Chemistry+HSC_English) AS PCME_Score
	FROM ssc_hsc_info A, demodatabase B, userinfo C, applicant_info D
	WHERE A.Reg_No=B.RegistrationNo AND A.ID=C.ID AND A.ID=D.ID AND PaymentConfirm='YES'
	ORDER BY GPA_SCORE desc, PCME_Score desc
);

`shortlist`(`roll`,`id`, `pin`, 'reg_no' `name`, `gpa_score`, `pcme_score`)


CREATE TABLE `shortlist` 
( 
	`roll` INT(12) NOT NULL AUTO_INCREMENT, 
	`id` INT(20) NOT NULL,
	`pin` INT(20) NOT NULL , 
	`reg_no` INT(15) NOT NULL, 
	`name` VARCHAR(30) NOT NULL, 
	`gpa_score` FLOAT(10) NOT NULL, 
	`pcme_score` FLOAT(10) NOT NULL, 
	PRIMARY KEY (`roll`), UNIQUE (`pin`)
) ENGINE = InnoDB;


CREATE TABLE admincommand
(
	command VARCHAR(20) PRIMARY KEY,
	slist VARCHAR(10)
)




CREATE TRIGGER sliststatus
AFTER INSERT ON shortlist
FOR EACH ROW

UPDATE userinfo
SET ShortList='YES'
WHERE ID=NEW.id;