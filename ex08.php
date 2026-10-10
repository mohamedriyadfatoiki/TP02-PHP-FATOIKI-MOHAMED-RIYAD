<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 8</title></head>
<body>
<h2>Partie 1 : nombres pairs de 0 à 20</h2>
<p>
<?php
$n = 0;
while ($n <= 20) {
    if ($n == 10) {
        echo "<strong>$n</strong> ";
    } else {
        echo "$n ";
    }
    $n += 2;
}
?>
</p>

<h2>Partie 2 : while vs do-while (condition : compteur &lt; 5)</h2>
<?php
$compteur = 5;
$executions = 0;
while ($compteur < 5) {
    $executions++;
}
echo "<p>while : $executions exécution(s)</p>";

$compteur = 5;      // réinitialisation
$executions = 0;
do {
    $executions++;
} while ($compteur < 5);
echo "<p>do-while : $executions exécution(s)</p>";
?>

<h2>Partie 3 : continue et break</h2>
<p>
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i >= 16) {
        break;          // on arrête avant d'afficher 16
    }
    if ($i % 3 == 0) {
        continue;       // on saute les multiples de 3
    }
    echo "$i ";
}
?>
</p>
</body>
</html>
