create table produtos (
	id int primary key auto_increment,
    nomeproduto varchar(50) not null,
    dtavalidade varchar(11) not null,
    codbarras varchar(13) not null,
    tipoproduto varchar(20)
);

create table estoque (
	idproduto int primary key,
    qtdentrada int not null,
    qtdsaida int not null,
    dataentrada varchar(11) not null,
    datasaida varchar(11) not null,
    valorentrada float(7,2) not null,
    valorsaida float(7,2) not null,
    idprodutovarejo int,
    idprodutoatacadoint int 
);
create table varejo (
	idproduto int,
    precovarejo float(7,2) not null
);

create table atacado (
	idproduto int,
    precovarejo float(7,2) not null
);

create table movimentacoes (
	idmovimentacao int primary key,
    idprodutoestoque int
);

create table pessoafisica (
	pk_pessoafisica int primary key auto_increment,
    validadorpessoafisica enum('1'),
    nome varchar(100),
    cpf varchar(14),
    telefone JSON
);

create table pessoasjuridicas (
	pk_pessoajuridica int primary key auto_increment,
    validadorpessoafisica enum('2'),
    cnpj varchar(18),
    telefone JSON,
    endereco JSON,
    cep JSON
);

create table clientes (
	tipocliente varchar(1) not null,
	idmovimentacao int
);