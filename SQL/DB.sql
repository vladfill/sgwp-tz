CREATE DATABASE `vf_blog` CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `vf_blog`.`users` ( 
	`user_id` INT(10) NOT NULL AUTO_INCREMENT , 
	`user_fname` VARCHAR(20) NOT NULL , 
	`user_sname` VARCHAR(20) NOT NULL , 
	`user_pass` VARCHAR(20) NOT NULL , 
	`user_email` VARCHAR(20) NOT NULL , 
	`user_phone` VARCHAR(20) NOT NULL , 
	`user_time` TIMESTAMP(10) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
	`user_role` VARCHAR(20) ,
	`user_valid` INT(10) DEFAULT 0 ,
	PRIMARY KEY (`user_id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `vf_blog`.`posts` (
	`post_id` INT(10) NOT NULL AUTO_INCREMENT ,
	`post_header` VARCHAR(100) NOT NULL ,
	`post` TEXT NOT NULL ,
	`post_watchs` INT(10) ,
	`post_time` TIMESTAMP(10) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
	PRIMARY KEY (`post_id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `vf_blog`.`comments` (
	`com_id` INT(10) NOT NULL AUTO_INCREMENT ,
	`com_post` text NOT NULL ,
	`post_id` INT(10) NOT NULL ,
	`com_id_ansver` INT(10) ,
	`com_time` TIMESTAMP(10) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
	`com_valid` INT(10) DEFAULT 0 ,
	PRIMARY KEY (`com_id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `vf_blog`.`users` (`user_id`, `user_name`, `user_pass`, `user_email`) 
                       VALUES (1, 'admin', 'vladfill89', 'vlad_fill@ukr.net');