CREATE DATABASE blogpp;

USE blogpp

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,      -- 'id' ir unikāls identifikators, automātiski palielinās
    content VARCHAR(1000) NOT NULL          -- 'content' ir teksts līdz 1000 rakstzīmēm, nevar būt nulle
);