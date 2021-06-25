<!DOCTYPE html !>
<html lang="fr">
<head>
    <title><?= $this->_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="<?php echo ASSETSDIR ?>css/public.css" rel="stylesheet">
</head>
<body>
<header>
	<nav>
    	<ul>
        	<li><a href="<?php echo HOST ?>">Home</a></li>
        	<li><a href="<?php echo HOST_PUBLIC.'maps/royaume_amestris'; ?>">Carte d'Amestris</a></li>
            <li><a href="<?php echo HOST_PUBLIC.'rules/type_degats'; ?>">Les types de dégâts et résistances</a></li>
    	</ul>
	</nav>
</header>
<div class="main">
