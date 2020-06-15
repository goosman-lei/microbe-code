USE microbe;

DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS user (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL DEFAULT '',
    passwd VARCHAR(64) NOT NULL DEFAULT '',
    location VARCHAR(64) NOT NULL DEFAULT ''
) ENGINE Innodb DEFAULT CHARACTER SET UTF8;

INSERT INTO user VALUES (null, 'Jack', '123456', 'America');
INSERT INTO user VALUES (null, 'Tom', '123456', 'France');
INSERT INTO user VALUES (null, 'John', '123456', 'America');
INSERT INTO user VALUES (null, 'Lucas', '123456', 'Germany');
INSERT INTO user VALUES (null, 'Justin', '123456', 'Germany');
