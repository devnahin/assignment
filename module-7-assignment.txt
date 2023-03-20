CREATE TABLE employees (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    age INT,
    salary DECIMAL(10, 2),
    department_id INT
);

CREATE TABLE departments (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    manager VARCHAR(255)
);


-- Insert data into departments table
INSERT INTO departments (id, name, manager) VALUES
(1, 'Finance', 'Alice Johnson'),
(2, 'Marketing', 'Bob Smith'),
(3, 'Human Resources', 'Catherine Brown'),
(4, 'IT', 'David Clark');

-- Insert data into employees table
INSERT INTO employees (id, name, age, salary, department_id) VALUES
(1001, 'Emma Wilson', 30, 55000, 1),
(1002, 'Olivia Davis', 35, 62000, 1),
(1003, 'Liam Thompson', 28, 48000, 2),
(1004, 'Noah Jones', 32, 52000, 2),
(1005, 'Sophia Garcia', 40, 68000, 3),
(1006, 'Ava Martinez', 29, 71000, 3),
(1007, 'Ethan White', 45, 77000, 4),
(1008, 'Mia Taylor', 24, 39000, 4);


/*
        Deliverable 1: SQL commands
*/


-- Employees table

-- a. This query selects all columns and rows from the employees table.

SELECT * FROM employees;

-- b. This query selects the name and salary columns of all employees with a salary greater than 50,000.

SELECT name, salary FROM employees WHERE salary > 50000;

-- c. This query calculates the average salary of all employees in the table.

SELECT AVG(salary) FROM employees;

-- d. This query counts the number of employees who work in the "Marketing" department.

SELECT COUNT(*) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = 'Marketing');

-- e. This query updates the salary of the employee with an id of 1001 to 60,000.

UPDATE employees SET salary = 60000 WHERE id = 1001;

-- f. This query deletes all employees with a salary less than 30,000.

DELETE FROM employees WHERE salary < 30000;

-- Departments table

-- a. This query selects all columns and rows from the departments table.

SELECT * FROM departments;

-- b. This query selects the name and manager columns of the "Finance" department.

SELECT name, manager FROM departments WHERE name = 'Finance';

-- c. This query calculates the total number of employees in each department by joining the employees and departments tables on the department_id column and then grouping the results by the department name.

SELECT d.name, COUNT(e.id) as num_employees
FROM departments d
JOIN employees e ON d.id = e.department_id
GROUP BY d.name;

-- d. This query inserts a new department called "Research" with a manager named "John Doe" into the departments table.

INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');


