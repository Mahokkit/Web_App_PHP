-- creating new user with limited rights.
CREATE USER 'empAdmin'@'localhost' IDENTIFIED By 'inet2005';

-- make sure user exist
SELECT User, Host, Password FROM mysql.user;

-- only allow user to do CRUD.
GRANT SELECT, INSERT, UPDATE, DELETE ON employees.employees TO 'empAdmin'@'localhost';

-- only allow user to add and select users.
GRANT SELECT, INSERT ON employees.WebUsers TO 'empAdmin'@'localhost';

-- making sure grant permission is working
SHOW GRANTS FOR 'empAdmin'@'localhost';

-- create WebUsers Table for login
CREATE TABLE WebUsers 
(
id int(4) NOT NULL auto_increment, 
user_name VARCHAR(65) NOT NULL default '', 
user_pwd VARCHAR(128) NOT NULL default '', 
salt VARCHAR(16) NOT NULL default '', 
PRIMARY KEY (id)
);
