
--
-- Table structure for table account
--
drop table IF EXISTS account;
create table IF NOT EXISTS account (
  username char(32) NOT NULL,
  encrypt_str char(32) NOT NULL,
  salt int UNSIGNED NOT NULL,
  PRIMARY KEY (username)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table basic_info
--
drop table IF EXISTS basic_info;
create table IF NOT EXISTS basic_info (
  id int NOT NULL AUTO_INCREMENT,
  tel varchar(32) NOT NULL,
  mail varchar(32) NOT NULL,
  wechat varchar(32) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Table structure for table poster
--
drop table IF EXISTS poster;
create table IF NOT EXISTS poster (
  id int NOT NULL AUTO_INCREMENT,
  uniqid char(32) NOT NULL,
  top tinyint NOT NULL DEFAULT 0,
  title varchar(64) NOT NULL,
  short_desc varchar(96) NOT NULL,
  city varchar(32) NOT NULL,
  addr varchar(96) NOT NULL,
  lat double NOT NULL,
  lng double NOT NULL,
  price double NOT NULL,
  s_done tinyint NOT NULL DEFAULT 0,
  s_new_price tinyint NOT NULL DEFAULT 0,
  s_dealing tinyint NOT NULL DEFAULT 0,
  create_time datetime NOT NULL,
  update_time datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
insert into basic_info value(NULL, '111111', 'franiezhu', 'frankie');