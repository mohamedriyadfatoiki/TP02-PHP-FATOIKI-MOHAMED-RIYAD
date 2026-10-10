<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 3</title></head>
<body>
<?php
define("TAUX_TVA", 20);   // constante via define()
const DEVISE = "MAD";     // constante via const

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;       // 180
$montantTVA = $totalHT * TAUX_TVA / 100;      // 36
$totalTTC = $totalHT + $montantTVA;           // 216

$montantFinal = $totalTTC;
$montantFinal += 15;                          // frais de livraison : 231
?>
<h2>Récapitulatif</h2>
<ul>
    <li>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></li>
    <li>Quantité : <?= $quantite ?></li>
    <li>Total HT : <?= $totalHT . " " . DEVISE ?></li>
    <li>TVA (<?= TAUX_TVA ?> %) : <?= $montantTVA . " " . DEVISE ?></li>
    <li>Total TTC : <?= $totalTTC . " " . DEVISE ?></li>
    <li>Montant final (livraison 15 <?= DEVISE ?> incluse) : <?= $montantFinal . " " . DEVISE ?></li>
</ul>
<p>TAUX_TVA existe ? <?= defined("TAUX_TVA") ? "Oui" : "Non" ?></p>
</body>
</html>
