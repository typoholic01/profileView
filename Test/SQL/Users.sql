-- 테이블 삭제
drop table Users
CASCADE;

--테이블 생성
CREATE TABLE Users(
	uid VARCHAR(50) NOT NULL UNIQUE,
	name VARCHAR(10) NOT NULL,
	password VARCHAR(64) NOT NULL,
	auth SMALLINT(3) UNSIGNED DEFAULT 1 NOT NULL,
	status SMALLINT(3) UNSIGNED DEFAULT 1 NOT NULL,
	PRIMARY KEY (uid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--데이터 조회
SELECT * FROM USERS;

--데이터 입력
INSERT INTO Users(
			uid, name, password, auth
		)
		VALUES(
			'typoholic01@gmail.com', '문성환', SHA2('test', 256), 3
		)