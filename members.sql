create table members (
    num int not null auto_increment,
    id char(15) not null,
    pwd char(15) not null,
    name char(10) not null,
    level int,
    primary key(num)
);