create table Bus(
bu_id varchar(12) NOT NULL PRIMARY KEY,
driver_id varchar(12) NOT NULL,
cond_id varchar(12) NOT NULL,
dest_from varchar(50) NOT NULL,
dest_to varchar(50) NOT NULL
);