use crud;

create table crud.usuario(
id int not null auto_increment primary key,
nome varchar (250) not null,
nickname varchar (250) not null unique,
senha varchar (100)
);

create table crud.endereco(
id int not null auto_increment primary key,
cep varchar (10) not null,
rua varchar (200) not null,
bairro varchar (200) not null,
numero varchar (10) not null,
complemento varchar (200) not null,
cidade varchar (50) not null,
estado varchar (20) not null,
id_usuario int, foreign key(id_usuario) references usuario(id) on delete cascade on update cascade
);
-- on delete cascade (ao deletar um usuario ele também deleta tudo que está relacionado a ele em outras tabelas
-- describe ou desc nome_tabela; mostra a tabela selecionada
create table crud.telefone(
id int not null auto_increment primary key,
telefone varchar (14) not null,
id_usuario int, foreign key(id_usuario) references usuario(id) on delete cascade on update cascade
);
-- adicionar coluna depois de uma coluna especifica
alter table usuario
add column email varchar (100) not null after nickname;