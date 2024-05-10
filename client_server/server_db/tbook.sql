#Create Customers Table
CREATE TABLE customers (
  cust_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cust_first_name varchar(50) NOT NULL,
  cust_last_name varchar(50) NOT NULL,
  cust_email varchar(50) NOT NULL,
  cust_username varchar(100) NOT NULL,
  cust_password varchar(100) NOT NULL);

#Create Package Table
CREATE TABLE package (
  Package_ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Cust_ID int(11) NOT NULL,
  Package_Date date NOT NULL,
  Activity_ID int(11) NOT NULL,
  Accomodation_ID int(11) NOT NULL,
  Star_Rating int(11) NOT NULL,
  Total_Price decimal(10,0) NOT NULL
);

#Create Accommodation Table
CREATE TABLE accommodation (
  accommodation_ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  accommodation_Name varchar(100) NOT NULL
);

#Create Activity Table
CREATE TABLE activity (
  activity_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  activity_name varchar(100) NOT NULL
);

#Create Review Table
CREATE TABLE Review (
  Review_ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Cust_First_Name varchar(50) NOT NULL,
  Cust_Last_Name varchar(50) NOT NULL,
  Review_Title varchar(50) NOT NULL,
  Review_Post text NOT NULL,
  Review_Rating int(11) NOT NULL
); 

#Create Billing Table
CREATE TABLE billing (
  Billing_ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Cust_ID int(11) NOT NULL,
  Cust_First_Name varchar(50) NOT NULL,
  Card_Number int(11) NOT NULL,
  Card_Type varchar(50) NOT NULL,
  Total_Price int(11) NOT NULL
);

#Insert Rows to Customers
INSERT INTO customers (cust_id, cust_first_name, cust_last_name, cust_email, cust_username, cust_password) VALUES
(1, 'Jewel', 'Valencia', 'jBooker@gmail.com', 'jvBooker', '@is448Book'),
(2, 'd', 'd', 'd@gmail.com', 'temp', '@is448Book'),
(3, 'd', 'd', 'd@d.com', 'temp', 'is448Book'),
(4, 'Demo', 'Demo', 'Demo@demo.com', 'temp', 'Demo#123'),
(5, 'Julie', 'Tu', 'juliet4@umbc.edu', 'temp', '@abc1234');

#Insert Rows to Package
INSERT INTO package (Package_ID, Cust_ID, Package_Date, Activity_ID, Accomodation_ID, Star_Rating, Total_Price) VALUES
(1, 1, '2024-02-28', 1, 1, 4, 1500),
(2, 1, '2024-03-15', 2, 2, 5, 2000),
(3, 1, '2024-03-20', 3, 3, 3, 1200),
(4, 1, '2024-04-05', 4, 4, 5, 1800);

#Insert Rows to Accommodation 
INSERT INTO accomodation (Accomodation_ID, Accomodation_Name) VALUES
(1, 'Holiday Inn'),
(2, 'Hilton'),
(3, 'Hampton Inn'),
(4, 'Four Seasons');

#Insert Rows to Activity
INSERT INTO activity (Activity_ID, Activity_Name) VALUES
(1, 'Zoo'),
(2, 'Aquarium'),
(3, 'Garden'),
(4, 'Scuba Diving');

#Insert Rows to Review
INSERT INTO Review (Review_ID, Cust_First_Name, Cust_Last_Name, Review_Title, Review_Post, Review_Rating) VALUES
(1, 'Jewel', 'Valencia', 'BAD TRIP', 'This trip sucked so much, it rained the whole time, the employees were rude, the activities were boring, and the flight crashed and we got stranded on a deserted island and had to learn to survive.', 1);

#Insert Rows to Billing
INSERT INTO billing (Billing_ID, Cust_ID, Cust_First_Name, Card_Number, Card_Type, Total_Price) VALUES (1, 1, 'Jewel', '11223344', 'credit', 4203.03);