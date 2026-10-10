<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 4</title></head>
<body>
<?php
$entier = 42;
$chaine = "42";
$flottant = 15.8;
$vrai = true;
$faux = false;
$vide = null;
?>
<h2>1-2. Types et valeurs</h2>
<pre>
<?php
var_dump($entier, $chaine, $flottant, $vrai, $faux, $vide);
?>
</pre>

<h2>3. Conversions</h2>
<pre>
<?php
echo '"42" en int : ';   var_dump((int) $chaine);
echo '15.8 en int : ';   var_dump((int) $flottant);   // 15 (troncature)
echo '42 en string : ';  var_dump((string) $entier);
?>
</pre>

<h2>4. true et false : echo vs var_dump</h2>
<p>echo true : "<?php echo true; ?>" | echo false : "<?php echo false; ?>"</p>
<pre>
<?php
var_dump(true);
var_dump(false);
?>
</pre>

<h2>5. Conversion en booléen</h2>
<pre>
<?php
echo "0 : ";       var_dump((bool) 0);
echo '"0" : ';     var_dump((bool) "0");
echo '"PHP" : ';   var_dump((bool) "PHP");
echo "[] : ";      var_dump((bool) []);
?>
</pre>
</body>
</html>
