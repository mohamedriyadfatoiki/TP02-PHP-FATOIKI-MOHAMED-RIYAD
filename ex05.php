<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 5</title></head>
<body>
<h1>Mentions selon la moyenne</h1>
<?php
// Pour tester rapidement toutes les valeurs, on les place dans un tableau.
// Pour un test manuel, remplacez simplement : $moyenne = 14;
$valeursTest = [-1, 9, 10, 12, 14, 16, 21];

echo "<ul>";
foreach ($valeursTest as $moyenne) {
    if ($moyenne < 0 || $moyenne > 20) {
        $message = "Note invalide";
    } elseif ($moyenne < 10) {
        $message = "Non validé";
    } elseif ($moyenne < 12) {
        $message = "Passable";
    } elseif ($moyenne < 14) {
        $message = "Assez bien";
    } elseif ($moyenne < 16) {
        $message = "Bien";
    } else {
        $message = "Très bien";
    }
    echo "<li>$moyenne : $message</li>";
}
echo "</ul>";
?>
</body>
</html>
