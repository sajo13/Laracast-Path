
-- post table create ----
CREATE DATABASE IF NOT EXISTS LARACAST;

USE LARACAST;

CREATE TABLE posts (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL
);


INSERT INTO `posts` (`post_id`, `title`) VALUES ('1', 'TEST'), ('2', 'TEST2');


-- show all posts ---
Select * from posts;


CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `admin` TINYINT(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);


drop table users;

-- create notes table ---

CREATE TABLE `notes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `unique_email` (`email`)
);

ALTER TABLE `notes`
ADD `user_id` INT(11) NOT NULL DEFAULT '1',
ADD CONSTRAINT `fk_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `users`(`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE;

CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
  );