<head>

<?php

require_once(__DIR__ . '/page_meta.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/../system/file_catalog.php');

$catalog = new File_Catalog();
$catalog->scan();

$metas = [];

if(isset($page_meta_key)){
    $metas = $page_meta[$page_meta_key];
}else{
    $metas = $page_meta['home'];
}

 $protocol = "https://";
 $baseUrl = $_SERVER['SERVER_NAME'];

 $url = 'http://localhost/ksbl_local/';

 if ($baseUrl == 'www.ksbl.edu.pk'){
    $url = $protocol.'www.ksbl.edu.pk/';

 } else if ($baseUrl == 'mavenology.site'){

    $url = $protocol.'mavenology.site/';
 }
define('SCRIPT_BASE', str_replace(['http://','https://'], '', $url)); 
header_remove()
?>
    <base href="<?php echo $url ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $metas['title'] ?> </title>
    <?php foreach (@($metas['meta'] ?? []) as $meta_key => $meta_value): ?>
        <meta property="<?= $meta_key ?>" name="<?= $meta_key ?>" content="<?= $meta_value ?>">
    <?php endforeach ?>
    <link rel="icon" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $url ?>js/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="./css/style-mba.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Cond.woff" type="font/woff" crossorigin="anonymous">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Regular.woff" type="font/woff" crossorigin="anonymous">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Light.woff" type="font/woff" crossorigin="anonymous">

</head>