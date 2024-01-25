CREATE DATABASE IF NOT EXISTS temperature_database;
USE temperature_database;

CREATE TABLE IF NOT EXISTS temperatures (
    id INT AUTO_INCREMENT PRIMARY KEY,
    temperature_celsius FLOAT,
    temperature_fahrenheit FLOAT,
    temperature_kelvin FLOAT,
    date_recorded DATE
);

ALTER TABLE temperatures MODIFY COLUMN date_recorded DATETIME NOT NULL;
