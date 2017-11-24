
<?php
$nom = $_GET['nom'];
echo "{$nom} ({$peluche->getCouleur()}) : <br>";
echo "{$peluche->getDescription()}<br>";

echo " C'est une peluche de taille : {$peluche->getTaille()}.";
echo "<br> Prix : {$peluche->getPrix()} €";

echo '<br> <a href="index.php?action=readAll" > Retour </a>';


?>
