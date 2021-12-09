# Create schemas

# Create tables
CREATE TABLE IF NOT EXISTS clients
(
    id INT NOT NULL,
    nom VARCHAR(15),
    cognoms VARCHAR(45),
    adreca VARCHAR(150),
    cpostal VARCHAR(5),
    localitat INT,
    numTel VARCHAR(45),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS localitats
(
    id INT NOT NULL,
    nom VARCHAR(45),
    provincia INT,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS provincies
(
    id INT NOT NULL,
    nom VARCHAR(45),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS productes
(
    id INT NOT NULL,
    tipus ENUM('pizzes', 'hamburgueses', 'begudes'),
    nom VARCHAR(45),
    descripcio VARCHAR(250),
    imatge VARCHAR(250),
    preu FLOAT(0),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS empleats
(
    id INT NOT NULL,
    nom VARCHAR(45),
    cognoms VARCHAR(100),
    nif VARCHAR(15),
    telefon VARCHAR(15),
    traballaCom ENUM('cuiner', 'repartidor'),
    botiga INT,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS botigues
(
    id INT NOT NULL,
    adreca VARCHAR(150),
    cpostal VARCHAR(5),
    localitat INT,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS comandes
(
    id INT NOT NULL,
    dataHora DATETIME,
    domicili TINYINT(1),
    client INT,
    preuTotal FLOAT(0),
    botiga INT,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS lineesComanda
(
    id TINYINT(1) NOT NULL,
    idComanda INT,
    producte INT,
    quantitat INT,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS lliuraments
(
    id INT NOT NULL,
    comanda INT,
    repartidor INT,
    dataHora DATETIME,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS categoriesPizzes
(
    id INT NOT NULL,
    nom VARCHAR(45),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS pizzaCategoria
(
    id INT NOT NULL,
    pizza INT,
    categoria INT,
    PRIMARY KEY(id)
);


# Create FKs
ALTER TABLE localitats
    ADD    FOREIGN KEY (provincia)
    REFERENCES provincies(id)
;
    
ALTER TABLE clients
    ADD    FOREIGN KEY (localitat)
    REFERENCES localitats(id)
;
    
ALTER TABLE botigues
    ADD    FOREIGN KEY (localitat)
    REFERENCES localitats(id)
;
    
ALTER TABLE empleats
    ADD    FOREIGN KEY (botiga)
    REFERENCES botigues(id)
;
    
ALTER TABLE comandes
    ADD    FOREIGN KEY (client)
    REFERENCES clients(id)
;
    
ALTER TABLE lineesComanda
    ADD    FOREIGN KEY (idComanda)
    REFERENCES comandes(id)
;
    
ALTER TABLE lineesComanda
    ADD    FOREIGN KEY (producte)
    REFERENCES productes(id)
;
    
ALTER TABLE comandes
    ADD    FOREIGN KEY (botiga)
    REFERENCES botigues(id)
;
    
ALTER TABLE lliuraments
    ADD    FOREIGN KEY (comanda)
    REFERENCES comandes(id)
;
    
ALTER TABLE lliuraments
    ADD    FOREIGN KEY (repartidor)
    REFERENCES empleats(id)
;
    
ALTER TABLE pizzaCategoria
    ADD    FOREIGN KEY (categoria)
    REFERENCES categoriesPizzes(id)
;
    
ALTER TABLE pizzaCategoria
    ADD    FOREIGN KEY (pizza)
    REFERENCES productes(id)
;
    

# Create Indexes

