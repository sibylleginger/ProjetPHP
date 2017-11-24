
<?php
echo "{$peluche->getDescription()}<br>";
$nom = $_GET['nom'];
echo " C'est une peluche de taille : {$peluche->getTaille()}.";
echo "<br> Prix : {$peluche->getPrix()} €";

echo '<br> <a href="index.php?action=readAll" > Retour </a>';


?>
