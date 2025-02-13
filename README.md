Projet d'Authentification en PHP
Une application web développée avec PHP, offrant un système d'authentification sécurisé, permettant la gestion des utilisateurs, l'inscription, la connexion, et la gestion de session. Ce projet inclut la validation des données, la gestion du profil utilisateur, et la protection des sessions.

✨ Fonctionnalités

🔐 Création de compte avec validation des données (nom d'utilisateur, mot de passe sécurisé)
🔑 Connexion sécurisée avec gestion des sessions
👤 Mise à jour du profil utilisateur
🛡️ Protection CSRF et sécurité avancée (hachage des mots de passe avec password_hash())
🚪 Déconnexion sécurisée pour protéger les sessions

🏗️ Technologies Utilisées:

⚡ PHP – Langage de programmation backend
🗄️ MySQL – Gestion de la base de données
🖌️ CSS (avec un design personnalisé) – Styles pour un design simple et épuré
🚀 WAMP Server – Environnement local (Windows, Apache, MySQL, PHP)
🚀 Installation & Configuration

🔻 Étape 1 : Cloner le projet
Cloner ce dépôt dans votre répertoire local :

🔻 Étape 2 : Configurer WAMP et PHPMyAdmin
Assurez-vous que WAMP Server est installé et en cours d'exécution.
Ouvrez PHPMyAdmin sur http://localhost/phpmyadmin/.
Créez une base de données nommée connx.

🔻 Étape 3 : Configuration de la base de données
Ouvrez le fichier database.php et vérifiez les informations suivantes :

$host = "localhost"; 
$dbname = "connx"; 
$username = "root"; 
$password = "";
Si vous avez configuré un mot de passe pour MySQL, modifiez la variable $password avec votre mot de passe.

Créez la table users dans votre base de données avec les colonnes suivantes :

id : INT (auto-incrément, clé primaire)
username : VARCHAR(255)
password : VARCHAR(255)
🔻 Étape 4 : Créer un fichier .env
Si vous utilisez une configuration différente pour la base de données, vous pouvez créer un fichier .env ou modifier les variables directement dans votre code PHP.

🔻 Étape 5 : Lancer le serveur local
Assurez-vous que WAMP est en cours d'exécution. Ensuite, accédez à votre projet via votre navigateur :


http://localhost/tafsouthh/

🎯 Utilisation du Projet

📝 Inscription : Accédez à /register pour créer un compte utilisateur avec un mot de passe sécurisé.

🔑 Connexion : Connectez-vous via /login pour accéder à votre tableau de bord.

🚪 Déconnexion : Vous pouvez vous déconnecter via le bouton de déconnexion.

🚨 Sécurité

Le mot de passe des utilisateurs est haché avec password_hash() lors de l'inscription.
Une validation stricte des mots de passe est appliquée.
Protection contre les attaques CSRF dans les formulaires.
