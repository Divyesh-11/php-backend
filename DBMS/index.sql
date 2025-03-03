create table category(
cate_id int primary key,
cate_name varchar(25)
);

create table subcategory(
sub_cate_id int primary key auto_increment,
sub_cate_name varchar(20),
cate_id_fk int,
foreign key (cate_id_fk) references category(cate_id)
);

create table products(
pro_name varchar(20),
pro_price int,
pro_cate_id_fk int,
sub_cate_id_fk int,
foreign key (pro_cate_id_fk) references category(cate_id),
foreign key (sub_cate_id_fk) references subcategory(sub_cate_id)
);

insert into category 
(category.cate_id,category.cate_name)
values ("101","men"),
("102","Women"),
("103","Kids");

insert into subcategory 
(subcategory.sub_cate_name, subcategory.cate_id_fk) 
values ("Topwear","101"),
("Bottomwear","101"),
("Topwear","102"),
("Bottomwaer","102"),
("Topwear","103"),
("Bottomwear","103");

insert into products 
(products.pro_name,products.pro_price,products.pro_cate_id_fk,products.sub_cate_id_fk)
values ("Pink T-shirt","1220","101","1"),
("Blue Jeans","1350","101","2"),
("Yellow T-shirt","1250","102","3"),
("Blue Jeans","1250","102","4"),
("Black shirt","1575","103","5"),
("Cream Pent","1350","103","6"),
("Yellow shirt","1350","102","3"),
("Blue Jeans","1000","102","4"),
("White shirt","850","101","1"),
("Blue Jeans","1220","101","2");

select category.cate_id,category.cate_name,subcategory.sub_cate_name,products.pro_name,products.pro_price 
from category join subcategory on category.cate_id=subcategory.cate_id_fk
join
products on products.sub_cate_id_fk=subcategory.sub_cate_id;
