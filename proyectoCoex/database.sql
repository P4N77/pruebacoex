create database basescreditos;


CREATE TABLE tbl_usuarios (
`id_usu` INT(12) PRIMARY KEY,
`nom_usu` VARCHAR(50)  NOT NULL
`ape_usu` VARCHAR(50)  NOT NULL
`ciu_usu` VARCHAR(50)  NOT NULL
`tel_usu` VARCHAR(50)  NOT NULL
`dir_usu` VARCHAR(50)  NOT NULL
`cup_dis_usu` INT(50)  NOT NULL
`cup_tot_usu` INT(50)  NOT NULL
`dia_usu` INT(10)  NOT NULL
);



CREATE TABLE tbl_creditos (
`id_cre` INT(12) PRIMARY KEY,
`mon_cre` VARCHAR(50)  NOT NULL
`cuo_ini_cre` INT(50)  NOT NULL
`tas_cre` VARCHAR(50)  NOT NULL
`fec_des_cre` DATE  NOT NULL
`cuo_cre` INT(5)  NOT NULL
`id_usu_cre` INT(12)  NOT NULL
`fec_cre` DATE  NOT NULL
`cli_cre` VARCHAR(50)  NOT NULL
`obs_cre` TEXT  NOT NULL
FOREIGN KEY(`id_usu_cre`) REFERENCES `tbl_usuarios`(`id_usu`)
);
