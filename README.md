# API_Laravel
* Modèles configurés avec clefs étrangères et relations récursives
* Seeder pour les groupes et type de groupe
* Factory via regex pour les lots
* Controllers complet pour CRUD
* Vérification du respect de l'intégrité du modèle de données lors des modifications<br> (relations récursives, existence de la clef étrangère,etc)
* Vérification de la conformité des données envoyés lors des requêtes POST/PUT

## Configuration Laragon / WAMP / XAMP
1. Création d'une BDD MySQL **'db_api'** -> [username: root, password: ' ']
2. ‼️ L'extension **'pdo_mysql'** doit être activée dans le fichier php.ini

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
* #### /lots : Accés au lots
  * **GET** .../api/lots  -> Renvoie la liste des lots
  * **GET** .../api/lots/{id} -> Renvoie un lot spécifique
  * **POST** .../api/lots -> Crée un lot
    * name: String
    * group_id: Int (doit exister dans la table 'groups')
  * **PATCH** .../api/lots/{id} -> Modifie un lot
    * name: String
    * group_id: Int
  * **DELETE** .../api/lots/{id} -> Supprime un lot

* #### /groupTypes : Accés aux types de groupes
  * **GET** .../api/groupTypes  -> Renvoie la liste des types
  * **GET** .../api/groupTypes/{id} -> Renvoie un type spécifique
  * **POST** .../api/groupTypes -> Crée un type
    * label: String
  * **PATCH** .../api/groupTypes/{id} -> Modifie un type
    * label: String
  * **DELETE** .../api/groupTypes/{id} -> Supprime un type

* #### /groups : Accès aux groupes
  * **GET** .../api/groups  -> Renvoie la liste des groupes
  * **GET** .../api/groups/{id} -> Renvoie un groupe spécifique
  * **POST** .../api/groups -> Crée un groupe
    * name: String
    * parent_group_id: Int (doit exister dans la table 'groups')
    * group_type_id: Int (doit exister dans la table 'group_types')
  * **PATCH** .../api/groups/{id} -> Modifie un groupe
    * name: String
    * parent_group_id: Int (doit exister dans la table 'groups')
    * group_type_id: Int (doit exister dans la table 'group_types')
  * **DELETE** .../api/groups/{id} -> Supprime un lot
