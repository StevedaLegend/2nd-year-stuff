CREATE TABLE persons (
  person_id INT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  birth_date DATE NOT NULL
);

INSERT INTO persons (person_id, first_name, last_name, birth_date)
VALUES
  (1, 'Steve', 'Fasoranti', '2002-06-26'),
  (2, 'Dan', 'Balensh', '1999-05-02'),
  (3, 'Donnel', 'McGrath',  '2000-09-05');
