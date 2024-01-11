# lab crud standard
This repository presents a standard Laravel project for task management.

## Référence 

- https://github.com/labs-web/lab-crud-standard

### Travail à faire

- Compléter le travail sur le lab crud Laravel basic en utilisant le design pattern Repository, implémenter la recherche, ajouter la pagination et inclure la table des projets.

#### Critères de validation 

- compléter le travail sur [`lab crud laravel basic`](https://github.com/Jalil-Betroji/lab-crud.git)
- Opérations CRUD pour les tâches
- Opérations CRUD pour les projets
- Pagination
- Recherche (AJAX)
- Design Pattern Repository
- Affichage des projets
- Filtrer par projet
- Données d'exemple (jeux de test)

##### Process Workflow 

1. Start by cloning lab crud basic with this command:

```bash
git clone https://github.com/Jalil-Betroji/lab-crud.git

```
2. Next, create the .env file using the command:

```bash
cp .env.example .env
```
3. Add the database name to the .env file.

4. Migrate tables to the database:

```bash
php artisan migrate

```

5. Populate the database with project information by creating a seeder and executing:

```bash
php artisan db:seed
```


6. To view your project's progress locally, run this command:

```bash 
php artisan serve

```
