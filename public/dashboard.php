<?php
require('../config.php');
session_start();
if(!isset($_SESSION['usuario']))
{
    header('Location: login.php');
    exit;
}

$titulo='Dashboard';
$vista='dashboard';
require('../vistas/app/plantilla.html.php');
