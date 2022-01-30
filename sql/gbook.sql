CREATE DATABASE gbook;
USE gbook;

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(15) NOT NULL UNIQUE,
    displayname varchar(20),
    accountcreated DATETIME,
    verified int,
    PRIMARY KEY (id)
);

CREATE TABLE posts (
    statusid int NOT NULL AUTO_INCREMENT,
    postauthor varchar(15) NOT NULL,
    postcontent varchar(255),
    posted DATETIME,
    PRIMARY KEY (statusid)
);