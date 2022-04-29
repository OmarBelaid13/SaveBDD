<?php
// Permet de d'activer la sauvegarde des tables de BDD
require_once('class/BachupSql.php'); 

// Paramètres 
new BackupMySQL(array(
	// Information pour l'enregistrement du fichier dans le repertoire du site :
    'host' => '',
	'username' => '',
	'passwd' => '',
	'dbname' => '',
	'dossier' => './',
	'nbr_fichiers' => 5,
	'nom_fichier' => '',
	'nom_du_site' => '',
	// Informations de connexion pour le serveur distant :
	'ftp_host' => '',
	'ftp_user' => '',
	'ftp_pass' => '',
	// Chemin du dossier de destination :
	'chemin_dest' => '/'
));
