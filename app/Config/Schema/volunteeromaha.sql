SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `volunteeromaha` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `volunteeromaha` ;

-- -----------------------------------------------------
-- Table `volunteeromaha`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `volunteeromaha`.`users` ;

CREATE TABLE IF NOT EXISTS `volunteeromaha`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(50) NOT NULL,
  `last_name` VARCHAR(50) NOT NULL,
  `role` VARCHAR(20) NULL,
  `street` VARCHAR(50) NULL,
  `city` VARCHAR(50) NULL,
  `st` VARCHAR(50) NULL,
  `zip` VARCHAR(50) NULL,
  `phone` VARCHAR(50) NULL,
  `email` VARCHAR(50) NULL,
  `fax` VARCHAR(50) NULL,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `activated` TINYINT(4) NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
