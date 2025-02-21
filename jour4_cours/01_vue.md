# projet recette / vue

```php
<?php
// version 7 
class FrontController extends AbstractController {
    #[Route("/presentation", name:"page_presentation")]
public function home(){

Sthis→render ("Front/presentation.html.twig");

}
}

```
# cas pratique

- ajouter un nouvelle méthode dans le controller FrontController qui s'appelle "exo"
- cette méthode appelée via l'adresse internet http://127.0.0.1:8000/exo
- cette méthode exécute le fichier de vue front/exo.html.twig
- cette vue contient une strcuture de page html et dans la balise body :  

```html
<h1>je suis la page d'exo</h1>
<p>je viens de créer une page de vue via Twig dans Symfony</p>
```

- tester la page
- ne pas hésiter à me transférer le code sur Discord en MP