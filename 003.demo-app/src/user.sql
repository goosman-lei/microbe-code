USE microbe;

DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS user (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL DEFAULT '',
    passwd VARCHAR(64) NOT NULL DEFAULT '',
    location VARCHAR(64) NOT NULL DEFAULT '',
    gender VARCHAR(16) NOT NULL DEFAULT '',
    province VARCHAR(32) NOT NULL DEFAULT '',
    ctime INT NOT NULL DEFAULT 0,
    score INT NOT NULL DEFAULT 0
) ENGINE Innodb DEFAULT CHARACTER SET UTF8;

INSERT INTO user VALUES (null, 'Jack', '123456', 'America', 'male', 'LA', UNIX_TIMESTAMP(NOW()), 88);
INSERT INTO user VALUES (null, 'Tom', '123456', 'France', 'famale', 'Paris', UNIX_TIMESTAMP(NOW()), 78);
INSERT INTO user VALUES (null, 'John', '123456', 'America', 'male', 'CA', UNIX_TIMESTAMP(NOW()), 69);
INSERT INTO user VALUES (null, 'Lucas', '123456', 'Germany', 'famale', 'Berlin', UNIX_TIMESTAMP(NOW()), 92);
INSERT INTO user VALUES (null, 'Justin', '123456', 'Germany', 'male', 'Berlin', UNIX_TIMESTAMP(NOW()), 98);
INSERT INTO user VALUES (null, 'Charles', '123456', 'America', 'male', 'LA', UNIX_TIMESTAMP(NOW()), 88);
INSERT INTO user VALUES (null, 'Mark', '123456', 'France', 'famale', 'Paris', UNIX_TIMESTAMP(NOW()), 78);
INSERT INTO user VALUES (null, 'Bill', '123456', 'America', 'male', 'CA', UNIX_TIMESTAMP(NOW()), 69);
INSERT INTO user VALUES (null, 'Vincent', '123456', 'Germany', 'famale', 'Berlin', UNIX_TIMESTAMP(NOW()), 92);
INSERT INTO user VALUES (null, 'William', '123456', 'Germany', 'male', 'Berlin', UNIX_TIMESTAMP(NOW()), 98);
INSERT INTO user VALUES (null, 'Joseph', '123456', 'America', 'male', 'LA', UNIX_TIMESTAMP(NOW()), 88);
INSERT INTO user VALUES (null, 'James', '123456', 'France', 'famale', 'Paris', UNIX_TIMESTAMP(NOW()), 78);
INSERT INTO user VALUES (null, 'Henry', '123456', 'America', 'male', 'CA', UNIX_TIMESTAMP(NOW()), 69);
INSERT INTO user VALUES (null, 'Gary', '123456', 'Germany', 'famale', 'Berlin', UNIX_TIMESTAMP(NOW()), 92);
INSERT INTO user VALUES (null, 'Martin', '123456', 'Germany', 'male', 'Berlin', UNIX_TIMESTAMP(NOW()), 98);
