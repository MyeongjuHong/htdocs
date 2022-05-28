create table mem (
    num int not null auto_increment,
    id char(20) not null,
    name char(20) not null,
    gender char(1),
    tel char(20),
    primary key(num)
);

insert into mem (id, name, gender, tel) values ('hmj1', 'mjhong1', 'F', '010-1010-1010');
insert into mem (id, name, gender, tel) values ('hmj2', 'mjhong2', 'M', '010-1010-1020');
insert into mem (id, name, gender, tel) values ('hmj3', 'mjhong3', 'F', '010-1010-1030');
insert into mem (id, name, gender, tel) values ('hmj4', 'mjhong4', 'M', '010-1010-1040');