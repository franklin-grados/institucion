-- Crear la tabla departments
CREATE TABLE departments (
    department_id INT(10) PRIMARY KEY,
    department_name VARCHAR(200)
);

-- Crear la tabla centers
CREATE TABLE centers (
    center_id INT(10) PRIMARY KEY,
    center_name VARCHAR(300)
);

-- Crear la tabla staff
CREATE TABLE staff (
    staff_id INT(10) PRIMARY KEY,
    staff_firstname VARCHAR(25),
    staff_lastname VARCHAR(25),
    staff_nric VARCHAR(10),
    staff_phone_home VARCHAR(10),
    staff_phone_office VARCHAR(10),
    staff_phone_mobile VARCHAR(50),
    staff_email VARCHAR(50),
    staff_status SET('Active', 'Inactive'),
    department_id INT(10),
    center_id INT(10),
    FOREIGN KEY (department_id) REFERENCES departments(department_id),
    FOREIGN KEY (center_id) REFERENCES centers(center_id)
);

-- Crear la tabla sessions
CREATE TABLE sessions (
    session_id INT(10) PRIMARY KEY,
    session_name VARCHAR(25),
    session_start DATE,
    session_end DATE,
    center_id INT(10),
    FOREIGN KEY (center_id) REFERENCES centers(center_id)
);

-- Crear la tabla schoolsessions
CREATE TABLE schoolsessions (
    schoolsession_id INT(10) PRIMARY KEY,
    schoolsession_name VARCHAR(50),
    schoolsession_timestart TIME,
    schoolsession_timeend TIME,
    session_id INT(10),
    FOREIGN KEY (session_id) REFERENCES sessions(session_id)
);



-- Crear la tabla schoolholidays
CREATE TABLE schoolholidays (
    schoolholiday_id INT(10) PRIMARY KEY,
    schoolholiday_name VARCHAR(50),
    schoolholiday_datestrt DATE,
    schoolholiday_dateend DATE,
    session_id INT(10),
    FOREIGN KEY (session_id) REFERENCES sessions(session_id)
);

-- Crear la tabla classes
CREATE TABLE classes (
    class_id INT(10) PRIMARY KEY,
    class_name VARCHAR(100),
    schoolsession_id INT(10),
    FOREIGN KEY (schoolsession_id) REFERENCES schoolsessions(schoolsession_id)
);

-- Crear la tabla guardians
CREATE TABLE guardians (
    guardian_id INT(10) PRIMARY KEY,
    guardian_name VARCHAR(100),
    guardian_nric VARCHAR(14),
    guardian_phone_home VARCHAR(10),
    guardian_phone_office VARCHAR(10),
    guardian_phone_mobile VARCHAR(10),
    guardian_email VARCHAR(50)
);

-- Crear la tabla students
CREATE TABLE students (
    student_id INT(10) PRIMARY KEY,
    student_firstname VARCHAR(100),
    student_lastname VARCHAR(100),
    student_gender ENUM('M', 'F'),
    student_dob DATE,
    student_nric VARCHAR(14),
    student_bc VARCHAR(10),
    student_remarks VARCHAR(1000),
    center_id INT(10),
    FOREIGN KEY (center_id) REFERENCES centers(center_id)
);

-- Crear la tabla users
CREATE TABLE users (
    user_id INT(10) PRIMARY KEY,
    guardian_id INT(10),
    staff_id INT(10),
    student_id INT(10),
    user_login VARCHAR(15),
    user_password CHAR(150),
    user_salt CHAR(32),
    FOREIGN KEY (guardian_id) REFERENCES guardians(guardian_id),
    FOREIGN KEY (staff_id) REFERENCES staff(staff_id),
    FOREIGN KEY (student_id) REFERENCES students(student_id)
);

-- Crear la tabla students_guardians
CREATE TABLE students_guardians (
    gs_id INT(10) PRIMARY KEY,
    guardian_id INT(10),
    student_id INT(10),
    FOREIGN KEY (guardian_id) REFERENCES guardians(guardian_id),
    FOREIGN KEY (student_id) REFERENCES students(student_id)
);

-- Crear la tabla classes_students
CREATE TABLE classes_students (
    cs_id INT(10) PRIMARY KEY,
    class_id INT(10),
    student_id INT(10),
    FOREIGN KEY (class_id) REFERENCES classes(class_id),
    FOREIGN KEY (student_id) REFERENCES students(student_id)
);
