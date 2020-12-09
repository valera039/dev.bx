CREATE TABLE IF NOT EXISTS publisher
(
    ID int not null auto_increment,
    NAME varchar(500) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE book
(
    ID int not null auto_increment,
    NAME varchar(500) not null,
    ISSUE_YEAR YEAR,
    PUBLISHER_ID int,
    ISBN char(17),
    PRICE DECIMAL(10, 2),
    QUANTITY int unsigned not null default 0,
    PRIMARY KEY (ID),
    INDEX IX_BOOK_PUBLISHER (PUBLISHER_ID),
    FOREIGN KEY FK_BOOK_PUBLISHER (PUBLISHER_ID) references publisher(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

CREATE TABLE author
(
    ID int not null auto_increment,
    NAME varchar(500) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE author_book
(
    AUTHOR_ID int not null,
    BOOK_ID int not null,
    PRIMARY KEY (AUTHOR_ID, BOOK_ID),
    INDEX IX_BOOK (BOOK_ID),
    FOREIGN KEY FK_AUTHOR_BOOK_AUTHOR (AUTHOR_ID) references author(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
    FOREIGN KEY FK_AUTHOR_BOOK_BOOK (BOOK_ID) references book(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

INSERT INTO publisher (ID, NAME)
VALUES (1, 'Питер'),
       (2, 'Лениздат'),
       (3, 'Азбука');

INSERT INTO author (ID, NAME)
VALUES (1, 'Роберт Мартин'),
       (2, 'Скотт Чакон'),
       (3, 'Бен Штраус'),
       (4, 'Артур Конан Дойл'),
       (5, 'Шон Байателл');

INSERT INTO book (ID, NAME, ISSUE_YEAR, PUBLISHER_ID, PRICE, QUANTITY)
VALUES (1, 'Чистая архитектура', '2018', 1, 354, 8),
       (2, 'Git для профессионального программиста', '2019', 1, 520, 6),
       (3, 'Шерлок Холмс. Повести и рассказы', '2018', 2, 330, 3),
       (4, 'Дневник книготорговца', '2018', 3, 480, 9),
       (5, 'Чистый код', '2016', 1, 680, 2);

INSERT INTO author_book (AUTHOR_ID, BOOK_ID)
VALUES (1, 1),
       (2, 2),
       (3, 2),
       (4, 3),
       (5, 4),
       (1, 5);




create table store
(
    ID int not null auto_increment,
    CITY varchar(500) not null,
    PRIMARY KEY (ID)
);

create table book_store
(
    STORE_ID int not null,
    BOOK_ID int not null,
    PRICE DECIMAL(10, 2),
    QUANTITY int unsigned not null default 0,
    PRIMARY KEY (STORE_ID, BOOK_ID),
    INDEX IX_BOOK (BOOK_ID),
    FOREIGN KEY FK_BOOK_STORE_STORE (STORE_ID) references store(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
    FOREIGN KEY FK_BOOK_STORE_BOOK (BOOK_ID) references book(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

insert into store (CITY)
values ('Калининград'),
       ('Черняховск'),
       ('Советск');

insert into book_store(STORE_ID, BOOK_ID)
values (1, 1),
       (1, 2),
       (1, 3),
       (1, 4),
       (1, 5);

select * from book_store;


update book_store, book
set book_store.PRICE = book.PRICE,
    book_store.QUANTITY = book.QUANTITY
where book_store.BOOK_ID = book.ID;


alter table book
drop column PRICE, drop column QUANTITY;

select * from book;
insert into book_store
values (2,3,467.00, 4),
       (3, 2, 278.00, 6),
       (2, 1, 123.00, 32)