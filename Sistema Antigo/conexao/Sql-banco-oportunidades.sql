create table academico(
    id_academico int not null auto_increment,
    nome varchar(500),
    endereco varchar(100),
    estado char(2),
    email varchar(300),
    senha varchar(300),
    data_cadastro date,
    telefone varchar(50),
    cidade varchar(200),
    status varchar(40) not null default 'ATIVO'
);

create table dados_curriculo(
	id_curriculo int not null auto_increment,
    id_academico int,
    graduacao varchar(300),
    instituicao_graduacao varchar(300),
    pos_graduacao varchar(300),
    instituicao_pos_graduacao varchar(300),
	mestrado varchar(300),
    instituicao_mestrado varchar(300),
    cursos_e_eventos varchar(1000),
    outras_experiencias varchar(1000),
    data_cadastro date,
    status varchar(10),
    
    foreign key (id_academico) references academico(id_academico)
);


create table empregador (
    id_empregador int not null primary key auto_increment,
    cnpj varchar(40) not null,
    nome_empresa vachar(200) not null,
    endereco varchar(200) not null,
    cidade varchar(100) not null,
    estado char(2) not null,
    email varchar(120) not null,
    telefone varchar(30) not null,
    senha varchar(40) not null,
    data_cadastro date not null,
    status varchar(30) not null
);

create table dados_vaga(
    id_dado_vaga int not null primary key auto_increment,
    id_empregador int not null,
    descricao varchar(250) not null,
    faixa_salarial float not null, 
    local_vaga varchar(50) not null,
    areas_abrangidas text not null,
    nivel_vaga varchar(100) not null,
    periodo varchar(90) not null,
    funcao_exercidade text not null,
    resquisitos text not null,
    beneficios text not null,
    data_cadastro date not null,
    status varchar(30) not null


);