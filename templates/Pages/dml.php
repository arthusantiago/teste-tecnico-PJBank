<pre>
CREATE TABLE IF NOT EXISTS USUARIO 
(id bigserial NOT NULL PRIMARY KEY, cpf varchar(11) NOT NULL, nome varchar(80));

CREATE TABLE IF NOT EXISTS INFO
(id bigserial NOT NULL PRIMARY KEY, cpf varchar(11) NOT NULL, genero varchar(1), ano_nascimento integer);

INSERT INTO USUARIO(cpf, nome) 
VALUES 
	('16798125050', 'Luke Skywalker'),
	('59875804045', 'Bruce Wayne'), 
	('04707649025', 'Diane Prince'), 
	('21142450040', 'Bruce Banner'),
	('83257946074', 'Harley Quinn'), 
	('07583509025', 'Peter Parker');

INSERT INTO INFO(cpf, genero, ano_nascimento) 
VALUES 
	('16798125050', 'M', 1976), 
	('59875804045', 'M', 1960), 
	('04707649025', 'F', 1988), 
	('21142450040', 'M', 1954), 
	('83257946074', 'F', 1970), 
	('07583509025', 'M', 1972);


SELECT U.nome || ' - ' || I.genero as usuário,
CASE 
	WHEN date_part('year', now()) - ano_nascimento> 50 THEN 'SIM' 
	WHEN date_part('year', now()) - ano_nascimento<= 50 THEN 'NÃO'
END as maior_50_anos 
	FROM USUARIO U
		LEFT JOIN INFO I ON U.cpf = I.cpf
WHERE U.nome LIKE '%er'
GROUP BY U.nome, I.genero, I.ano_nascimento
ORDER BY U.nome DESC
</pre>