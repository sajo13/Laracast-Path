
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