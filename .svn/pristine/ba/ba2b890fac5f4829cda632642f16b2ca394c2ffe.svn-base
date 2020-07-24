create table users(
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
	name varchar(256) not null,
	password varchar(256) not null,
	age int(11) not null,
	sex varchar(11),
	email varchar(256) not null,
	phone_number int(11) not null,
	position varchar(256) not null
);

create table test_results(
	name varchar(256) not null,
	email varchar(256) not null,
	chapter int(11) not null,
	correct int(11) not null,
	total int(11) not null
);

INSERT INTO users (name,password,age,sex,email,phone_number,position) 
VALUES ('$input_name','$input_password','$input_age','$input_sex','$input_email','$input_phone_number','$input_position');

//select * from users id='1' OR username = 'chengruixin'

UPDATE users SET username = 'chengrui123', password = '123456' WHERE id = '1'

//DELETE FROM users WHERE id='1'

//SELECT * FROM users ORDER BY id DESC/ASC

//$first = mysqli_real_escape_string($connection, $_POST['first']);