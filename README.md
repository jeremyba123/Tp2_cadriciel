# Projet de Cadriciel Web - Travail Pratique 2 (15%)

ATTENTION !!!!

MIGRATION ET SEEDING

Pour exécuter à la fois les migrations et les seeders en une seule commande, vous pouvez utiliser l'option --seed avec la commande migrate. Cela exécutera toutes les migrations et exécutera également les seeders spécifiés. Voici comment faire :

Changer le .env a ta base de donnés

php artisan migrate --seed 


  -COCHER TACHE LORS FIN ET METTRE A JOUR SUR GITHUB
  
  -VENDOR N'EST PAS INCLUE DANS LE GITHUB ALORS 'COMPOSER INSTALL'
  

Bien sûr, voici la répartition des tâches pour chacun des membres de l'équipe :

Membre 1 : [jeremy]

Tâches :

   [ ] Migrations et BDD (2 points)
   
        Créer les migrations nécessaires pour les tables de base de données.
        
        Mettre en place les relations entre les tables si nécessaire.
        
        Implémenter les seeders pour ajouter les faits de départ dans la base de données.

   [ ] Page d'accueil avec fait aléatoire (2 points)
   
        Créer la page d'accueil.
        
        Intégrer le fait aléatoire à afficher à partir de la base de données.
        
        Récupérer et afficher les images de chats à partir de https://placekitten.com ou https://random.cat.
        
        Créer les liens vers la page d'ajout et la liste des faits.

   [ ] Utilisation de layout/components (2 points)
   
        Créer le layout de base pour le site.
        
        Définir et intégrer les components nécessaires sur les différentes pages.

Membre 2 : [Amic]

Tâches :

   [ ] Page de la liste des faits (2 points)
   
        Créer la page de la liste des faits.
        
        Afficher tous les faits en récupérant les données de la base de données.
        
        Afficher l'id et les 60 premiers caractères de chaque fait en utilisant la classe Illuminate\Support\Str.
        
        Implémenter les boutons de suppression pour chaque fait.

  [ ]  Style visuel (3 points)
  
        Appliquer un style visuel cohérent à l'aide de CSS, SCSS, Bootstrap, Tailwind, etc.
        
        S'assurer que toutes les pages du projet ont un aspect visuel cohérent.
        
        Assurer la lisibilité et l'ergonomie de l'interface utilisateur.

Membre 3 : [Jacob]

Tâches :

   [ ] Utilisation de modèles (2 points)
   
        Créer les modèles nécessaires pour les entités du projet (par exemple : Fait, Image).
        
        Définir les relations entre les modèles si nécessaire.

   [ ]  Ajout et suppression (4 points)
   
        Mettre en place le formulaire d'ajout d'un fait sur la page correspondante.
        
        Mettre en place la validation des champs du formulaire.

        Personnaliser les messages d'erreurs en cas de validation incorrecte.
        
        Implémenter la suppression d'un fait en lien avec les boutons de suppression sur la page de liste des faits.

  [ ]  Documentation et remise (5 points)
  
        Préparer le zip du dossier du projet Laravel pour la remise en suivant les instructions fournies.

Assurez-vous de collaborer étroitement avec vos coéquipiers tout au long du processus de développement pour vous assurer que chaque tâche est bien réalisée et que le travail avance en parallèle sans attente. Bonne chance avec votre projet !


