create database tcc;

create table postagem(
id int auto_increment,
titulo varchar(200) not null,
conteudo text
);

create table comentarios(
id int auto_increment,
nome varchar(200) not null,
id_postagem int not null,
mensagem text
)