-- MySQL Script generated by MySQL Workbench
-- Sat Jul  1 22:03:45 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema straipsniudb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema straipsniudb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `straipsniudb` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
USE `straipsniudb` ;

-- -----------------------------------------------------
-- Table `straipsniudb`.`straipsniai`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `straipsniudb`.`straipsniai` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nuotrauka` VARCHAR(100) NOT NULL,
  `pavadinimas` VARCHAR(45) NOT NULL,
  `data` DATE NOT NULL,
  `tekstas` VARCHAR(1000) NOT NULL,
  `autorius` VARCHAR(45) NOT NULL,
  `kategorija` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `straipsniudb`.`autoriai`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `straipsniudb`.`autoriai` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `vardas` VARCHAR(45) NOT NULL,
  `pavarde` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `straipsniudb`.`komentarai`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `straipsniudb`.`komentarai` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `straipsnioID` INT NOT NULL,
  `data` DATE NOT NULL,
  `vardas` VARCHAR(45) NOT NULL,
  `tekstas` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `straipsniudb`.`archyvas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `straipsniudb`.`archyvas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `menuo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `straipsniudb`.`kategorijos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `straipsniudb`.`kategorijos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pavadinimas` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;