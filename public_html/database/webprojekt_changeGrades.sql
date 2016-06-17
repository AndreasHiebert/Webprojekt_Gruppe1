drop table if exists webprojekt.grades;

create table webprojekt.grades(
	id int not null AUTO_INCREMENT,
	grade double not null,
	date TIMESTAMP default CURRENT_TIMESTAMP,
	user_id int not null,
	module_id int not null,
	primary key(id),
	foreign key(user_id) references users(id),
	foreign key(module_id) references modules(id)
);

insert into grades (grade, user_id, module_id) values(1.5, 1, 2);
insert into grades (grade, user_id, module_id) values(2.0, 1, 4);
insert into grades (grade, user_id, module_id) values(4.8, 1, 9);
insert into grades (grade, user_id, module_id) values(2.8, 2, 4);
insert into grades (grade, user_id, module_id) values(1.3, 2, 7);
insert into grades (grade, user_id, module_id) values(5.0, 1, 4);