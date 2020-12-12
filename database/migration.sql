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

insert into book_store (STORE_ID, BOOK_ID, PRICE, QUANTITY)
select 1, ID, PRICE, QUANTITY from book;

alter table book
drop column PRICE, drop column QUANTITY;
