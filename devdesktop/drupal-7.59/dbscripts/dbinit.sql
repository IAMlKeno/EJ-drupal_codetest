CREATE DATABASE ej_courses;

USE ej_courses;

CREATE TABLE courses (
	id int PRIMARY KEY AUTO_INCREMENT,
	course_name varchar(128) NOT NULL
);

CREATE TABLE students (
	id int PRIMARY KEY AUTO_INCREMENT,
	first_name varchar(255) NOT NULL,
	last_name varchar(255) NOT NULL
);

CREATE TABLE registerations (
	id int PRIMARY KEY AUTO_INCREMENT,
	course_id int NOT NULL,
	student_id int NOT NULL,
	FOREIGN KEY (student_id) REFERENCES students(id),
	FOREIGN KEY (course_id) REFERENCES courses(id)
);
