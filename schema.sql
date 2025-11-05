-- --------------------------------------------------------
-- Database: `registration`
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `registration`;
USE `registration`;

-- --------------------------------------------------------
-- Table structure for table `form_data`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `form_data` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `text_field` VARCHAR(255),
  `password_field` VARCHAR(255),
  `email_field` VARCHAR(255),
  `phone_field` VARCHAR(20),
  `url_field` VARCHAR(255),
  `number_field` INT,
  `range_field` INT,
  `date_field` DATE,
  `time_field` TIME,
  `checkbox_field` TINYINT(1),
  `file_path` VARCHAR(255),
  `color_field` VARCHAR(7),
  `hidden_field` VARCHAR(255),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
