-- Crear la tabla departments
CREATE TABLE departamentos (
    id_departamento INT(10) PRIMARY KEY,
    nombre_departamento VARCHAR(200)
);

-- Crear la tabla centros
CREATE TABLE centros (
    id_centro INT(10) PRIMARY KEY,
    nombre_centro VARCHAR(300)
);

-- Crear la tabla personal
CREATE TABLE personal (
    id_personal INT(10) PRIMARY KEY,
    nombre_personal VARCHAR(25),
    apellido_personal VARCHAR(25),
    cedula_personal VARCHAR(10),
    telefono_personal_hogar VARCHAR(10),
    telefono_personal_oficina VARCHAR(10),
    telefono_personal_movil VARCHAR(50),
    correo_personal VARCHAR(50),
    estado_personal SET('Activo', 'Inactivo'),
    id_departamento INT(10),
    id_centro INT(10),
    FOREIGN KEY (id_departamento) REFERENCES departamentos(id_departamento),
    FOREIGN KEY (id_centro) REFERENCES centros(id_centro)
);

-- Crear la tabla sesiones
-- Sesiones (sessions): Esta tabla sugiere que se están gestionando sesiones o períodos académicos. Cada sesión puede representar un semestre o un año escolar.
CREATE TABLE sesiones (
    id_sesion INT(10) PRIMARY KEY,
    nombre_sesion VARCHAR(25),
    fecha_inicio DATE,
    fecha_fin DATE,
    id_centro INT(10),
    FOREIGN KEY (id_centro) REFERENCES centros(id_centro)
);

-- Crear la tabla sesiones_escolares
-- Sesiones Escolares (schoolsessions): Esta tabla podría estar relacionada con la programación de sesiones de clases específicas dentro de una sesión académica.
CREATE TABLE sesiones_escolares (
    id_sesion_escolar INT(10) PRIMARY KEY,
    nombre_sesion_escolar VARCHAR(50),
    hora_inicio TIME,
    hora_fin TIME,
    id_sesion INT(10),
    FOREIGN KEY (id_sesion) REFERENCES sesiones(id_sesion)
);

-- Crear la tabla vacaciones_escolares
CREATE TABLE vacaciones_escolares (
    id_vacaciones_escolares INT(10) PRIMARY KEY,
    nombre_vacaciones_escolares VARCHAR(50),
    fecha_inicio DATE,
    fecha_fin DATE,
    id_sesion INT(10),
    FOREIGN KEY (id_sesion) REFERENCES sesiones(id_sesion)
);

-- Crear la tabla clases
CREATE TABLE clases (
    id_clase INT(10) PRIMARY KEY,
    nombre_clase VARCHAR(100),
    id_sesion_escolar INT(10),
    FOREIGN KEY (id_sesion_escolar) REFERENCES sesiones_escolares(id_sesion_escolar)
);

-- Crear la tabla tutores
CREATE TABLE tutores (
    id_tutor INT(10) PRIMARY KEY,
    nombre_tutor VARCHAR(100),
    cedula_tutor VARCHAR(14),
    telefono_tutor_hogar VARCHAR(10),
    telefono_tutor_oficina VARCHAR(10),
    telefono_tutor_movil VARCHAR(10),
    correo_tutor VARCHAR(50)
);

-- Crear la tabla estudiantes
CREATE TABLE estudiantes (
    id_estudiante INT(10) PRIMARY KEY,
    nombre_estudiante VARCHAR(100),
    apellido_estudiante VARCHAR(100),
    genero_estudiante ENUM('M', 'F'),
    fecha_nacimiento_estudiante DATE,
    cedula_estudiante VARCHAR(14),
    partida_nacimiento_estudiante VARCHAR(10),
    observaciones_estudiante VARCHAR(1000),
    id_centro INT(10),
    FOREIGN KEY (id_centro) REFERENCES centros(id_centro)
);

-- Crear la tabla usuarios
CREATE TABLE usuarios (
    id_usuario INT(10) PRIMARY KEY,
    id_tutor INT(10),
    id_personal INT(10),
    id_estudiante INT(10),
    nombre_usuario VARCHAR(15),
    contraseña_usuario CHAR(150),
    salt_usuario CHAR(32),
    FOREIGN KEY (id_tutor) REFERENCES tutores(id_tutor),
    FOREIGN KEY (id_personal) REFERENCES personal(id_personal),
    FOREIGN KEY (id_estudiante) REFERENCES estudiantes(id_estudiante)
);

-- Crear la tabla estudiantes_tutores
CREATE TABLE estudiantes_tutores (
    id_estudiante_tutor INT(10) PRIMARY KEY,
    id_tutor INT(10),
    id_estudiante INT(10),
    FOREIGN KEY (id_tutor) REFERENCES tutores(id_tutor),
    FOREIGN KEY (id_estudiante) REFERENCES estudiantes(id_estudiante)
);

-- Crear la tabla clases_estudiantes
CREATE TABLE clases_estudiantes (
    id_clase_estudiante INT(10) PRIMARY KEY,
    id_clase INT(10),
    id_estudiante INT(10),
    FOREIGN KEY (id_clase) REFERENCES clases(id_clase),
    FOREIGN KEY (id_estudiante) REFERENCES estudiantes(id_estudiante)
);


-- Según las tablas proporcionadas, parece que se está creando una base de datos para gestionar una institución educativa o un sistema de gestión escolar. 
-- Aquí hay una descripción general de la iniciativa o el proyecto que se está trabajando:

-- Centros (centers): Esta tabla almacena información sobre los centros educativos, lo que sugiere que se está gestionando una red de escuelas o instituciones.

-- Personal (staff): La tabla de personal indica que se está llevando un registro de los miembros del personal de la institución educativa, como profesores y 
-- personal administrativo.

-- Sesiones (sessions): Esta tabla sugiere que se están gestionando sesiones o períodos académicos. Cada sesión puede representar un semestre o un año escolar.

-- Sesiones Escolares (schoolsessions): Esta tabla podría estar relacionada con la programación de sesiones de clases específicas dentro de una sesión académica.

-- Departamentos (departments): La tabla de departamentos podría utilizarse para organizar el personal por departamentos académicos o administrativos.

-- Clases (classes): Se utiliza para almacenar información sobre las clases o asignaturas ofrecidas por la institución.

-- Tutores (guardians): Registra información sobre los tutores o padres de los estudiantes, lo que sugiere que se está gestionando la comunicación con los padres.

-- Estudiantes (students): Almacena información detallada sobre los estudiantes matriculados en la institución, incluyendo sus datos personales y de contacto.

-- Usuarios (users): Puede estar relacionada con la autenticación y el acceso de los usuarios, lo que podría incluir tanto al personal como a los tutores y estudiantes.

-- Relaciones Estudiantes-Tutores (students_guardians): Permite establecer relaciones entre estudiantes y sus tutores o padres.

-- Relaciones Clases-Estudiantes (classes_students): Registra las relaciones entre las clases y los estudiantes matriculados en esas clases.

-- En resumen, este proyecto parece estar relacionado con un sistema de gestión escolar que incluye la administración de personal, 
-- estudiantes, sesiones académicas, clases y la comunicación con los tutores de los estudiantes. 
-- El sistema podría utilizarse para gestionar la información académica y administrativa de una institución educativa, como una escuela o una universidad.


-- Eliminar el procedimiento almacenado si ya existe
DROP PROCEDURE IF EXISTS GenerateSchoolSessions;

-- Crear el procedimiento almacenado
DELIMITER //

CREATE PROCEDURE GenerateSchoolSessions()
BEGIN
    DECLARE session_id INT;
    DECLARE sess_id INT;
    DECLARE startTime TIME;
    DECLARE endTime TIME;
    DECLARE currentTime TIME;
    DECLARE currentId INT;

    SET session_id = 25;
    SET sess_id = 36;
		SET currentId = 505;

    WHILE session_id <= sess_id DO
        SET startTime = '09:15:00';
        SET endTime = '21:00:00';

        SET currentTime = startTime;

        WHILE currentTime <= endTime DO
            INSERT INTO schoolsessions (schoolsession_id, schoolsession_name, schoolsession_timestart, schoolsession_timeend, session_id)
            VALUES (currentId, CONCAT('Sesión ', DATE_FORMAT(currentTime, '%H:%i'), '-', DATE_FORMAT(ADDTIME(currentTime, '00:45:00'), '%H:%i')), currentTime, ADDTIME(currentTime, '00:45:00'), session_id);

            SET currentTime = ADDTIME(currentTime, '01:00:00'); -- Avanzar 1 hora
            SET currentId = currentId + 1; -- Incrementar el id
        END WHILE;

        SET session_id = session_id + 1;
    END WHILE;
END //

DELIMITER ;

-- Llamar al procedimiento para generar registros
CALL GenerateSchoolSessions();







-- Eliminar el procedimiento almacenado si ya existe
DROP PROCEDURE IF EXISTS Generate;

-- Crear el procedimiento almacenado
DELIMITER //
CREATE PROCEDURE Generate()
BEGIN
    -- Variables
    DECLARE classCount INT;
    DECLARE studentCount INT;
    DECLARE id INT;
    DECLARE class INT;

    SET classCount = 1;
    SET studentCount = 1;
    SET id = 1;
    SET class = 6;

    -- Iterar sobre los estudiantes
    WHILE studentCount <= 10 DO
        -- Iterar sobre las clases
        WHILE classCount <= 6 DO
            INSERT INTO classes_students (cs_id, class_id, student_id)
            VALUES (id, classCount, studentCount);

            SET id = id + 1;
            SET classCount = classCount + 1;
        END WHILE;

        -- Restablecer classCount a 1 después de completar la iteración sobre las clases
        SET classCount = 1;

        SET studentCount = studentCount + 1;
    END WHILE;
END //

DELIMITER ;

-- Llamar al procedimiento para generar registros
CALL Generate();
