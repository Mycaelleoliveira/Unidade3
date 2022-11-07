mysql -u root

create database atividade;
 
use atividade;

create table produto(
    idproduto int primary key auto_increment, 
    nome varchar (30) not null,
    descricao varchar (100) not null,
    quantidade varchar (30) not null,
    valor varchar (30) not null,
    fornecedor varchar (30) not null,
    dtcadastro date
);

insert into produto values (null, 'Vinho Malbec', 'Uva Malbec imporatada da Argentina', '5', '50,00', 'Reservado', '16-2-2');

select * from produto;