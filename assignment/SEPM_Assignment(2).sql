create table user(
	id integer primary key auto_increment,
    email varchar(200) not null unique,
    password varchar(200) not null,
    nickname varchar(200),
    usability integer -- 0: unlock 1: locked
);

create table address(
	id integer primary key auto_increment,
    name varchar(200),
    phone varchar(100),
    address varchar(300),
    city varchar(200),
    state varchar(100),
    postcode varchar(100),
    user_id integer
);

create table payment(
	id integer primary key auto_increment,
    type varchar(100),
    cardholder varchar(200),
    account varchar(200),
    expire_date varchar(200),
    cvv varchar(3),
    user_id integer
);

create table diary(
	id integer primary key auto_increment,
    type varchar(200),
    paper_color varchar(200),
    paper_type varchar(200),
    cover_color varchar(200),
    cover_text varchar(200),
    cover_theme integer,
    user_id integer,
    uni_id varchar(200)
);

create table feedback(
	id integer primary key auto_increment,
    content varchar(500),
    date date,
    diary_id integer
);

create table orders(
	id integer primary key auto_increment,
    quantity integer,
    unit_price double,
    postage double,
    amount double,
    orderDate datetime,
    user_id integer,
    address_id integer,
    payment_id integer,
    diary_uni_id varchar(200)
);

create table admin(
	id integer primary key auto_increment,
    username varchar(200),
    password varchar(200)
);
create table papertype(
    id integer primary key auto_increment,
    paperType varchar(200)

);
create table covertheme(
    id integer primary key auto_increment,
    covertheme varchar(200)
);