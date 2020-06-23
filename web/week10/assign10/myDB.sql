DROP TABLE IF EXISTS users;
CREATE TABLE users (
	user_id serial NOT NULL PRIMARY KEY,
	firstName varchar(255) NOT NULL,
	lastName varchar(255) NOT NULL,
	age int, 
    title varchar(80) NOT NULL
);

Insert Into users (firstName, lastName, age, title)
VALUES ('John', 'Smith', 30, 'President'),
    ('William', 'Limber', 45, 'Leader'),
    ('Seth', 'Ander', 22, 'Leader'),
    ('George', 'Smith', 35, 'Leader'),
    ('Lucy', 'Denis', 37, 'Employee'),
    ('Stephen', 'France', 30, 'Employee'),
    ('Jason', 'Kent', 25, 'Employee');