create database if not exists noteslocker;

use noteslocker;

drop table if EXISTS users;
create table users(
  id bigint(20) unsigned not null auto_increment primary key,
  email varchar(250),
  password varchar(128),
  firstname varchar(50),
  lastname varchar(30)
);
ALTER TABLE users ADD INDEX(email);
ALTER TABLE users ADD INDEX(password);

drop table if EXISTS devices;
create table devices (
  id bigint(20) unsigned not null auto_increment primary key,
  user_id bigint(20) default 0,
  device_uuid varchar(36) not null,
  device_pin varchar(8) not null
);
ALTER TABLE devices ADD UNIQUE(device_uuid);
ALTER TABLE devices ADD INDEX(device_pin);
ALTER TABLE devices ADD INDEX(user_id);

drop table if EXISTS logs;
create table logs (
  id bigint(20) unsigned not null auto_increment primary key,
  user_id bigint(20) default 0,
  device_id bigint(20) default 0,
  log text,
  created datetime
);
ALTER TABLE logs ADD INDEX(device_id);
ALTER TABLE logs ADD INDEX(user_id);

drop table if EXISTS notes;
create table notes (
  id bigint(20) unsigned not null auto_increment primary key,
  device_id bigint(20) default 0,
  notes longtext,
  pass_protected enum('n','y') default 'y',
  pass_code varchar(5),
  created datetime
);
ALTER TABLE notes ADD INDEX(device_id);