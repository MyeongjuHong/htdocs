create table questions (
    num int not null auto_increment,
    grade int not null,
    yyyy int not null,
    mmmm int not null,
    comb int not null,
    q_title char(70),
    q_desc BLOB not null,
    q_quest BLOB,
    answer int not null,
    a_title char(70),
    a_desc BLOB not null,
    a_voca BLOB,
    primary key(num)
);