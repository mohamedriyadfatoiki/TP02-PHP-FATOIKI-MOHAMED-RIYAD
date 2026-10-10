# Explications question par question

> Rappel du cours : PHP s'exécute **côté serveur** ; le navigateur ne reçoit que le HTML produit.

## A. Préparation GitHub / VS Code
- `git --version` vérifie que Git est installé ; `php -v` vérifie PHP.
- `git clone` copie le dépôt distant en local ; `git config` définit l'identité des commits.
- `php -S localhost:8000` lance le **serveur web intégré** de PHP (architecture client-serveur : le navigateur est le client, PHP le serveur).
- Un double-clic sur un `.php` l'ouvre comme un simple fichier : le serveur n'interprète pas le code, d'où l'obligation de passer par `http://localhost:8000`.
- Cycle de publication : **add** (préparer) → **commit** (versionner en local) → **push** (envoyer sur GitHub).

## Exercice 1 — Balises, commentaires, echo
1. `<meta charset="UTF-8">` évite les problèmes d'accents.
2-3. `echo` envoie du texte dans la page ; le code PHP est entre `<?php ... ?>` et chaque instruction finit par `;`.
4. `//` = commentaire une ligne ; `/* ... */` = plusieurs lignes. Ils sont supprimés avant l'envoi au navigateur.
5. `<?= ... ?>` est le raccourci de `<?php echo ... ?>`.

## Exercice 2 — Variables
1. Une variable commence par `$`, puis lettre ou `_`.
2. `.` concatène deux chaînes.
3. `.=` ajoute à la fin d'une variable existante (`$a .= "x"` équivaut à `$a = $a . "x"`).
4. `$note` ≠ `$Note` : sensibilité à la casse.
5. Valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`. Invalides : `$a!` (symbole interdit), `$1a` (chiffre en première position).

## Exercice 3 — Constantes
1. `define("TAUX_TVA", 20)` ou `const DEVISE = "MAD";` : pas de `$`, valeur non modifiable.
2-3. HT = 60 × 3 = 180 ; TVA = 180 × 20 / 100 = 36 ; TTC = 180 + 36 = 216.
4. `+= 15` ajoute les frais de livraison : 216 + 15 = 231.
5. `defined("TAUX_TVA")` renvoie `true` si la constante existe (le nom est passé **entre guillemets**).

## Exercice 4 — Types et conversions
1-2. `var_dump()` affiche type + valeur : `int(42)`, `string(2) "42"`, `float(15.8)`, `bool(true)`, `bool(false)`, `NULL`. La balise `<pre>` conserve la mise en forme.
3. `(int) "42"` → 42 ; `(int) 15.8` → **15** (troncature, pas d'arrondi) ; `(string) 42` → `"42"`.
4. `echo true` affiche `1`, `echo false` n'affiche rien ; `var_dump` affiche `bool(true/false)`.
5. Valent `false` : `0`, `"0"`, `[]`. `"PHP"` vaut `true` (chaîne non vide et différente de `"0"`).
6. Voir README : `echo` convertit en chaîne, `var_dump` montre le vrai type.

## Exercice 5 — Conditions
- On teste d'abord la validité (`< 0 || > 20`), sinon une note de 21 recevrait « Très bien ».
- Les `elseif` s'enchaînent dans l'ordre croissant : comme chaque branche est exclusive, il suffit de tester `< 10`, `< 12`, `< 14`, `< 16`, sinon « Très bien ». Les bornes inférieures sont donc « incluses » automatiquement (10 → Passable, 12 → Assez bien, etc.).
- Les valeurs limites (10, 12, 14, 16) sont les plus importantes à tester.

## Exercice 6 — switch
- `switch` compare `$numeroMois` à chaque `case`. Ici `return` remplace `break` (il quitte la fonction). Sans `break`/`return`, PHP continuerait dans le `case` suivant.
- `default` s'exécute si aucun cas ne correspond (ex. 15).
- `date("m")` renvoie le mois sur 2 chiffres (`"03"`) ; `(int)` le convertit en entier pour qu'il corresponde aux `case`.

## Exercice 7 — Boucles for
1. `for ($i = 1; $i <= 10; $i++)` : initialisation, condition, incrémentation. Dernière ligne : `7 × 10 = 70`.
2. Boucle externe = les 6 lignes ; boucle interne = autant d'étoiles que le numéro de la ligne. `<pre>` + `"\n"` conserve les retours à la ligne.
3. Deux balises `<section>` séparent les résultats.

## Exercice 8 — Contrôle des itérations
1. `while ($n <= 20)` avec `$n += 2` ne parcourt que les pairs ; `<strong>` uniquement si `$n == 10`.
2. `while` teste la condition **avant** : 5 < 5 est faux → 0 exécution. `do-while` teste **après** : le corps s'exécute une fois → 1 exécution.
3. `continue` saute au tour suivant (multiples de 3) ; `break` quitte la boucle. Le `break` est placé **avant** l'affichage, donc 16 n'est pas affiché. Résultat : `1 2 4 5 7 8 10 11 13 14`.

## Exercice 9 — Tableau associatif
1. `foreach ($notes as $etudiant => $note)` parcourt clé et valeur.
2. Seuil 10 : `$note >= 10` → « Validé ».
3. Accumulation : `$somme += $note` ; moyenne = 60 / 5 = **12**.
4. Compteur `$nbValides++` à chaque réussite → **4** (Youssef a 8).
5. Maximum : on part de `-1` et on met à jour note et nom dès qu'une note est supérieure → **Sara, 16**.

## Exercice 10 — Formulaires
**Partie A (GET)** : `method="get"` place les données dans l'URL après `?`, séparées par `&`. Lecture avec `$_GET`.
**Partie B (POST)** : `method="post"` place les données dans le corps de la requête, donc invisibles dans l'URL. Lecture avec `$_POST`.
**Partie C** :
1. `isset()` vérifie l'existence des clés ; `trim()` + comparaison à `''` détecte les champs vides ou composés d'espaces. Le groupe est contrôlé avec `in_array`.
2. Ouvrir la page directement : `isset()` renvoie `false`, on affiche un message au lieu de provoquer « Undefined array key ».
3. Test complet → message de bienvenue ; incomplet → liste d'erreurs.
4. `htmlspecialchars($v, ENT_QUOTES, 'UTF-8')` transforme `<`, `>`, `"`, `'` en entités HTML : une saisie comme `<script>` s'affiche en texte au lieu de s'exécuter (protection contre XSS).

## C / E. Publication et remise
- Un commit par exercice : `git add . && git commit -m "Exercice 05 : conditions" && git push origin main`.
- Remise Classroom : uniquement le lien `https://github.com/VOTRE-IDENTIFIANT/TP02-PHP-NOM-PRENOM`.
