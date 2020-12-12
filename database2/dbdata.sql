INSERT IGNORE INTO publisher (ID, NAME)
VALUES (1, 'Питер'),
       (2, 'Лениздат'),
       (3, 'Азбука');

INSERT IGNORE INTO author (ID, NAME)
VALUES (1, 'Роберт Мартин'),
       (2, 'Скотт Чакон'),
       (3, 'Бен Штраус'),
       (4, 'Артур Конан Дойл'),
       (5, 'Шон Байателл');

INSERT IGNORE INTO store (ID, CITY)
VALUES (1, 'Калининград'),
       (2, 'Черняховск'),
       (3, 'Советск');

INSERT IGNORE INTO book (ID, NAME, ISSUE_YEAR, PUBLISHER_ID)
VALUES (1, 'Чистая архитектура', '2018', 1),
       (2, 'Git для профессионального программиста', '2019', 1),
       (3, 'Шерлок Холмс. Повести и рассказы', '2018', 2),
       (4, 'Дневник книготорговца', '2018', 3),
       (5, 'Чистый код', '2016', 1);

INSERT IGNORE INTO book_store(BOOK_ID, STORE_ID, PRICE, QUANTITY)
VALUES (1, 1, 354, 8),
       (2, 1, 520, 6),
       (3, 1, 330, 3),
       (4, 1, 480, 9),
       (5, 1, 680, 2),
       (1, 2, 360, 1),
       (2, 2, 510, 4),
       (3, 2, 330, 2),
       (5, 2, 675, 0),
       (1, 3, 355, 3),
       (2, 3, 514, 5),
       (4, 3, 480, 3),
       (5, 3, 679, 0);

INSERT IGNORE INTO author_book (AUTHOR_ID, BOOK_ID)
VALUES (1, 1),
       (2, 2),
       (3, 2),
       (4, 3),
       (5, 4),
       (1, 5);
