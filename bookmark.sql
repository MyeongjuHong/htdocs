create table answers (
    num int not null auto_increment,
    types int not null,
    yyyy int not null,
    mmmm int not null,
    comb int not null,
    a_title char(70),
    a_pic BLOB,
    a_text char(200),
    a_desc BLOB not null,
    a_voca BLOB not null,
    primary key(num)
);