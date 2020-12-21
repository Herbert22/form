create database if not exists usuario;

use usuario;

create table if not exists usurios (
    id int auto_increment not null,
    nome varchar (50) not null,
    email varchar (50) not null,
    created datetime not null,
    modifited datetime,
    primary key (id)
);

select * from usurios;