CREATE DATABASE chapeu_seletor default charset=utf8;

USE chapeu_seletor;

CREATE TABLE bruxo(
        id             serial                  PRIMARY KEY,
        apelido        varchar(50)             NOT NULL,
        celular        bigint,
        nome           varchar(50)             NOT NULL,
        senha          varchar(40)             NOT NULL
);

CREATE TABLE casa(
        id             serial                  PRIMARY KEY,  
        nome           varchar(20)             NOT NULL               
);

CREATE TABLE pergunta(
        id             serial                  PRIMARY KEY,
        pergunta       text                    NOT NULL,
        desempate      bool                    NOT NULL,
        KEY_casa       bigint unsigned         NOT NULL,

        CONSTRAINT KEY_casa
                FOREIGN KEY(KEY_casa) REFERENCES casa(id)
);

CREATE TABLE alternativa(
        id             serial                  PRIMARY KEY,
        texto          text                    NOT NULL,
        pontuacao      int                     NOT NULL,
        KEY_pergunta   bigint unsigned         NOT NULL,
        KEY_casa       bigint unsigned         NOT NULL,
        
        CONSTRAINT KEY_perguntaFK 
                FOREIGN KEY (KEY_pergunta) REFERENCES pergunta(id),
                
        CONSTRAINT KEY_casaFK 
                FOREIGN KEY(KEY_casa) REFERENCES casa(id)
);

CREATE TABLE pontuacao(	
	      KEY_casa        bigint unsigned        NOT NULL,
	      KEY_bruxo       bigint unsigned        NOT NULL,
	      valor           int                    NOT NULL,   
	
        PRIMARY KEY (KEY_casa, KEY_bruxo),
	
        CONSTRAINT KEYCASAfk
        	FOREIGN KEY(KEY_casa) REFERENCES casa(id) 
	        ON UPDATE CASCADE,
	
        CONSTRAINT KEYBRUXOFK 
	        FOREIGN KEY(KEY_bruxo) references bruxo(id)
	        ON UPDATE CASCADE
);

/* ----- INSERTS ----- */

INSERT INTO casa(nome) values('Grifinória');

INSERT INTO casa(nome) values('Corvinal');

INSERT INTO casa(nome) values('Sonserina');

INSERT INTO casa(nome) values('Lufa-Lufa');

/* pergunta/alternativa grifinoria */

/* pergunta um */

INSERT INTO pergunta(pergunta, desempate, KEY_casa) values("casa1 grifinoria->Qual sua cor favorita? ", false, 1);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" A1 grifinoria: Branco", 2, 1,1);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" B1 grifinoria: Azul", 4, 1,1);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" C1 grifinoria: Verde", 6, 1,1);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" D1 grifinoria: Preto", 8, 1,1);
/* pergunta dois */
INSERT INTO pergunta(pergunta, desempate, KEY_casa) values("casa 1 grifinoria->Qual seu filme favorito? ", false, 1);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" A2 grifinoria: Exterminador", 2, 2,1);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" B2 grifinoria: Homem de Ferro", 4, 2,1);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" C2 grifinoria: BatMan versus SuperMan", 6, 2,1);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" D2 grifinoria: Batman Begin", 8, 2,1);


/* pergutna/alternativa corvinal */

INSERT INTO pergunta(pergunta, desempate, KEY_casa) values("casa2 corvinal->Qual seu heroi favorito? ", false, 2);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" A1 corvinal: Batman", 2, 3,2);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" B1 corvinal: Homem de Ferro", 4, 3,2);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" C1 corvianl: SuperMan", 6, 3,2);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" D1 crovinal: Hulk", 8, 3,2);

/* pergunta dois */
INSERT INTO pergunta(pergunta, desempate, KEY_casa) values("casa 2corvinal->Qual seu vilão favorito? ", false, 2);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" A2 corvinal: Coringa", 2, 4,2);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" B2 corvinal: Doutor Octopus", 4, 4,2);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" C2 corvinal: Duende verde", 6, 4,2);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" D2 corvinal: Loki", 8, 4,2);


/* perguntas/alternativas Sonserina */

INSERT INTO pergunta(pergunta, desempate, KEY_casa) values("casa3 sonserina->Qual o vilão mais vilão? ", false, 3);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" A1 sonserina: Loki", 2, 5,3);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" B1 sonserina: Thanos", 4, 5,3);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" C1 sonserina: Ultron", 6, 5,3);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" D1 sonserina: Apocalipse", 8, 5,3);

/* pergunta dois */
INSERT INTO pergunta(pergunta, desempate, KEY_casa) values("casa3 sonserina->Qual seu personagem favorito? ", false, 3);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" A2 sonserina: Harry", 2, 6,3);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" B2 sonserina: Hermione", 4, 6,3);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" C2 sonserina: Rony", 6, 6,3);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" D2 sonserina: Albus Dumbledore", 8, 6,3);

/* perguntas/alternativas Lufa-Lufa */

INSERT INTO pergunta(pergunta, desempate, KEY_casa) values("casa 2corvinal->Qual o mais maldoso? ", false, 4);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" A1 lufa: professor Severus Snape ", 2, 7,4);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" B1 lufa: Bellatrix Lestrange", 4, 7,4);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" C1 lufa: Dolores Umbridge", 6, 7,4);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" D1 lufa: Lord Voldemort", 8, 7,4);

/* pergunta dois */
INSERT INTO pergunta(pergunta, desempate, KEY_casa) values("casa 2sonserina->Qual seu feitiço favorito? ", false, 4);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" A2 lufa: Imperius", 2, 8,4);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" B2 lufa: Petrificus Totalis", 4, 8,4);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" C2 lufa: Wingardium Leviosa", 6, 8,4);

INSERT INTO alternativa(texto, pontuacao, KEY_pergunta, KEY_casa) values(" D2 lufa: Cruciatus", 8, 8,4);




