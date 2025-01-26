<?php
require('../config.php');
session_start();
if(!isset($_SESSION['usuario']))
{
    header('Location: login.php');
    exit;
}

$xml=simplexml_load_file('https://www.3djuegos.com/feedburner.xml');
$namespaces = $xml->getNamespaces(true);

$titulo='Noticias';
$vista='noticias';
require('../vistas/app/plantilla.html.php');
