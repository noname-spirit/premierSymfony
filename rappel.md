# installer et demarrer notre premier projet Synfony

1 lancer le terminal 
2 saisit les commande suivante 

sh

symfony new <nom du projet> --webapp

# installe moi synfony version site internet 
#le coeur de symfony + lein de module /composant pour le faire un site internet
# commande elle prend 40 secondes - 1 minute
cd ‹nom_projet>
# se positionner dans le dossier racine du projet
symfony serve
# lancer le serveur de développement interne de symfony
...
3. l'adresse internet du projet < http: //127.0.0.1:8000>
# quelques commandes à connaître sur Symfony
•• •
sh
symfony serve # démarre le serveur de développement symfony serve:start # la même commande symfony serve -d # démarrer le serveur en mode détaché
I
symfony serve:stop # stopper le serveur
# si le serveur symfony ne fonctionne pas alors on utilise le serveur interne de PHP
# démarre le serveur de développement PHP 
php -s Localhost: 8000 -t public


# commencer à travailler sur Symfony
- ça doit vous rappeler le projet Recette de cuisine
- index.php → public/index.php (le point d'entrée de notre application)
- Controller → src/Controller créer un fichier 'QuelqueChoseController.php'
- Attention le nom du fichier des controller DOIT se finir par Controller


```php
php
<?php
namespace App \Controller ; //Essentiel pour que symfony trouve ce fichier et le charge corrctement 

class QuelqueChoseController {

    // si j'appe l'adresse http: //127.0.0.1:8000/contact
    #[Route("/contact", name:"page_contact")]
    public function contcat(){
        // 1 methode par page de votre site internet
        //OBLIGATOIREMENT une methode Controller DOIT retourner une Reponse (HTTP)
        return new Reponse("un petit texte")
    }
}
```

