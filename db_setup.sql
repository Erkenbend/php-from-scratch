-- create the databases
CREATE DATABASE IF NOT EXISTS example;

use example;
CREATE TABLE IF NOT EXISTS GuestBookEntry (
                         lastName varchar(255),
                         firstName varchar(255),
                         content varchar(255)
);

-- create the users for each database
-- CREATE USER 'projectoneuser'@'%' IDENTIFIED BY 'somepassword';
-- GRANT CREATE, ALTER, INDEX, LOCK TABLES, REFERENCES, UPDATE, DELETE, DROP, SELECT, INSERT ON `projectone`.* TO 'projectoneuser'@'%';

FLUSH PRIVILEGES;