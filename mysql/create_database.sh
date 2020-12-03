db=labdb
user=labuser
password=labpw
table=customers


sudo mysql <<run_query
create database $db;
use $db;
create user $user identified by "$password";
grant select, insert on labdb.* to '$user';
create table $table (id int auto_increment primary key, first_name varchar(60), last_name varchar(80), email varchar(50));
run_query
