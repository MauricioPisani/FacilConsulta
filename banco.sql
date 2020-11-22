create database if not exists consulta;
USE consulta;
create table if not exists medico(id int(6) AUTO_INCREMENT,email varchar(100) not null,nome varchar(60) not null,senha varchar(33) not null,data_criacao timestanp,data_alteracao timestanp,primary key(id));
create table if not exists horario(id int(6) AUTO_INCREMENT,id_medico int(6) not null,data_horario datetime not null,horario_agendado boolean,data_criacao timestanp,data_alteracao timestanp,primary key(id),foreign key(id_medico) references medico(id));
