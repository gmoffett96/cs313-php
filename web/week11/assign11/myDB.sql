DROP TABLE IF EXISTS users;
CREATE TABLE users (
	user_id serial NOT NULL PRIMARY KEY,
	firstName varchar(255) NOT NULL,
	lastName varchar(255) NOT NULL,
	age int, 
    title varchar(80) NOT NULL,
    username varchar(80) NOT NULL
);

Insert Into users (firstName, lastName, age, title, username)
VALUES ('John', 'Smith', 30, 'President', 'Smith30'),
    ('William', 'Limber', 45, 'Leader', 'Limber45'),
    ('Seth', 'Ander', 22, 'Leader', 'Ander22'),
    ('George', 'Smith', 35, 'Leader', 'Smith35'),
    ('Lucy', 'Denis', 37, 'Employee', 'Denis37'),
    ('Stephen', 'France', 30, 'Employee', 'France30'),
    ('Jason', 'Kent', 25, 'Employee', 'Kent25');