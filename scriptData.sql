/* auteur */
insert into auteur(nom, prenom) values ('auteur1','prénom1');
insert into auteur(nom, prenom) values ('auteur2','prénomAut2');
insert into auteur(nom, prenom) values ('auteur3','prénomAut3');
insert into auteur(nom, prenom) values ('auteur4','prénomAut4');
insert into auteur(nom, prenom) values ('auteur5','prénomAut5');

/* produit perissable */
insert into pdtperis(dateExpir, poids, parfum, tempConserv) values ('2021-07-01', 20, NULL, NULL);
insert into pdtperis(dateExpir, poids, parfum, tempConserv) values ('2021-07-05', NULL, 'Fraise', NULL);
insert into pdtperis(dateExpir, poids, parfum, tempConserv) values ('2023-01-01', NULL, 'Sauvage', 20);
insert into pdtperis(dateExpir, poids, parfum, tempConserv) values ('2021-07-05', NULL, 'Fraise', NULL);
insert into pdtperis(dateExpir, poids, parfum, tempConserv) values ('2021-07-05', NULL, 'Chocolat', NULL);


/* produit non perissable */
-- Stylo
insert into pdtnonperis(type, couleur, idAuteur) values ('Large', 'Noir', NULL);  
insert into pdtnonperis(type, couleur, idAuteur) values ('Epais', 'rouge', NULL);
insert into pdtnonperis(type, couleur, idAuteur ) values ('Fin', 'bleu', NULL);	
-- Carte
insert into pdtnonperis(type, couleur, idAuteur ) values ('Naissance', NULL, 1);
insert into pdtnonperis(type, couleur, idAuteur ) values ('Naissance', NULL, 2);
insert into pdtnonperis(type, couleur, idAuteur) values ('Anniversaire', NULL, 1);
insert into pdtnonperis(type, couleur, idAuteur) values ('Anniversaire', NULL, 2);
insert into pdtnonperis(type, couleur, idAuteur) values ('Anniversaire', NULL, 3);
insert into pdtnonperis(type, couleur, idAuteur) values ('Anniversaire', NULL, 4);
insert into pdtnonperis(type, couleur, idAuteur) values ('Anniversaire', NULL, 5);	

/* produit */
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('pain',NULL,1,25,1,NULL);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('baguette',NULL,1.10,30,2,NULL);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('stylo bille','BIC',2.2,100,NULL,1);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('carte postale','pop carte',0.5,16,NULL,2);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('pain','BIO',2.5,55,1,NULL);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('pain céréal','BIO',2.4,20,1,NULL);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('pain sans sel',NULL,1.2,12,1,NULL);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('parfum','DIOR',20,3,2,NULL);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('glace',NULL, 10,2,2,NULL);
insert into produit(libelle, marque, prixUnit, qteStock, pdtPeriss, pdtNonPeriss) values ('glace',NULL, 3,4,5,NULL);	
/* panier */
insert into panier(montant, refClient) values (100,'1');
insert into panier(montant, refClient) values (20,'2');
insert into panier(montant, refClient) values (10,'3');
/* ligne */
insert into ligne (idProduit, idPanier, qte) values (1,1,5);
insert into ligne (idProduit, idPanier, qte) values (2,1,2);
insert into ligne (idProduit, idPanier, qte) values (3,1,1);
insert into ligne (idProduit, idPanier, qte) values (6,2,3);
insert into ligne (idProduit, idPanier, qte) values (7,2,4);
insert into ligne (idProduit, idPanier, qte) values (8,2,8);
insert into ligne (idProduit, idPanier, qte) values (1,3,5);
insert into ligne (idProduit, idPanier, qte) values (6,3,5);
insert into ligne (idProduit, idPanier, qte) values (8,3,5);
