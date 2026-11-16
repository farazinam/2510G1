---------------------- Day 1 -----------------------

CREATE DATABASE SQLServer;

USE SQLServer;

CREATE TABLE category (
category_id INT PRIMARY KEY IDENTITY(101, 1),
category_name VARCHAR (100)
);

SELECT * FROM category;

INSERT INTO category (category_name)
VALUES ('Cosmetics');

INSERT INTO category (category_name)
VALUES ('Keyboard'),
('Mouse'),
('Computer'),
('Headphone');

DELETE FROM category WHERE category_id = 103;

UPDATE category
SET category_name = 'Earbuds'
WHERE category_id = 106;

---------------------- Day 2 -----------------------

-- Truncate
TRUNCATE TABLE category;

DELETE FROM category;

SELECT * FROM category;

-- ALTER

--Add Column
ALTER TABLE category ADD category_image INT;

--change datatype
ALTER TABLE category ALTER COLUMN category_image VARCHAR(100);

-- Rename Column
EXEC sp_rename 'category.category_image', 'category_pic';

-- delete columns
ALTER TABLE category DROP COLUMN category_pic;

-- DROP

-- drop table
DROP TABLE category;
DROP DATABASE SQLServer;

--RENAME TABLE/DATABSE
ALTER DATABASE SQLServer MODIFY name = sql_server;


---------------------- Day 3 -----------------------

-- CONSTRAINTS
CREATE TABLE product (
product_id INT PRIMARY KEY IDENTITY(1,1),
product_name VARCHAR(100) DEFAULT 'Haircolor',
product_price INT CHECK (product_price >= 100),
product_desc VARCHAR(200) NOT NULL,
category_id INT,
FOREIGN KEY (category_id) REFERENCES category (category_id)
);

SELECT * FROM category;
SELECT * FROM product;

INSERT INTO product (product_name, product_price, product_desc, category_id)
VALUES('headphone', 4500, 'Zero', 104 );

INSERT INTO product ( product_price, product_desc, category_id)
VALUES( 501, 'Olivia hair color', 105 );

INSERT INTO product ( product_price, product_desc, category_id)
VALUES( 105, 'Granier hair color', 105 );

INSERT INTO product (product_desc, category_id)
VALUES('Granier hair color', 105 );


---------------------- Day 4 -----------------------

--Conditional Fetching
SELECT * FROM product;
SELECT TOP(3) * FROM product;
SELECT TOP(3) * FROM product WHERE product_name = 'powder';
SELECT TOP(2) * FROM product WHERE product_desc = 'Granier hair color';
SELECT TOP 30 PERCENT * FROM product;

--Clauses

--ORDER BY
SELECT * FROM product ORDER BY product_name;
SELECT * FROM product ORDER BY product_name ASC;
SELECT * FROM product ORDER BY product_name DESC;

SELECT * FROM product ORDER BY product_desc;
SELECT * FROM product ORDER BY product_price;
SELECT * FROM product ORDER BY product_price DESC;

-- DINSTINCT
SELECT * FROM product;
SELECT product_name, product_price FROM product;
SELECT product_name, product_price FROM product WHERE product_name = 'headphone';

SELECT DISTINCT * FROM product;
SELECT DISTINCT product_name FROM product;
SELECT DISTINCT product_name, product_price FROM product;
SELECT DISTINCT product_name, product_price, product_desc, category_id FROM product;


CREATE TABLE employees (
    employee_id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    department VARCHAR(30),
    job_title VARCHAR(50),
    salary DECIMAL(10,2),
    age INT,
    city VARCHAR(50),
    hire_date DATE,
    performance_rating DECIMAL(3,1),
    employment_status VARCHAR(20),
    manager_id INT NULL,
    email VARCHAR(100)
);

INSERT INTO employees
(employee_id, first_name, last_name, department, job_title, salary, age,
 city, hire_date, performance_rating, employment_status, manager_id, email)
VALUES
(1, 'Ali', 'Khan', 'IT', 'Software Engineer', 85000, 28, 'Karachi', '2021-03-15', 4.5, 'Active', 10, 'ali.khan@example.com'),
(2, 'Sara', 'Ahmed', 'HR', 'HR Executive', 65000, 32, 'Lahore', '2020-07-10', 4.0, 'Active', 11, 'sara.ahmed@example.com'),
(3, 'Usman', 'Raza', 'Finance', 'Accountant', 72000, 35, 'Islamabad', '2019-01-20', 3.5, 'Active', 12, 'usman.raza@example.com'),
(4, 'Ayesha', 'Malik', 'IT', 'Data Analyst', 78000, 26, 'Karachi', '2022-06-05', 4.8, 'Active', 10, 'ayesha.malik@example.com'),
(5, 'Hamza', 'Shah', 'Sales', 'Sales Executive', 55000, 29, 'Lahore', '2021-11-12', 3.9, 'Active', 13, 'hamza.shah@example.com'),
(6, 'Zainab', 'Ali', 'Marketing', 'Marketing Specialist', 68000, 31, 'Karachi', '2020-09-18', 4.2, 'Active', 14, 'zainab.ali@example.com'),
(7, 'Bilal', 'Hussain', 'IT', 'Software Engineer', 92000, 30, 'Islamabad', '2018-04-25', 4.7, 'Active', 10, 'bilal.hussain@example.com'),
(8, 'Hina', 'Iqbal', 'Finance', 'Financial Analyst', 88000, 27, 'Karachi', '2022-01-15', 4.4, 'Active', 12, 'hina.iqbal@example.com'),
(9, 'Omar', 'Farooq', 'Sales', 'Sales Manager', 105000, 38, 'Lahore', '2017-08-01', 4.6, 'Active', NULL, 'omar.farooq@example.com'),
(10, 'Ahmed', 'Siddiqui', 'IT', 'IT Manager', 145000, 45, 'Karachi', '2015-02-10', 4.9, 'Active', NULL, 'ahmed.siddiqui@example.com'),
(11, 'Fatima', 'Khan', 'HR', 'HR Manager', 125000, 42, 'Islamabad', '2016-05-22', 4.6, 'Active', NULL, 'fatima.khan@example.com'),
(12, 'Imran', 'Qureshi', 'Finance', 'Finance Manager', 135000, 47, 'Lahore', '2014-09-12', 4.8, 'Active', NULL, 'imran.qureshi@example.com'),
(13, 'Nadia', 'Yousuf', 'Sales', 'Sales Executive', 58000, 25, 'Karachi', '2023-02-17', 3.7, 'Active', 9, 'nadia.yousuf@example.com'),
(14, 'Tariq', 'Mehmood', 'Marketing', 'Marketing Manager', 118000, 40, 'Islamabad', '2016-11-30', 4.3, 'Active', NULL, 'tariq.mehmood@example.com'),
(15, 'Maham', 'Rauf', 'IT', 'QA Engineer', 75000, 27, 'Lahore', '2021-04-14', 4.1, 'Active', 10, 'maham.rauf@example.com'),
(16, 'Fahad', 'Aslam', 'Finance', 'Accountant', 69000, 33, 'Karachi', '2020-03-19', 3.8, 'Active', 12, 'fahad.aslam@example.com'),
(17, 'Iqra', 'Naeem', 'HR', 'Recruiter', 62000, 28, 'Lahore', '2022-08-11', 4.0, 'Active', 11, 'iqra.naeem@example.com'),
(18, 'Waleed', 'Akhtar', 'IT', 'DevOps Engineer', 98000, 34, 'Islamabad', '2019-06-27', 4.6, 'Active', 10, 'waleed.akhtar@example.com'),
(19, 'Maryam', 'Saeed', 'Marketing', 'Content Writer', 60000, 24, 'Karachi', '2023-01-09', 3.9, 'Active', 14, 'maryam.saeed@example.com'),
(20, 'Saad', 'Nawaz', 'Sales', 'Sales Executive', 57000, 26, 'Islamabad', '2022-10-03', 3.6, 'Active', 9, 'saad.nawaz@example.com'),
(21, 'Kashif', 'Javed', 'IT', 'Software Engineer', 87000, 29, 'Lahore', '2020-12-01', 4.4, 'Active', 10, 'kashif.javed@example.com'),
(22, 'Laiba', 'Sultan', 'Finance', 'Financial Analyst', 81000, 30, 'Karachi', '2021-07-16', 4.2, 'Active', 12, 'laiba.sultan@example.com'),
(23, 'Danish', 'Mirza', 'HR', 'HR Executive', 67000, 36, 'Islamabad', '2019-10-21', 3.9, 'Active', 11, 'danish.mirza@example.com'),
(24, 'Sana', 'Noman', 'Marketing', 'SEO Specialist', 73000, 27, 'Lahore', '2022-03-08', 4.5, 'Active', 14, 'sana.noman@example.com'),
(25, 'Rashid', 'Baig', 'Sales', 'Sales Executive', 59000, 31, 'Karachi', '2020-05-13', 3.8, 'Active', 9, 'rashid.baig@example.com'),
(26, 'Eman', 'Khalid', 'IT', 'UI Developer', 82000, 25, 'Islamabad', '2023-04-10', 4.3, 'Active', 10, 'eman.khalid@example.com'),
(27, 'Yasir', 'Butt', 'Finance', 'Accountant', 71000, 39, 'Lahore', '2018-07-23', 3.6, 'Active', 12, 'yasir.butt@example.com'),
(28, 'Anum', 'Shafiq', 'HR', 'Training Coordinator', 64000, 29, 'Karachi', '2021-09-06', 4.1, 'Active', 11, 'anum.shafiq@example.com'),
(29, 'Arslan', 'Khan', 'IT', 'Database Administrator', 110000, 41, 'Karachi', '2017-03-17', 4.7, 'Active', 10, 'arslan.khan@example.com'),
(30, 'Madiha', 'Tariq', 'Marketing', 'Brand Executive', 70000, 26, 'Islamabad', '2022-05-20', 4.0, 'Active', 14, 'madiha.tariq@example.com'),
(31, 'Shahzaib', 'Ahmed', 'Sales', 'Sales Executive', 56000, 24, 'Lahore', '2023-06-12', 3.5, 'Active', 9, 'shahzaib.ahmed@example.com'),
(32, 'Komal', 'Rashid', 'IT', 'Software Engineer', 95000, 32, 'Karachi', '2019-11-04', 4.8, 'Active', 10, 'komal.rashid@example.com'),
(33, 'Rehan', 'Siddiq', 'Finance', 'Senior Accountant', 93000, 43, 'Islamabad', '2016-08-15', 4.4, 'Active', 12, 'rehan.siddiq@example.com'),
(34, 'Mehwish', 'Aziz', 'HR', 'Recruiter', 61000, 27, 'Lahore', '2023-03-01', 3.9, 'Active', 11, 'mehwish.aziz@example.com'),
(35, 'Noman', 'Khan', 'Marketing', 'Digital Marketer', 76000, 30, 'Karachi', '2021-12-13', 4.2, 'Active', 14, 'noman.khan@example.com'),
(36, 'Sadia', 'Jamil', 'Sales', 'Sales Executive', 54000, 23, 'Islamabad', '2023-07-07', 3.4, 'Probation', 9, 'sadia.jamil@example.com'),
(37, 'Adeel', 'Riaz', 'IT', 'Network Engineer', 89000, 37, 'Lahore', '2018-10-29', 4.3, 'Active', 10, 'adeel.riaz@example.com'),
(38, 'Rabia', 'Khan', 'Finance', 'Finance Executive', 74000, 28, 'Karachi', '2022-09-14', 4.1, 'Active', 12, 'rabia.khan@example.com'),
(39, 'Junaid', 'Akram', 'HR', 'HR Executive', 66000, 34, 'Islamabad', '2020-06-18', 3.7, 'Active', 11, 'junaid.akram@example.com'),
(40, 'Areeba', 'Zahid', 'Marketing', 'Social Media Manager', 85000, 29, 'Lahore', '2021-02-26', 4.6, 'Active', 14, 'areeba.zahid@example.com'),
(41, 'Shahzad', 'Ali', 'Sales', 'Sales Manager', 112000, 44, 'Karachi', '2015-12-07', 4.5, 'Active', NULL, 'shahzad.ali@example.com'),
(42, 'Minahil', 'Farooq', 'IT', 'Data Scientist', 125000, 31, 'Islamabad', '2020-01-13', 4.9, 'Active', 10, 'minahil.farooq@example.com'),
(43, 'Faisal', 'Nadeem', 'Finance', 'Financial Analyst', 83000, 36, 'Lahore', '2019-04-22', 4.0, 'Active', 12, 'faisal.nadeem@example.com'),
(44, 'Amna', 'Yaseen', 'HR', 'HR Assistant', 52000, 22, 'Karachi', '2024-01-08', 3.6, 'Probation', 11, 'amna.yaseen@example.com'),
(45, 'Talha', 'Sohail', 'Marketing', 'Marketing Executive', 69000, 33, 'Islamabad', '2020-11-16', 3.8, 'Active', 14, 'talha.sohail@example.com'),
(46, 'Hassan', 'Raza', 'IT', 'Software Engineer', 91000, 28, 'Lahore', '2022-02-21', 4.7, 'Active', 10, 'hassan.raza@example.com'),
(47, 'Sabeen', 'Irfan', 'Finance', 'Accountant', 70000, 31, 'Karachi', '2021-05-05', 4.2, 'Active', 12, 'sabeen.irfan@example.com'),
(48, 'Muneeb', 'Arif', 'Sales', 'Sales Executive', 58000, 27, 'Islamabad', '2023-08-19', 3.9, 'Active', 9, 'muneeb.arif@example.com'),
(49, 'Kiran', 'Asif', 'IT', 'Business Analyst', 88000, 35, 'Karachi', '2019-09-09', 4.4, 'Active', 10, 'kiran.asif@example.com'),
(50, 'Adnan', 'Younis', 'Marketing', 'Marketing Executive', 67000, 38, 'Lahore', '2018-12-03', 3.7, 'Resigned', 14, 'adnan.younis@example.com');


SELECT * FROM employees;


-- Operators

SELECT * FROM employees WHERE city = 'karachi'; 
SELECT * FROM employees WHERE city = 'lahore'; 
SELECT * FROM employees WHERE age = 20 OR age = 39 OR age = 24 ; 
-- IN

SELECT * FROM employees WHERE age IN (20, 39, 24); 

SELECT MIN(salary) FROM employees;
SELECT MAX(salary) FROM employees;

SELECT * FROM employees WHERE salary BETWEEN 75000 AND 90000;

SELECT MIN(performance_rating) FROM employees;
SELECT MAX(performance_rating) FROM employees;

SELECT * FROM employees WHERE performance_rating BETWEEN 4.6 and 4.9;
SELECT * FROM employees WHERE salary BETWEEN 100000 and 145000;


---------------------- Day 5 -----------------------

SELECT * FROM employees;

SELECT * FROM employees WHERE city = 'Karachi';
SELECT * FROM employees WHERE NOT city = 'Karachi' ORDER BY city ASC;
SELECT * FROM employees WHERE city <> 'Karachi' ORDER BY city ASC;

SELECT * FROM employees WHERE city = 'Karachi' AND salary > 100000;
SELECT * FROM employees WHERE city = 'Karachi' AND salary > 100000 AND department = 'Sales';

SELECT * FROM employees WHERE (city = 'Karachi' AND salary > 100000) OR department = 'Sales';
SELECT * FROM employees WHERE city = 'Karachi' AND (salary > 100000 OR department = 'Sales');

SELECT * FROM employees WHERE first_name LIKE 'A%';
SELECT * FROM employees WHERE first_name LIKE '%A';
SELECT * FROM employees WHERE first_name LIKE '%A%';
SELECT * FROM employees WHERE first_name LIKE '%A_';
SELECT * FROM employees WHERE first_name LIKE 'A__';
SELECT * FROM employees WHERE first_name LIKE '__A%';


---------------------- Day 6 -----------------------

-- FUNCTIONS

-- Aggregate Fns
SELECT MAX(salary) FROM employees;
SELECT MIN(salary) FROM employees;
SELECT AVG(salary) FROM employees;
SELECT COUNT(*) FROM employees;
SELECT COUNT(first_name) FROM employees;
SELECT COUNT(manager_id) FROM employees;
SELECT SUM(salary) FROM employees;

-- String Fn
SELECT CONCAT(first_name, ' ' , last_name) AS FullName FROM employees;
SELECT *, CONCAT(first_name, ' ' , last_name) AS FullName FROM employees;

SELECT employee_id, CONCAT(first_name, ' ' , last_name) AS FullName,
department, job_title, salary, age, city, hire_date, performance_rating,
employment_status, manager_id, email
FROM employees;

-- Date Fn
SELECT SYSDATETIME(); -- Returns: 2026-10-09 19:20:45.1234567
SELECT CURRENT_DATE; -- Returns: 2026-10-09
SELECT CURRENT_TIMESTAMP;
SELECT GETDATE(); -- Returns: 2026-10-09 19:20:45.320

--Math Fn
SELECT SIN(0);
SELECT COS(0);
SELECT TAN(0);

SELECT * from product;

ALTER TABLE product ADD quantity INT;
UPDATE product SET quantity = 3;
UPDATE product SET quantity = 2 WHERE product_desc = 'Zero';

SELECT *, product_price*quantity AS TOTALBILL from product;

SELECT * from employees;

SELECT COUNT(*) FROM employees WHERE department = 'IT';
SELECT COUNT(*) FROM employees WHERE department = 'HR';

-- Group By
SELECT department, COUNT(*) FROM employees GROUP BY department;
SELECT city, COUNT(*) FROM employees GROUP BY city;

SELECT department, SUM(salary) FROM employees GROUP BY department;
SELECT city, SUM(salary) FROM employees GROUP BY city;

-- Group By With having
SELECT department, COUNT(*) AS employeesCount FROM employees GROUP BY department HAVING COUNT(*) >= 10;
SELECT city, COUNT(*) FROM employees GROUP BY city HAVING COUNT(*) > 15;


---------------------- Day 7 -----------------------

-- JOINS

--INNER JOIN
INSERT INTO product(product_name, product_price, product_desc, category_id, quantity)
VALUES ('Kura Shalwar', 7500, 'j.', NULL, 2);

--OUTER JOIN (LEFT , RIGHT, and FULL JOIN)

--INNER JOIN
SELECT * FROM category 
INNER JOIN product
ON category.category_id = product.category_id;

SELECT * FROM category;

--OUTER JOIN 

--(LEFT JOIN)
SELECT * FROM category 
LEFT JOIN product
ON category.category_id = product.category_id;

--(RIGHT JOIN)
SELECT * FROM category 
RIGHT JOIN product
ON category.category_id = product.category_id;


--(FULL JOIN)
SELECT * FROM category 
FULL JOIN product
ON category.category_id = product.category_id;


--INNER JOIN
SELECT product.product_name, product.product_price, product.quantity, category.category_name 
FROM category 
INNER JOIN product
ON category.category_id = product.category_id;

SELECT p.product_name, p.product_price, p.quantity, c.category_name 
FROM category AS c
INNER JOIN product AS p
ON c.category_id = p.category_id;

-- SELF JOIN
create table employee (
emp_id INT PRIMARY KEY IDENTITY(1,1),
emp_name VARCHAR(100),
manager_id INT
);

INSERT INTO employee(emp_name, manager_id)
VALUES ('Hamza', 3),
('Shahzaib', 4),
('Owais', 5),
('Tehreem', 5),
('Hassan', 6),
('Atif', NULL);

SELECT * FROM employee;

SELECT e1.emp_name AS employee, e2.emp_name AS Manager
FROM employee e1
LEFT JOIN employee e2
ON e1.manager_id = e2.emp_id;



---------------------- Day 8 -----------------------

CREATE TABLE course(
c_id INT PRIMARY KEY IDENTITY (1, 1),
c_name VARCHAR(100)
);

CREATE TABLE teacher(
t_id INT PRIMARY KEY IDENTITY (1001, 1),
t_name VARCHAR(100),
t_qualification VARCHAR(100),
t_salary INT
);

CREATE TABLE student(
s_id INT PRIMARY KEY IDENTITY (101, 1),
s_name VARCHAR(100),
s_city VARCHAR(100),
s_fees INT,
c_id INT,
t_id INT,
FOREIGN KEY (c_id) REFERENCES course (c_id),
FOREIGN KEY (t_id) REFERENCES teacher (t_id)
);

INSERT INTO course (c_name)
VALUES ('SE'),
('DM'),
('CS');

INSERT INTO teacher (t_name, t_qualification, t_salary)
VALUES ('Hassan', 'Bachelors', 15000),
('Wali', 'Bachelors', 10000),
('Alam', 'Bachelors', 12000),
('Faraz', 'Bachelors', 10000),
('Bilal', 'Bachelors', 13000);

INSERT INTO student (s_name, s_city, s_fees, c_id, t_id)
VALUES ('Hamza', 'Karachi', 5000, 1, 1004),
('Saqib', 'Karachi',5500, 3, 1002),
('Aqsa', 'Lahore',7200, 2, 1002),
('Azan', 'Lahore',6900, NULL, NULL),
('Hashir', 'Islamabad',5700, 1, NULL);

-- INNER JOIN
SELECT * FROM student
INNER JOIN teacher
ON student.t_id = teacher.t_id
INNER JOIN course
ON student.c_id = course.c_id;

SELECT * FROM student AS s
INNER JOIN teacher AS t
ON s.t_id = t.t_id
INNER JOIN course AS c
ON s.c_id = c.c_id;

SELECT s.s_name, s.s_fees, t.t_name, c.c_name FROM student AS s
INNER JOIN teacher AS t
ON s.t_id = t.t_id
INNER JOIN course AS c
ON s.c_id = c.c_id;

-- LEFT JOIN
SELECT s.s_name, s.s_fees, t.t_name, c.c_name FROM student AS s
LEFT JOIN teacher AS t
ON s.t_id = t.t_id
LEFT JOIN course AS c
ON s.c_id = c.c_id;

-- RIGHT JOIN
SELECT s.s_name, s.s_fees, t.t_name, c.c_name FROM student AS s
RIGHT JOIN teacher AS t
ON s.t_id = t.t_id
RIGHT JOIN course AS c
ON s.c_id = c.c_id;

-- FULL JOIN
SELECT s.s_name, s.s_fees, t.t_name, c.c_name FROM student AS s
FULL JOIN teacher AS t
ON s.t_id = t.t_id
FULL JOIN course AS c
ON s.c_id = c.c_id;


-- Subquery

SELECT * FROM employees;
SELECT MAX(salary) FROM employees;
-- SELECT MAX(salary), first_name, last_name FROM employees;
SELECT * FROM employees WHERE salary = 145000;
SELECT MIN(salary) FROM employees;
SELECT * FROM employees WHERE salary = 52000;

SELECT * FROM employees WHERE salary = (SELECT MAX(salary) FROM employees);
SELECT * FROM employees WHERE salary = (SELECT MIN(salary) FROM employees);



---------------------- Day 9 -----------------------

-- Stored Procedure

CREATE PROCEDURE sp_emp
AS 
BEGIN
SELECT * FROM employees;
END

ALTER PROCEDURE sp_emp
AS 
BEGIN
SELECT * FROM employees WHERE city = 'Karachi';
END

sp_emp;
EXEC sp_emp;
EXECUTE sp_emp;

CREATE PROCEDURE stdTchrCourseJoin
AS 
BEGIN
SELECT s.s_name, s.s_fees, t.t_name, c.c_name FROM student AS s
FULL JOIN teacher AS t
ON s.t_id = t.t_id
FULL JOIN course AS c
ON s.c_id = c.c_id;
END

EXEC stdTchrCourseJoin;

CREATE PROC sp_product
AS 
BEGIN
SELECT * FROM product;
END

EXEC sp_product;

DROP PROC sp_product;
DROP PROCEDURE sp_product;

-- Parametarized Stored Procedure
CREATE PROCEDURE sp_emp_para
@city VARCHAR(100)
AS 
BEGIN
SELECT * FROM employees WHERE city = @city;
END

sp_emp_para 'Lahore';
sp_emp_para 'Islamabad';

CREATE PROCEDURE sp_emp_para2
@city VARCHAR(100),
@salary INT
AS 
BEGIN
SELECT * FROM employees WHERE city = @city AND salary = @salary;
END

ALTER PROCEDURE sp_emp_para2
@city VARCHAR(100),
@salary INT
AS 
BEGIN
SELECT * FROM employees WHERE city = @city AND salary >= @salary;
END

sp_emp_para2 'Karachi', 70000;


-- Variables
DECLARE @age INT
SET @age = 32;
SELECT * FROM employees WHERE age >= @age;

DECLARE @a INT
SET @a = 30;
SELECT * FROM employees WHERE age >= @a;

-- Function
CREATE FUNCTION dbo.addition (@num1 INT, @num2 INT)
RETURNS INT
AS
BEGIN
DECLARE @output INT
SET @output = @num1 + @num2
RETURN @output;
END

SELECT dbo.addition(2,5) AS Addition;
SELECT dbo.addition(8,4) AS Addition;

ALTER FUNCTION dbo.fullname (@fn VARCHAR(50), @ln VARCHAR(50))
RETURNS VARCHAR(100)
AS
BEGIN
DECLARE @output VARCHAR(100)
SET @output = @fn + @ln
RETURN @output;
END

SELECT dbo.fullname('Faraz', 'Inam') AS Addition;



---------------------- Day 10 -----------------------

-- Views
CREATE VIEW vw_teacher
AS
SELECT t_name, t_qualification from teacher;

ALTER VIEW vw_teacher
AS
SELECT t_id, t_name, t_qualification from teacher;

SELECT * FROM vw_teacher;
SELECT t_name FROM vw_teacher;

SELECT * FROM teacher;

DROP view vw_emp;

sp_helptext vw_teacher;

INSERT INTO vw_teacher (t_name, t_qualification, t_salary)
VALUES ('Adil', 'Masters', 22000);

INSERT INTO teacher (t_name, t_qualification, t_salary)
VALUES ('Adil', 'Masters', 22000);

INSERT INTO vw_teacher (t_name, t_qualification)
VALUES ('Adil', 'Masters');


-- DCL (Data Control Language)

CREATE LOGIN nn2 WITH PASSWORD = '123';
CREATE USER aptech FROM LOGIN nn2;

GRANT SELECT on vw_teacher TO aptech;
REVOKE SELECT on teacher TO aptech;




---------------------- Day 11 + Sem End Exam -----------------------

SELECT * FROM teacher;

-- TCL
BEGIN TRANSACTION
INSERT INTO teacher (t_name, t_qualification, t_salary)
VALUES ('Hafeez', 'Inter', 9000);

--COMMIT
COMMIT;

--ROLLBACK
ROLLBACK;

BEGIN TRANSACTION
DELETE FROM teacher WHERE t_id = 1007;




---------------------- Day 12 -----------------------

CREATE TABLE emp(
id INT,
name VARCHAR(100),
qualification VARCHAR(100),
salary INT
);

INSERT INTO emp (id, name, qualification, salary)
VALUES (1, 'Hassan', 'Bachelors', 15000),
(5, 'Wali', 'Bachelors', 10000),
(6, 'Alam', 'Bachelors', 12000),
(2, 'Faraz', 'Bachelors', 10000),
(9, 'Bilal', 'Bachelors', 13000);

SELECT * FROM emp;

CREATE CLUSTERED INDEX IX_Employees_EmployeeID 
ON emp(id);

CREATE NONCLUSTERED INDEX IX_Employees_Salary
ON emp(salary);


-- Exception Handling / Error Handling
BEGIN TRY
DECLARE @n1 FLOAT
SET @n1 = 10;
DECLARE @n2 FLOAT
SET @n2 = 0;
PRINT @n1 / @n2;
END TRY

BEGIN CATCH
PRINT 'Invalid Operand';
END CATCH

