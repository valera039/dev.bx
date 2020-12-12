#task №1
select author.name, count(BOOK_ID) as AI from author
    inner join author_book ab on author.ID = ab.AUTHOR_ID
group by AUTHOR_ID;

#task №2

select a.NAME, s.CITY, sum(QUANTITY) from book_store bs
         inner join author_book ab on bs.BOOK_ID = ab.BOOK_ID
         inner join store s on bs.STORE_ID = s.ID
         inner join author a on ab.AUTHOR_ID = a.ID
group by a.NAME, s.CITY;

#task №3

select book.name, avg(PRICE) as P from book
    inner join book_store bs on book.ID = bs.BOOK_ID where book.PUBLISHER_ID = 3
group by bs.BOOK_ID;

#task №4

select s.CITY, b.NAME, avg(PRICE) from book_store bs
         inner join book b on bs.BOOK_ID = b.ID
         inner join store s on bs.STORE_ID = s.ID
where b.PUBLISHER_ID = 3
group by s.CITY, b.NAME;


#task №5


select b.NAME,
       sum(if(store_id = 1, QUANTITY, 0)) as KALININGRAD,
       sum(if(store_id = 2, QUANTITY, 0)) as CHERNYAHOVSK,
       sum(if(store_id = 1, QUANTITY, 0)) - sum(if(store_id = 2, QUANTITY, 0)) as DIFFERENCE
from book_store bs
         inner join book b on bs.BOOK_ID = b.ID
group by b.NAME;