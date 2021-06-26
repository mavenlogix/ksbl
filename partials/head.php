<head>

<?php

require_once(__DIR__ . '/page_meta.php');
require_once(__DIR__ . '/functions.php');

$metas = $page_meta[$page_meta_key];

 $protocol = "https://";
 $baseUrl = $_SERVER['SERVER_NAME'];

 $url = 'http://localhost/ksbl_local/';
define('SCRIPT_BASE', $url);

 if ($baseUrl == 'ksbl.edu.pk'){
 	$url = $protocol.'ksbl.edu.pk/';

 } else if ($baseUrl == 'mavenology.site'){

 	$url = $protocol.'mavenology.site/';
 }
?>
	<base href="<?php echo $url ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $metas['title'] ?> </title>
    <?php foreach ($metas['meta'] as $meta_key => $meta_value): ?>
        <meta property="<?= $meta_key ?>" name="<?= $meta_key ?>" content="<?= $meta_value ?>">
    <?php endforeach ?>
    <link rel="icon" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style-mba.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Cond.woff" type="font/woff" crossorigin="anonymous">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Regular.woff" type="font/woff" crossorigin="anonymous">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Light.woff" type="font/woff" crossorigin="anonymous">
</head>