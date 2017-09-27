-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hocksales
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `hocksales` ;

-- -----------------------------------------------------
-- Schema hocksales
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hocksales` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `hocksales` ;

-- -----------------------------------------------------
-- Table `mesas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mesas` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `mesas` (
  `idmesas` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idmesas`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clientes` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `personal`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `personal` (
  `idpersonal` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idpersonal`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pedidos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pedidos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idpedido` INT NOT NULL AUTO_INCREMENT,
  `idcliente` INT NOT NULL,
  `idpersonal` INT NOT NULL,
  `idmesa` INT NOT NULL,
  PRIMARY KEY (`idpedido`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ventas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ventas` (
  `idventa` INT NOT NULL AUTO_INCREMENT,
  `idpedido` INT NOT NULL,
  PRIMARY KEY (`idventa`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `proveedores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proveedores` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `idproveedor` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idproveedor`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `insumos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `insumos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `insumos` (
  `idinsumo` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idinsumo`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `platillos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `platillos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `platillos` (
  `idplatillo` INT NOT NULL AUTO_INCREMENT,
  `idpersonal` INT NOT NULL,
  PRIMARY KEY (`idplatillo`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `platillo_pedido`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `platillo_pedido` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `platillo_pedido` (
  `platillos_idplatillo` INT NOT NULL,
  `pedidos_idpedido` INT NOT NULL,
  PRIMARY KEY (`platillos_idplatillo`, `pedidos_idpedido`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `platillo_insumo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `platillo_insumo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `platillo_insumo` (
  `platillos_idplatillo` INT NOT NULL,
  `insumos_idinsumo` INT NOT NULL,
  PRIMARY KEY (`platillos_idplatillo`, `insumos_idinsumo`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `proveedor_insumo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proveedor_insumo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `proveedor_insumo` (
  `proveedores_idproveedor` INT NOT NULL,
  `insumos_idinsumo` INT NOT NULL,
  PRIMARY KEY (`proveedores_idproveedor`, `insumos_idinsumo`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
