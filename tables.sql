DROP TABLE IF EXISTS articles;
CREATE TABLE articles
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,  # Когда статья опудликована
  title           varchar(255) NOT NULL,                      # Полный заголовок статьи
  summary         text NOT NULL,                              # Резюме статьи
  content         mediumtext NOT NULL,                        # HTML содержание статьи
  quantity        int DEFAULT NULL,

  PRIMARY KEY     (id)
);

CREATE TABLE users
(
	user_id         smallint unsigned NOT NULL auto_increment,
	first_n         varchar(20) NOT NULL,
	second_n        varchar(20) NOT NULL,
	phone           varchar(10) NOT NULL,
	email           varchar(20) NOT NULL,
	role            varchar(10) DEFAULT "user",
	valid           smallint DEFAULT 0,

	PRIMARY KEY     (user_id)
)
