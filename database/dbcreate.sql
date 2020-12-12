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