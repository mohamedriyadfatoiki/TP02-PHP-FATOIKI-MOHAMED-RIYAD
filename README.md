# TP 02 — PHP — Programmation Web 2 (2026/2027)

- **Nom :** FATOIKI
- **Prénom :** MOHAMED RIYAD
- **Groupe :** GRP_1
- **Titre du TP :** TP 02 — Scripts PHP, tableaux et formulaires GET/POST

## Exécution locale

```bash
php -S localhost:8000
```
Puis ouvrir http://localhost:8000/index.php

## Liste des exercices

1. `ex01.php` — Balises, commentaires, echo
2. `ex02.php` — Variables, concaténation, `.=`
3. `ex03.php` — Constantes et calculs
4. `ex04.php` — Types et conversions
5. `ex05.php` — if / elseif / else
6. `ex06.php` — switch et date()
7. `ex07.php` — Boucles for
8. `ex08.php` — while, do-while, break, continue
9. `ex09.php` — Tableaux associatifs
10. `ex10_get.html/php` et `ex10_post.html/php` — Formulaires

## Réponses courtes

### Exercice 2
- `$note` et `$Note` sont différentes car les noms de variables PHP sont **sensibles à la casse**.
- Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
- Noms invalides : `$a!` (caractère `!` interdit) et `$1a` (commence par un chiffre).

### Exercice 4
- `echo false` n'affiche **rien** (chaîne vide) alors que `var_dump(false)` affiche `bool(false)`.
  `echo` convertit en chaîne (`true` → `"1"`, `false` → `""`), `var_dump` montre le type et la valeur réels.

### Exercice 5
| Valeur | Message |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

### Exercice 10
- **GET** : les valeurs apparaissent dans l'URL, ex. `ex10_get.php?nom=Benali&prenom=Salma&groupe=G1`.
- **POST** : l'URL reste `ex10_post.php`, les valeurs voyagent dans le corps de la requête HTTP.