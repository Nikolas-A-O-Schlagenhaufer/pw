DROP DATABASE AULA_10_05;
CREATE DATABASE AULA_10_05;
USE AULA_10_05;

CREATE TABLE APP (
  id INT AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  descr VARCHAR(200) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE (id),
  UNIQUE (name)
);

INSERT INTO APP (name, descr) VALUES
	('Facebook', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores ea pariatur sint aperiam nostrum tempora vel, deserunt non optio eius'),
  ('Twitter', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores ea pariatur sint aperiam nostrum tempora vel, deserunt non optio eius'),
  ('Instagram', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores ea pariatur sint aperiam nostrum tempora vel, deserunt non optio eius'),
  ('LinkedIn', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores ea pariatur sint aperiam nostrum tempora vel, deserunt non optio eius'),
  ('Google+', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores ea pariatur sint aperiam nostrum tempora vel, deserunt non optio eius'),
  ('YouTube', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores ea pariatur sint aperiam nostrum tempora vel, deserunt non optio eius');
  
SELECT * FROM APP;