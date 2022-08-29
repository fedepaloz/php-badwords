<?php 
$citazione = "la logica è l'anatomia del pensiero";
$lunghezza_citazione = strlen($citazione);
$bad_word = $_GET['badword'];
$censored_word = '***';
$nuova_citazione = str_replace('logica','***', $citazione);
$lunghezza_nuova_citazione = strlen($nuova_citazione);
 ?>

<h1>john locke disse: <?php echo ($nuova_citazione)?></h1>

<h2>la citazione è lunga:<?php var_dump($lunghezza_citazione)?></h2>

<h2>la nuova citazione è lunga: <?php var_dump($lunghezza_nuova_citazione)?></h2>