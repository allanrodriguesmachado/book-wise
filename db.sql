CREATE TABLE users
(
    id        INTEGER PRIMARY KEY AUTOINCREMENT,
    full_name VARCHAR(50)        NOT NULL,
    email     VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE books
(
    id           INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id      INTEGER NOT NULL,
    title        VARCHAR,
    author       VARCHAR(100),
    description  text,
    release_date DATETIME,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
);

INSERT INTO users (full_name, email)
VALUES ('Allan Rodrigues', 'allan@php.com.br');

INSERT INTO books (user_id, title, author, description, release_date)
VALUES (2, 'sdsadsdsadsadsdasd', 'TESTE', 'FUCKKKKKKKKKKKKKKKKKKKKKKKKKKK', '1995-10-21');

SELECT *
FROM books
         JOIN users on users.id = books.user_id
WHERE books.user_id = 1;



DROP TABLE users;
DROP TABLE books;


ALTER TABLE books
    ADD COLUMN release_date INT



    INSERT INTO books (user_id, title, author, description, release_date) VALUES
(2, 'A Cidade e as Serras', 'Eça de Queirós', 'Um retrato da vida rural versus a vida urbana.', '1901-01-01'),
(2, 'Grande Sertão: Veredas', 'Guimarães Rosa', 'A jornada de Riobaldo no sertão brasileiro.', '1956-01-01'),
(2, 'O Lobo da Estepe', 'Hermann Hesse', 'A busca de um homem por seu verdadeiro eu.', '1927-01-01'),
(2, 'Cem Anos de Solidão', 'Gabriel García Márquez', 'A saga da família Buendía e seu destino trágico.', '1967-06-05'),
(2, 'A Divina Comédia', 'Dante Alighieri', 'Uma viagem através do Inferno, Purgatório e Paraíso.', '1320-01-01'),
(2, 'Os Irmãos Karamazov', 'Fiódor Dostoiévski', 'Uma exploração profunda da moralidade e da fé.', '1880-01-01'),
(2, 'O Livro dos Espíritos', 'Allan Kardec', 'Fundamentos do espiritismo e suas doutrinas.', '1857-01-01'),
(2, 'O Sol é para Todos', 'Harper Lee', 'Uma reflexão sobre justiça e moralidade no sul dos EUA.', '1960-07-11');
