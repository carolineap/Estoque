CREATE DATABASE gerenciamento_estoque;
USE gerenciamento_estoque;

CREATE TABLE itemPrato (
   codPrato BIGINT UNSIGNED NOT NULL,
   codProduto BIGINT  UNSIGNED NOT NULL,
   quantidadeProduto REAL NOT NULL,
   unidade VARCHAR(50) NOT NULL,
   FOREIGN KEY (unidade) REFERENCES unidadeMedida(unidade),
   FOREIGN KEY (codProduto) REFERENCES produto(codProduto),
   FOREIGN KEY (codPrato) REFERENCES prato(codPrato),
   PRIMARY KEY (codProduto, codPrato)
);

CREATE TABLE itemProduto (
	codProduto SERIAL NOT NULL,
	dataValidade DATE NOT NULL,
	dataCompra TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	quantidadeItem INT NOT NULL DEFAULT 0,
	precoItem REAL,
	unidade VARCHAR(50) NOT NULL,
	FOREIGN KEY (unidade) REFERENCES unidadeMedida(unidade),
    FOREIGN KEY (codProduto) REFERENCES produto(codProduto),
    PRIMARY KEY (codProduto, dataCompra, dataValidade)
 );
CREATE TABLE prato (
    codPrato SERIAL NOT NULL,
    nomePrato VARCHAR(50) NOT NULL, 
  	precoPrato REAL,
    PRIMARY KEY (codPrato)
);

CREATE TABLE produto (
    codProduto SERIAL NOT NULL,
    limite INT NOT NULL,
    nomeProduto VARCHAR(50) NOT NULL, 
    fornecido BIT(1) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    marca VARCHAR(50),
    PRIMARY KEY (codProduto),
    FOREIGN KEY (categoria) REFERENCES categoriaProduto(categoria)
);

CREATE TABLE unidadeMedida (
    unidade VARCHAR(50) NOT NULL,
    PRIMARY KEY (unidade) 
);

CREATE TABLE categoriaProduto (
    categoria varchar(50) NOT NULL,
    PRIMARY KEY (categoria) 
);

