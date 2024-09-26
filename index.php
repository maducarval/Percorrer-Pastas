<?php
// Diretório atual
$dir = __DIR__;
$urlHost = "UrlBase";
$nomeServidor = "NomeDoServidor";
$items = scandir($dir);
$folders = [];

foreach ($items as $item) {
    if (is_dir($dir . DIRECTORY_SEPARATOR . $item) && !in_array($item, ['.', '..', 'src', 'temporario'])) {
        $folders[] = $item;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
    <title><?php echo $nomeServidor ?> - Servidor de Homologação</title>
    <link rel="stylesheet" href="src/css/style.css" type="text/css">
</head>
<div id="topo">
    <a href="http://www.ccabr.intraer" target="_blank"> <img src="src/ccabr.png"></a>
    <h1><?php echo $nomeServidor ?> - Servidor de Homologação</h1>
</div>

<div id="oms">
    <?php foreach ($folders as $folder): ?>
        <div class="omPagina">
            <a href="<?php echo "{$urlHost}/{$folder}" ?>" target="_blank">
                <img id="<?php echo $folder ?>" src="src/joomla.png">
                <br>
                <span class="nomeOM"><?php echo strtoupper($folder); ?></span>
            </a>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>