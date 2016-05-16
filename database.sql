CREATE DATABASE IF NOT EXISTS polyrestaurant;
USE polyrestaurant;

CREATE TABLE IF NOT EXISTS client (
  id_client INTEGER NOT NULL AUTO_INCREMENT,
  nom varchar(30) NOT NULL,
  prenom varchar(30) NOT NULL,
  date_naissance DATE NOT NULL,
  rue varchar(50) NOT NULL,
  code_postal char(5) NOT NULL,
  ville varchar(50) NOT NULL,
  mail varchar(50) NOT NULL,
  telephone char(10) NOT NULL,
  username varchar(15) NOT NULL,
  password varchar(32) NOT NULL,
  admin BOOLEAN NOT NULL,
  UNIQUE (username),
  UNIQUE (password),
  PRIMARY KEY(id_client)
) ENGINE=InnoDB CHARSET=utf8;


CREATE TABLE IF NOT EXISTS entree (
  id_entree INTEGER NOT NULL AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  description varchar(300),
  prix INTEGER,
  image varchar(50) NOT NULL,
  PRIMARY KEY(id_entree)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE IF NOT EXISTS plat (
  id_plat INTEGER NOT NULL AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  description varchar(300),
  prix INTEGER,
  image varchar(50) NOT NULL,
  PRIMARY KEY(id_plat)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE IF NOT EXISTS dessert (
  id_dessert INTEGER NOT NULL AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  description varchar(300),
  prix INTEGER,
  image varchar(50) NOT NULL,
  PRIMARY KEY(id_dessert)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE IF NOT EXISTS commandes (
  id_reservation INTEGER NOT NULL AUTO_INCREMENT,
  date_reservation DATE NOT NULL,
  id_client INTEGER NOT NULL,
  nom varchar(50) NOT NULL,
  prix INTEGER,
  image varchar(50) NOT NULL,
  PRIMARY KEY(id_reservation)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE IF NOT EXISTS commandes_en_cours (
  id_commande INTEGER NOT NULL AUTO_INCREMENT,
  date_reservation DATETIME NOT NULL,
  id_client INTEGER NOT NULL,
  rue varchar(50) NOT NULL,
  code_postal char(5) NOT NULL,
  ville varchar(50) NOT NULL,
  nom varchar(50) NOT NULL,
    nom_client varchar(30) NOT NULL,
	telephone char(10) NOT NULL,
  PRIMARY KEY(id_commande)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE IF NOT EXISTS historique (
  id_historique INTEGER NOT NULL AUTO_INCREMENT,
  id_client INTEGER NOT NULL,
  date_reservation DATETIME NOT NULL,
  nom varchar(50) NOT NULL,
  image varchar(50) NOT NULL,
  PRIMARY KEY(id_historique)
) ENGINE=InnoDB CHARSET=utf8;

INSERT INTO client (nom, prenom, date_naissance, rue, code_postal, ville, mail, telephone, username, password, admin) VALUES ("Admin","Admin","1993-10-09","rue","00000","ville","mail","0000000000","admin","21232f297a57a5a743894a0e4a801fc3",true);


INSERT INTO entree(nom, description,prix,image) VALUES ("Nems au porc sans friture","Pour ceux qui raffolent des nems mais veulent éviter tout ce qui est frit, voici la solution idéale ! De délicieux nems au porc et aux légumes, dorés au four pour un croustillant parfait.",8,"../images/entree/nems.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Nems au sauce aigre-douce","Servez cette sauce aigre-douce pour tremper des nems.",6,"../images/entree/nems1.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Nems au porc et aux gambas","Ces nems regorgent de légumes, de fruits de mer et de porc. Une entrée idéale pour ravir votre journée.",6,"../images/entree/nems3.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Rouleaux de Printemps vietnamiens","Ces rouleaux de printemps sont très sains; ils ne sont pas frits,servis avec une sauce faite maison.",5.5,"../images/entree/rouleaux.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Rouleaux de printemps aux crevettes","Des rouleaux de printemps d’inspiration vietnamienne sont garnis de vermicelles de riz, de crevettes, de carottes rapées, de laitue et de basilic puis servis avec une sauce Hoisin chaude.",7,"../images/entree/rouleauxcrevettes.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Soupe aux raviolis chinois au porc et aux gambas","Les wontons sont fourrés d’un mélange de porc et de gambas cuits, assaisonnés de sauce soja et de gingembre râpé, et mijotés dans le bouillon de poulet. Décorez d’oignons blancs frais.",6,"../images/entree/soupe1.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Soupe chinoise avec de l'oeuf battu","Décorez avec du persil ou de la ciboulette et servez avec une sauce soja. C’est bien meilleur que du bouillon de poulet !",8,"../images/entree/soupe2.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Soupe chinoise au poulet","La soupe chinoise au poulet est un plat que vous apprécierez tout au long des saisons.",7,"../images/entree/soupe3.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Rouleaux de sushi","Ces rouleaux de sushi sont garnis de saumon fumé et de thon… Servir avec de la sauce de soja et du wasabi.",6.5,"../images/entree/sushi.jpg");
INSERT INTO entree(nom, description,prix,image) VALUES ("Salade chinoise au poulet","La meilleure salade chinoise au poulet surtout si votre entourage n’est pas très amateur de sauce soja car cette recette n'en contient pas !",7,"../images/entree/salade.jpg");


INSERT INTO plat(nom, description,prix,image) VALUES ("Canard laqué","Servi avec un assortiment de petits légumes crus et d’une galette de blé, le canard laqué est un vrai délice à ne pas rater lors de votre séjour dans la capitale chinoise.",11,"../images/plat/canardlaque.JPG");
INSERT INTO plat(nom, description,prix,image) VALUES ("Porc sauce aigre douce","Originaire de la province du ZheJiang, cette spécialité chinoise est composée de petits morceaux de porc caramélisés, de légumes (poivrons, tomates, oignons) et de fruits (ananas ou pêche), le tout accompagné d’une sauce sucrée et acidulée. ",11.5,"../images/plat/porc1.jpg");
INSERT INTO plat(nom, description,prix,image) VALUES ("Nouilles sautées","Plat traditionnel par excellence.",12,"../images/plat/nouilles.jpg");
INSERT INTO plat(nom, description,prix,image) VALUES ("Le riz sauté ou riz cantonnais","le riz sauté est très populaire en Chine ainsi que dans toute l'Asie.",10,"../images/plat/rizcantonais.jpg");
INSERT INTO plat(nom, description,prix,image) VALUES ("Boeufs aux oignons","Boueufs cuisinés avec les oignons et la sauce soja.",9,"../images/plat/boeuf1.jpg");
INSERT INTO plat(nom, description,prix,image) VALUES ("Ban Mian","Nouilles sautées avec sauce de soja, servies avec de la viande.",13,"../images/plat/banmian.jpg");
INSERT INTO plat(nom, description,prix,image) VALUES ("Jian Bing – La crêpe chinoise","Tout comme pour nos bonnes vieilles crêpes bretonnes, la cuisson se fait sur une crêpière, à ceci près qu’elles s’accompagnent d’épices, de You Tiao (long beignet très populaire en Chine) et de sauce soja.",11,"../images/plat/jianbing.jpg");
INSERT INTO plat(nom, description,prix,image) VALUES ("La fondue chinoise","Légère et savoureuse.",10,"../images/plat/fondue.jpg");
INSERT INTO plat(nom, description,prix,image) VALUES ("Poulet du chef","Poulet frit avec de la sauce soja.",10.5,"../images/plat/pouletduchef.jpg");
INSERT INTO plat(nom, description,prix,image) VALUES ("Porc Caramel","Porc avec de la sauce caramel très delicieuse.",12,"../images/plat/porccaramel.jpg");

INSERT INTO dessert(nom, description,prix,image) VALUES ("Banh cam","Les bánh cam (bánh = gâteau) (proche des bánh ran) sont une spécialité du Vietnam. Ce sont des boules de riz gluant recouvertes de graines de sésames et fourrées à la pâte de soja.",7,"../images/dessert/banhcam.jpg");
INSERT INTO dessert(nom, description,prix,image) VALUES ("Cheesecake au tofu soyeux","Un cheesecake tout simple au tofu et ricotta mais avec une base arômatisée au thé matcha pour relever son goût.",6,"../images/dessert/cheesecake.jpg");
INSERT INTO dessert(nom, description,prix,image) VALUES ("Crêpes au pandan fourrées à la noix de coco caraméliée","Les crêpes aromatisées au pandan et fourrées à la noix de coco caramélisée sont une spécialité malaise mais aussi indonésienne. Elles sont appelées Kuih Ketayap (malais) ou Dadar Enten (indonésien) et sont très populaires ces deux pays.",8,"../images/dessert/crepes.JPG");
INSERT INTO dessert(nom, description,prix,image) VALUES ("Rare cheesecake aux fruits rouges à la japonaise","Le cheesecake sans cuisson est appelé 'rare cheesecake' au Japon. Les japonais sont friands de ce gâteau qui se décline sous trois formes : cheesecakes cuits, rare cheesecakes et cheesecakes soufflés.",6.5,"../images/dessert/cheesecake2.JPG");
INSERT INTO dessert(nom, description,prix,image) VALUES ("Mousse aux litchis relevée au gingembre","Une petite mousse bien sympathique pour conclure un déjeuner estival.",7,"../images/dessert/litchi.jpg");
INSERT INTO dessert(nom, description,prix,image) VALUES ("Croustillants de mangue","Une boule de glace à la vanille ou au citron accompagnerait délicieusement ce croustillant.",5,"../images/dessert/croustillants.jpg");
INSERT INTO dessert(nom, description,prix,image) VALUES ("Confiture de tamarin acidulée","Au Laos, la pulpe de tamarin (mak kram en lao.) mûr et sucré se consomme comme de la confiture, étalée sur une boulette de riz gluant.",6,"../images/dessert/tamarin.jpg");

delimiter //

CREATE TRIGGER orders_before_delete 
BEFORE DELETE ON commandes
 FOR EACH ROW 
BEGIN

DECLARE v_rue varchar(50); 
DECLARE v_code_postal char(5);
DECLARE v_ville varchar(50);
DECLARE v_nom varchar(50);
DECLARE v_nom_client varchar(30);
DECLARE v_telephone char(10);

SELECT rue INTO v_rue FROM client WHERE id_client= old.id_client;
SELECT code_postal INTO v_code_postal FROM client WHERE id_client= old.id_client;
SELECT ville INTO v_ville FROM client WHERE id_client= old.id_client;
SELECT nom INTO v_nom FROM commandes WHERE id_client= old.id_client  AND id_reservation = old.id_reservation;
SELECT nom INTO v_nom_client FROM client WHERE id_client= old.id_client;
SELECT telephone INTO v_telephone FROM client WHERE id_client= old.id_client;
DELETE FROM historique WHERE id_client= old.id_client;
 INSERT INTO commandes_en_cours (date_reservation,id_client,rue,code_postal,ville,nom,nom_client,telephone) VALUES (NOW(),old.id_client,v_rue,v_code_postal,v_ville,v_nom,v_nom_client,v_telephone);

 END;

//
delimiter ;


delimiter //

CREATE TRIGGER history_before_delete 
BEFORE DELETE ON commandes_en_cours
 FOR EACH ROW 
BEGIN

DECLARE v_date_reservation DATETIME; 
DECLARE v_nom varchar(50);
DECLARE v_image varchar(50);


SELECT date_reservation INTO v_date_reservation FROM commandes_en_cours WHERE id_commande= old.id_commande;
SELECT nom INTO v_nom FROM commandes_en_cours WHERE id_commande= old.id_commande;
SELECT image INTO v_image FROM entree WHERE nom = v_nom;
SELECT image INTO v_image FROM plat WHERE nom = v_nom;
SELECT image INTO v_image FROM dessert WHERE nom = v_nom;

 INSERT INTO historique (id_client,date_reservation,nom,image) VALUES (old.id_client,v_date_reservation,v_nom,v_image);

 END;

//
delimiter ;




