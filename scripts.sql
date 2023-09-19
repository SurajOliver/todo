## Database.sql
mysql -u root -p


CREATE DATABASE personaldb;

CREATE USER 'personaladmin'@'localhost' identified by 'password';

GRANT ALL PRIVILEGES on personaldb.* TO 'personaladmin'@'localhost';

FLUSH PRIVILEGES;

mysql -u personaladmin -p -D personaldb;


CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL,
    status    VARCHAR(10) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO tasks (task_name, status)
VALUES
    ('Task 1', 'Pending'),
    ('Task 2', 'New'),
    ('Task 3', 'Completed'),
    ('Task 4', 'WIP');




