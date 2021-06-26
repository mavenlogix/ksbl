<head>

<?php
 $protocol = "https://";
 $baseUrl = $_SERVER['SERVER_NAME'];

 $url = 'http://localhost/ksbl_local/';

 if ($baseUrl == 'ksbl.edu.pk'){
 	$url = $protocol.'ksbl.edu.pk/';

 } else if ($baseUrl == 'mavenology.site'){

 	$url = $protocol.'mavenology.site/';
 }
 
?>
	<base href="<?php echo $url ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Karachi School of Business and Leadership | KSBL </title>
    <meta name="description" content="  Karachi School of Business and Leadership is your launchpad to learn, network and grow as an A-class  business and management professional.">
    <meta name="keywords" content="KSBL, management school, business school, KSBL advantage, business education, management sciences">
    <link rel="icon" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style-mba.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Cond.woff" type="font/woff" crossorigin="anonymous">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Regular.woff" type="font/woff" crossorigin="anonymous">
    <link rel="preload" as="font" href="./fonts/MyriadPro-Light.woff" type="font/woff" crossorigin="anonymous">
</head>