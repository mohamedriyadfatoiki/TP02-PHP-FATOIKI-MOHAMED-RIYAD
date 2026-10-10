<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 9</title></head>
<body>
<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";
?>
<table border="1" cellpadding="6">
    <tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>
    <?php foreach ($notes as $etudiant => $note): ?>
        <?php
        $somme += $note;
        if ($note >= 10) {
            $resultat = "Validé";
            $nbValides++;
        } else {
            $resultat = "Non validé";
        }
        if ($note > $meilleureNote) {
            $meilleureNote = $note;
            $meilleurEtudiant = $etudiant;
        }
        ?>
        <tr>
            <td><?= $etudiant ?></td>
            <td><?= $note ?></td>
            <td><?= $resultat ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php $moyenne = $somme / count($notes); ?>
<ul>
    <li>Somme des notes : <?= $somme ?></li>
    <li>Moyenne de la classe : <?= $moyenne ?></li>
    <li>Étudiants ayant validé : <?= $nbValides ?></li>
    <li>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</li>
</ul>
</body>
</html>
