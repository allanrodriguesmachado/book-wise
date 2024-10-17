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
VALUES (2, 'Lamb Of God', 'Lamb', 'FUCKKKKKKKKKKKKKKKKKKKKKKKKKKK', '1995-10-21');

SELECT *
FROM books
         JOIN users on users.id = books.user_id
WHERE books.user_id = 1;



DROP TABLE users;
DROP TABLE books;


ALTER TABLE books
    ADD COLUMN release_date INT