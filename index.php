<?php
$server_name = gethostname(); // Récupère le nom de l'hôte

if ($server_name === 'srv-web1-2399494') {
    echo "<h1>Bienvenue dans web1</h1>";
} elseif ($server_name === 'srv-web2-2399494') {
    echo "<h1>Bienvenue dans web2</h1>";
} else {
    echo "<h1>Serveur inconnu</h1>";
}
?>

