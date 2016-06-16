drop table if exists webprojekt.grades;

create table webprojekt.grades(
	id int not null,
	grade double not null,
	date TIMESTAMP default CURRENT_TIMESTAMP,
	user_id int not null,
	module_id int not null,
	primary key(id),
	foreign key(user_id) references users(id),
	foreign key(module_id) references modules(id)
);
