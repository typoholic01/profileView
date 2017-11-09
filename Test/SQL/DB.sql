CREATE DATABASE typoholic;

CREATE USER 'admin' IDENTIFIED BY 'secret';

GRANT ALTER, CREATE, INSERT, SELECT, DELETE, REFERENCES, UPDATE, DROP, EXECUTE, LOCK TABLES, INDEX
ON typoholic.* TO 'admin';

FLUSH PRIVILEGES;

--utf8mb4
ALTER DATABASE typoholic CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

--mariaDB
grant all privileges on admin.* to admin@localhost identified by 'secret' with grant option;

--유저 삭제
drop user 'admin'@'localhost';