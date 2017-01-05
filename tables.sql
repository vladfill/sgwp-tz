DROP TABLE IF EXISTS articles;
CREATE TABLE articles
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,  # Когда статья опудликована
  title           varchar(255) NOT NULL,                      # Полный заголовок статьи
  summary         text NOT NULL,                              # Резюме статьи
  content         mediumtext NOT NULL,                        # HTML содержание статьи

  PRIMARY KEY     (id)
);
