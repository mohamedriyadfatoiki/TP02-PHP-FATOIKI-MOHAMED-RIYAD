<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat POST</title></head>
<body>
<?php
// Fonction d'échappement HTML (protège contre l'injection XSS)
function e(string $valeur): string
{
    return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8');
}

$groupesValides = ['G1', 'G2', 'G3', 'G4'];

// Cas 1 : page ouverte directement, sans formulaire
if (!isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
    echo "<p>Aucune donnée reçue. Veuillez passer par le <a href=\"ex10_post.html\">formulaire</a>.</p>";
} else {
    // trim() retire les espaces au début et à la fin
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

    $erreurs = [];
    if ($nom === '')    { $erreurs[] = "Le nom est vide."; }
    if ($prenom === '') { $erreurs[] = "Le prénom est vide."; }
    if (!in_array($groupe, $groupesValides, true)) { $erreurs[] = "Le groupe est invalide."; }

    if (count($erreurs) > 0) {
        echo "<p>Formulaire incomplet :</p><ul>";
        foreach ($erreurs as $erreur) {
            echo "<li>" . e($erreur) . "</li>";
        }
        echo "</ul><p><a href=\"ex10_post.html\">Retour au formulaire</a></p>";
    } else {
        echo "<h1>Bienvenue " . e($prenom) . " " . e($nom) . " (groupe " . e($groupe) . ") !</h1>";
    }
}
?>
</body>
</html>
