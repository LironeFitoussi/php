--
-- Dummy SQL script for `names` database
-- Creates a small `persons` table and populates it with sample data
--

DROP DATABASE IF EXISTS names;
CREATE DATABASE names;
USE names;

CREATE TABLE persons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender ENUM('M','F','Other'),
    birthdate DATE,
    email VARCHAR(100)
);

INSERT INTO persons (first_name, last_name, gender, birthdate, email) VALUES
('John',  'Doe',        'M', '1990-05-14', 'john.doe@example.com'),
('Jane',  'Smith',      'F', '1988-09-23', 'jane.smith@example.com'),
('Michael','Johnson',   'M', '1995-01-30', 'michael.johnson@example.com'),
('Emily', 'Davis',      'F', '1992-11-11', 'emily.davis@example.com'),
('David', 'Brown',      'M', '1986-07-07', 'david.brown@example.com'),
('Sarah', 'Miller',     'F', '1998-03-19', 'sarah.miller@example.com'),
('Daniel','Wilson',     'M', '1993-12-05', 'daniel.wilson@example.com'),
('Olivia','Moore',      'F', '1999-06-02', 'olivia.moore@example.com'),
('Matthew','Taylor',    'M', '1991-04-17', 'matthew.taylor@example.com'),
('Sophia','Anderson',   'F', '1994-10-28', 'sophia.anderson@example.com'),
('Christopher','Thomas','M', '1987-02-13', 'chris.thomas@example.com'),
('Ava',   'Jackson',    'F', '2000-08-21', 'ava.jackson@example.com'),
('Joshua','White',      'M', '1996-05-09', 'joshua.white@example.com'),
('Isabella','Harris',   'F', '1993-03-03', 'isabella.harris@example.com'),
('Andrew','Martin',     'M', '1989-09-15', 'andrew.martin@example.com'),
('Mia',   'Thompson',   'F', '1997-01-26', 'mia.thompson@example.com'),
('Anthony','Garcia',    'M', '1990-12-12', 'anthony.garcia@example.com'),
('Charlotte','Martinez','F', '1992-07-31', 'charlotte.martinez@example.com'),
('Ryan',  'Robinson',   'M', '1994-11-07', 'ryan.robinson@example.com'),
('Amelia','Clark',      'F', '1991-06-18', 'amelia.clark@example.com'),
('Jacob', 'Rodriguez',  'M', '1995-02-27', 'jacob.rodriguez@example.com'),
('Evelyn','Lewis',      'F', '1998-04-04', 'evelyn.lewis@example.com'),
('Nathan','Lee',        'M', '1988-08-29', 'nathan.lee@example.com'),
('Lily',  'Walker',     'F', '1999-05-25', 'lily.walker@example.com'),
('Samuel','Hall',       'M', '1993-10-10', 'samuel.hall@example.com');
