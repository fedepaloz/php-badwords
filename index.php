<?php
$paragrafo = ("amor, ch'al cor gentil ratto s'apprende,
prese costui de la bella persona
che mi fu tolta; e 'l modo ancor m'offende.
amor, ch'a nullo amato amar perdona,
mi prese del costui piacer sì forte,
che, come vedi, ancor non m'abbandona.
amor condusse noi ad una morte:
Caina attende chi vita ci spense.");

echo($paragrafo);

$censoredWord  = ($_GET["badword"]);

$lunghezzaParagrafo = strlen($paragrafo);

$paragrafoCensurato = str_replace($censoredWord,'***',$paragrafo);

$lunghezzaParagrafoCensurato = strlen($paragrafoCensurato);

echo $paragrafoCensurato

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo($paragrafo) ?></h1>
    <h2>il paragrafo è lungo <?php echo ($lunghezzaParagrafo) ?> caratteri</h2>
<h3>paragrafo censurato qui sotto</h3>
<h1><?php echo($paragrafoCensurato) ?></h1>
<h2>il paragrafo è lungo <?php echo ($lunghezzaParagrafoCensurato) ?> caratteri</h2>
</body>
</html>