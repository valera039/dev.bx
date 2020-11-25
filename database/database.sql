show tables;

create table book(
    ID int not null,
    NAME varchar(20) not null,
    ISSUE_YEAR year not null,
    ISSUE_NUMBER int,

    primary key(ID)
);

alter table book drop ISSUE_YEAR;

alter table book add ISBN char(17);

describe book;

insert into book (ID, NAME, ISBN, ISSUE_NUMBER)
values (1,'Подработник','fhjsk',7483);

show tables;

select * from book;