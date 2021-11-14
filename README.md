# API_Laravel
* Modèles configurés avec clefs étrangères et relations récursives
* Seeder pour les groupes et type de groupe
* Factory via regex pour les lots
* Controllers complet pour CRUD
* Vérification du respect de l'intégrité du modèle de données lors des modifications<br> (relations récursives, existence de la clef étrangère,etc)
* Vérification de la conformité des données envoyés lors des requêtes POST/PUT

## Configuration Laragon / WAMP / XAMP
1. Création d'une BDD MySQL **'db_api'** -> [username: root, password: ' ']

## Installation
1. `cd .../www`
2. `https://github.com/Yeulmax/test_realiz3D_laravel.git`
3. `composer update`
4. `composer install`
5. `copy|cp .env.example .env`
6. Dans le fichier .env -> `DB_DATABASE=db_api`
7. `php artisan key:generate`
8. `php artisan migrate --seed`



## Routes API
‼️  *Les paramètres sont passés via un multipart form*
* #### /register : Inscription utilisateur
  * **POST** http://api_template/api/register
    * name
    * email
    * password
    * confirm_password

* #### /login : Connexion utilisateur
  * **POST** http://api_template/api/login
    * email
    * password
    
‼️  *Les autres routes nécessitent une authentification,
utiliser le bearer token fournit lors de l'appel à /login ou /register*

* #### /posts : Création d'un post
  * **POST** http://api_template/api/posts
    * title
    * content
    * is_public [0-1]

* #### /posts/{id} : Modification d'un post
  * **PATCH** http://api_template/api/posts{id}
    * title
    * content
    * is_public [0-1]

* #### /user : Retourne l'utilisateur authentifié
  * **GET** http://api_template/api/user

* #### /my_posts : Retourne les posts crée par l'utilisateur courant
  * **GET** http://api_template/api/my_posts

* #### /postsByUserId/{id} : Retourne les posts d'un utilisateur spécifique
  * **GET** http://api_template/api/posts/user/{id}

* #### /posts/title/{term} : Recherche sur les titres, ne retourne que les posts publiés
  * **GET** http://api_template/api/posts/title/{term}
