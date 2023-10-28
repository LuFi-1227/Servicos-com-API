create schema login;

use login;

create table users(
	id integer not null auto_increment primary key,
    userName varchar(45) not null,
    email varchar(45) not null,
    Uname varchar(45) not null,
    pass varchar(45) not null
    );
    
insert into users (userName, email, Uname, pass) values
("LuFi-1227", "luizsalvesp@hotmail.com", "Luiz Filipe de Souza Alves", "senha");