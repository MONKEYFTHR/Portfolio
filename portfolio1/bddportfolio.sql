CREATE DATABASE dbs106413;
USE dbs106413;
CREATE TABLE message(
	id int(11) PRIMARY KEY  NOT NULL auto_increment,
	expediteur varchar(50),
	date datetime NOT NULL,
	message text NOT NULL
);

CREATE TABLE article(
	id int(20) NOT NULL auto_increment,
	content text,
	PRIMARY KEY (id)
);
CREATE TABLE projets(
	id int(20) NOT NULL auto_increment,
	content text,
	PRIMARY KEY (id)
);
INSERT INTO article (content) VALUES ("Elève de Bachelor 1 section informatique à Ynov Campus Aix<br/>         J'ai pour but d'être polyvalent dans tous les domaines importants de l'informatique afin d'être le plus efficace possible n'importe où<br/>");
INSERT INTO article (content) VALUES ("Collège Jean Bernard<br/>         Lycée de L'Empéri (seconde)<br/>         Lycée Adam de Craponne (1re et Terminale)<br/>         Filière STI2D Spécialité Energie et Environnement");
INSERT INTO article (content) VALUES ("J'ai travaillé dans la gestion administrative au secteur RH de Carrefour Supply Chain à Salon de Provence<br/>         Stage de 3ème fait dans l'entreprise Polyshape à Salon de Provence");

INSERT INTO projets (content) VALUES ("        En première année de Ynov en Informatique, nous avons travaillé sur 3 projets en rapport avec l'informatique, le Dev, l'Infra et le Web.<br/><br/>
        Infra: Nous incarnons une entreprise qui a pour but d'améliorer les outils de travail de ses entreprises clientes.<br/><br/>
        Dev: Nous incarnons une entreprise qui vend des modules permettant de controller l'humidité de l'air et du sol, la température et la luminosité ambiante.<br/><br/>
        Les informations ont retranscrites sur une interface choisie cela permet donc de vérifier la santé de la plante de l'utilisateur. C'est donc une plante connectée.<br/><br/>
        Web: Le projet web est donc ce portfolio avec une page admin permettant de gérer les informations affichées sur le site.");
