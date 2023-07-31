# PHP Avancé

# Liens utiles

Github : https://github.com/DELORD-C/POE-PHP-avance

# Lexique

# Exercices

- Connectez vous à votre base de données MySQL, à l’aide de l’interface PhpMyAdmin http://localhost/phpmyadmin.
- Créez une base de données `location_de_voiture`
- Créez une table voiture contiendra les colonnes suivantes.
    - id type INT clé primaire A_I
    - immatriculation de type VARCHAR et de longueur maximale 20
    - marque de type VARCHAR est de longueur maximale 20.
    - Modele de type VARCHAR est de longueur maximale 20.
    - Cylindree de type SMALLINT est cylindrée en cm3.
    - dateachat de type DATE


- Créez une table clients contiendra les colonnes suivantes.
    - id de type INT est le numéro client unique clé primaire A_I
    - Nom de type VARCHAR(40) est le nom du client
    - Prenom de type VARCHAR(40) est le prénom du client
    - CodePostal de type VARCHAR(10) est le Code postal
    - Localite de type VARCHAR(50) est la localité de résidence
    - Rue de type VARCHAR(80) est l’adresse
    - Numero de type VARCHAR(10) est le numéro de maison
    - Telephone de type VARCHAR(40) est le numéro de téléphone
    - Email de type VARCHAR(50) est l’adresse mail

- Créez une table locations contiendra les colonnes suivantes.
    - Id de type INT est le numéro client unique clé primaire A_I
    - IdClient de type INT est le numéro client unique
    - immatriculation de type VARCHAR et de longueur maximale 20
    - DateDebut de type DATETIME Date et heure de début
    - DateFin DATETIME Date de type et heure de fin prévue
    - DateRentree DATETIME Date de rentrée effective du véhicule (pour surtaxe)
    - Assurance BOOL Indique si une assurance complémentaire a été prise

- Ecrire une page web en PHP nommée `formulaireVoiture.php` qui affiche un formulaire permettant de saisir les données de la table voiture. 
- Modifier la page formulaireVoiture.php afin de ne soumettre le formulaire uniquement si tous les champs sont remplis.
- Faire en sorte de centrer le contenu des pages `formulaireVoitures.php`.
- Dans une nouvelle page créer un formulaire permettant l’insertion de nouvelles données dans la table client `formulaireClients.php`.
- Un nouveau formulaire permettant l’insertion de nouvelles données dans la table location, via une nouvelle page php `formulaireLocation.php`.
- Réaliser trois fichiers PHP :
    - `affichageVoitures.php`:Contient un tableau permettant d’afficher la liste des voitures enregistrés dans la base.
    - `affichageClients.php`:Contient un tableau permettant d’afficher la liste des clients enregistrés dans la base.
    - `affichageLocations.php`:Contient un tableau permettant d’afficher la liste des locations enregistrés dans la base.

- Créer un formulaire de recherche permettant de retrouver tous les clients qui ont loué un type de véhicule de marque et de modèle donnés. Afficher les résultats sous forme de tableau HTML5.
- Créer un formulaire de recherche permettant de retrouver tous les véhicules louées par une personne donnée. Afficher les résultats sous forme de tableau HTML.
- Créer un menu de navigation pour votre application