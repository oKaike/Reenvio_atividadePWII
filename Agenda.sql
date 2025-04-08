create database Agenda;
use Agenda;

create table Tarefa(
id_tarefa int not null,
descricao_tarefa varchar (100),
data_inicio_tarefa date,
data_fim_tarefa date,
usuario_nome varchar (100) not null unique,
senha_usuario varchar (15) not null unique,
primary key (id_tarefa))
;

insert into Tarefa values
(01, 'Tarefa de Php','2025-04-02','2025-04-09', 'Robinho Pereira','Diversao12345#'),
(02, 'Tarefa de JavaScript','2025-04-22','2025-05-17','Daniel Barbosa','Espanha123!'),
(03, 'Tarefa de Desenvolvimento de Sistemas','2025-06-10','2025-07-10', 'Bruno Ronaldo','BrasilL23!'),
(04, 'Tarefa de Php','2025-04-02','2025-04-09', 'Raul Prestes','Romano1257?'),
(05, 'Tarefa de Banco de Dados','2025-04-02','2025-04-09', 'Luiz Limeiras','luizinhoLegal*');

SELECT * FROM Tarefa;