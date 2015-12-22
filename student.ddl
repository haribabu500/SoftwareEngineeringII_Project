CREATE TABLE student (
  student_id         int(10) NOT NULL AUTO_INCREMENT, 
  user_id            int(10) NOT NULL, 
  student_firstname  varchar(20) NOT NULL, 
  student_middlename varchar(20) NOT NULL, 
  student_lastname   varchar(20) NOT NULL, 
  email              varchar(20) NOT NULL, 
  contact            varchar(20) NOT NULL, 
  address            varchar(20) NOT NULL, 
  qulaification      varchar(20) NOT NULL, 
  stream             varchar(20) NOT NULL, 
  PRIMARY KEY (student_id));
CREATE TABLE followUp (
  followUp_id   int(10) NOT NULL AUTO_INCREMENT, 
  lead_id       int(10) NOT NULL, 
  followUp_date date NOT NULL, 
  feedback      varchar(20) NOT NULL, 
  PRIMARY KEY (followUp_id));
CREATE TABLE `user` (
  user_id         int(10) NOT NULL AUTO_INCREMENT, 
  user_firstname  varchar(20) NOT NULL, 
  user_middlename varchar(20) NOT NULL, 
  user_lastname   varchar(20) NOT NULL, 
  email           varchar(10) NOT NULL, 
  contact         varchar(20) NOT NULL, 
  address         varchar(20) NOT NULL, 
  role            varchar(20) NOT NULL, 
  username        varchar(20) NOT NULL, 
  password        varchar(20) NOT NULL, 
  PRIMARY KEY (user_id));
CREATE TABLE lead (
  lead_id          int(10) NOT NULL AUTO_INCREMENT, 
  user_id          int(10) NOT NULL, 
  lead_firstname   varchar(20) NOT NULL, 
  lead_middlename  int(20) NOT NULL, 
  lead_lastname    int(20) NOT NULL, 
  email            int(10) NOT NULL, 
  contact          varchar(20) NOT NULL, 
  address          varchar(20) NOT NULL, 
  qulaification    varchar(20) NOT NULL, 
  stream           varchar(20) NOT NULL, 
  status           varchar(20) NOT NULL, 
  nextfollowupDate date NOT NULL, 
  PRIMARY KEY (lead_id));
ALTER TABLE followUp ADD INDEX FKfollowUp817561 (lead_id), ADD CONSTRAINT FKfollowUp817561 FOREIGN KEY (lead_id) REFERENCES lead (lead_id);
ALTER TABLE student ADD INDEX FKstudent156977 (user_id), ADD CONSTRAINT FKstudent156977 FOREIGN KEY (user_id) REFERENCES `user` (user_id);
ALTER TABLE lead ADD INDEX FKlead349210 (user_id), ADD CONSTRAINT FKlead349210 FOREIGN KEY (user_id) REFERENCES `user` (user_id);

