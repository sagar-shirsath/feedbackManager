drop table submitions;
drop table questions;
drop table teachers;
drop table courses;
drop table students;
drop table groups;
drop table admin;
drop table users;

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    role VARCHAR(20),
    group_id INT(11) NOT NULL,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);
CREATE TABLE groups (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(100) NOT NULL,
    created DATETIME,
    modified DATETIME
);


create table admins(
    id INT(11) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    group_id INT(11) NOT NULL,
    user_id INT(11) NOT NULL,
    created DATETIME,
    modified DATETIME
		);
--INSERT INTO admins(id,name,username,password,group_id,created,modified) VALUES
--(1,'Admin','admin@cs.com','a',1,NOW(),NOW());

create table teachers(teacher_id INT(11) PRIMARY KEY,
		      t_name VARCHAR(100) NOT NULL,
		      username VARCHAR(100) NOT NULL,
		      password VARCHAR(100) NOT NULL,
		      group_id INT(11) NOT NULL,
		      user_id INT(11) NOT NULL
		);
/*
INSERT INTO teachers (teacher_id,t_name,username,password,group_id) VALUES
(1,'sonali','sonali@cs.com','s',2);


(2,'kavita','kavita@cs.com','k'),
(3,'dinesh','dinesh@cs.com','d')
		);
(4, 'sneha'),
(6, 'Ritambara'),
(7, 'Roy Sir'),
(8, 'Patil Sir'),
(9, 'Damodar Sir'),
(10, 'Amardeep Sir');
--------------------------------------------------------------------------------------------
*/
create table courses(course_id int PRIMARY KEY,
		     c_name VARCHAR(100)
		    );
/*INSERT INTO courses (c_id, c_name) VALUES
(1, 'DS');
/*
(2, 'OS'),
(3, 'AI'),
(4, 'Networking'),
(5, 'IP'),
(6, 'DBMS'),
(7, 'MF'),
(8, 'CO'),
(9, 'CMGT'),
(10, 'MongoDB'),
(11, 'Distributed System'),
(12, 'LLP'),
(13, 'SOP'),
(14, 'SIM'),
(15, 'OR'),
(16, 'SE'),
(17, 'Computer Graphics'),
(18, 'Algorithm'),
(19, 'ADBMS'),
(20, 'NS');
*/
-- ---------------------------------------------------------------------------------------


create table students(roll_no int PRIMARY KEY,
		     name VARCHAR(100) NOT NULL,
		     username VARCHAR(100) NOT NULL,
    		     password VARCHAR(100) NOT NULL,
		     group_id INT(11) NOT NULL,
		     user_id INT(11) NOT NULL
		    );
/*
INSERT INTO students (roll_no, name, username,password,group_id) VALUES
(1, 'chetana', 'chetana@cs.com',MD5('c'),3),
(2, 'priynka', 'priynka@cs.com',MD5('p'),3),
(3, 'sonal', 'sonal@cs.com',MD5('s'),3));

(4, 'neha', 'n'),
(5, 'mayur', 'm'),
(6, 'pritam', 'pri'),
(7, 'rohan', 'r'),
(8, 'pushpa', 'p'),
(9, 'kirti', 'k'),
(10, 'prajkta', 'p');
*/
-- ----------------------------------------------------------------------------------------



create table submitions(
		submit_id int PRIMARY KEY,
		teacher_id int,
		course_id int,
		roll_no int,
		FOREIGN KEY (teacher_id)REFERENCES teacher(teacher_id),
		FOREIGN KEY (course_id) REFERENCES course(course_id),	       
		FOREIGN KEY (roll_no ) REFERENCES student(roll_no),
		semyear int,
		semester int,
	        q1 int,q2 int,q3 int,q4 int,q5 int,
		q6 int,q7 int,q8 int,q9 int,q10 int,
		q11 int,q12 int,q13 int,q14 int,
		q15 int,q16 int,q17 int,q18 int,
                q19 int,q20 int,q21 int,q22 int,
		q23 int,q24 int,q25 int,q26 int,
		q27 int,q28 int,q29 int,q30 int,
		commentans1 varchar(20000),
		commentans2 varchar(20000)

		);
create table questions(
		
		qid int PRIMARY KEY,		   
		qname varchar(20000),
		question_type enum('multiple','subjective')
		    
		     );


INSERT INTO questions(qid, qname,question_type) VALUES
(1, 'Teacher is prepared for class','multiple'),
(2, 'Teacher knows his/her subject well','multiple'),
(3, 'Teacher is organized and neat','multiple'),
(4, 'Teacher plans class time and assignments that help students to solve the problem and think critically','multiple'),
(5, 'Teacher plans provides activities that make subject matter meaningful.','multiple'),
(6, 'Teacher is flexible in accommodating for individual student needs','multiple'),
(7, 'Teacher is clear in giving directions and on explaining waht is expected on assignments and tests.','multiple'),
(8, 'Teacher allows you to be active in the classroom learning environment.','multiple'),
(9, 'Teacher is puncture and manages the time well.','multiple'),
(10, 'Teacher returns homework in a timely manner','multiple'),
(11, 'Teacher has clear classroom procedures so students dont waste time.','multiple'),
(12, 'Teacher grades fairly','multiple'),
(13, 'I have learned a lot from this teacher about this subject.','multiple'),
(14, 'Teacher gives me good feedback on homework and projects so that i can improve.','multiple'),
(15, 'Teacher is creative in developing activities and lessons.','multiple'),
(16, 'Teacher encourages students to speak up and be active in the class','multiple'),
(17, 'Teacher listens and understands students point of view; he/she may not agree,but students feel understood.','multiple'),
(18, 'You can count on the teachers word','multiple'),
(19, 'Teacher respects the opinions and decisions of students.','multiple'),
(20, 'Teacher is willing to accept responsibility for his/her own mistakes.','multiple'),
(21, 'Teacher is willing to learn from students.','multiple'),
(22, 'Teacher is sensitive to the needs of students','multiple'),
(23, 'Teachers words and action match','multiple'),
(24, 'Teacher is fun to be with','multiple'),
(25, 'Teacher likes and respects students','multiple'),
(26, 'Teacher helps you when you ask for help.','multiple'),
(27, 'Teacher is consistent and fair in discipline.','multiple'),
(28, 'I trust this teacher','multiple'),
(29, 'Teacher tries to model what teacher expects of students','multiple'),
(30, 'Teacher is fair and firm in discipline without being too strict.','multiple'),
(31, 'What is one thing that your teacher does well?','subjective'),
(32, 'What is one thing that you can suggest to help this teacher improve?','subjective');
