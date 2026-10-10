<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 2</title></head>
<body>
<?php
$nom = "FATOIKI";
$prenom = "MOHAMED RIYAD";
$age = 19;
$formation = "Licence Informatique";

// Concaténation avec l'opérateur point
$phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans, formation : " . $formation . ". ";
// Ajout à la fin de la chaîne avec .=
$phrase .= "J'apprends PHP.";
echo "<p>" . $phrase . "</p>";

// PHP est sensible à la casse : $note et $Note sont deux variables distinctes
$note = 12;
$Note = 16;
echo "<p>\$note = $note</p>";
echo "<p>\$Note = $Note</p>";
?>
</body>
</html>
