CREATE TABLE users (
	user_id int NOT NULL PRIMARY KEY,
	firstName varchar(255) NOT NULL,
	lastName varchar(255) NOT NULL,
	age int,
);

CREATE TABLE finances (
	user_id int NOT NULL PRIMARY KEY,
	currentAmount int NOT NULL,
currentObligations int NOT NULL,
monthlyIncome int NOT NULL,
	tithing int,
	entertainment int,
	bills int,
	other int,
	FOREIGN KEY (user_id) REFERENCES users (user_id)
);


