DROP TABLE IF EXISTS finances;
DROP TABLE IF EXISTS users;
CREATE TABLE users (
	user_id serial NOT NULL PRIMARY KEY,
	firstName varchar(255) NOT NULL,
	lastName varchar(255) NOT NULL,
	age int
);

CREATE TABLE finances (
	finances_id serial NOT NULL,
	currentAmount int NOT NULL,
currentObligations int NOT NULL,
monthlyIncome int NOT NULL,
	tithing int,
	entertainment int,
	bills int,
	other int,
	FOREIGN KEY (finances_id) REFERENCES users (user_id)
);

Insert Into users (firstName, lastName, age)
VALUES ('John', 'Smith', 30),
    ('William', 'Limber', 45),
    ('Seth', 'Ander', 22),
    ('George', 'Smith', 35),
    ('Lucy', 'Denis', 37);

Insert Into finances (currentAmount, currentObligations, monthlyIncome, tithing, 
entertainment, bills, other)
Values (100000, -3000, 5000, 500, 400, 1000, 0),
    (0, 0, 0, 0, 0, 0, 0),
    (50000, -2000, 4000, 400, 300, 2000, 700),
    (2000000000, -5000000, 10000, 1000, 8000, 0, 5000),
    (300, 150, 500, 50, 30, 250, 250);