create table Account (
username varchar(20) primary key,
password varchar(20),
permission int
)

insert into account(username, password, permission) values 
('thanhlt', '12345', 1),
('chaunhk', '54321', 1),
('ngocc',   '54321', 0)

create table Unit (
Name varchar(20) not null primary key,
Element varchar(5),
Weapon varchar(6),
Rarity int,
Icon text,
Country varchar(13)
)