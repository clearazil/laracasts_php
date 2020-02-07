USE mytodo;

CREATE TABLE `todos` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`description` TEXT,
	`completed` TINYINT NOT NULL,
	PRIMARY KEY (`id`)
);

INSERT INTO todos (description, completed)
VALUES ('Task 1', 1);
INSERT INTO todos (description, completed)
VALUES ('Task 2', 0);
INSERT INTO todos (description, completed)
VALUES ('Task 3', 0);
INSERT INTO todos (description, completed)
VALUES ('Task 4', 1);