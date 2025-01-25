<?php
require('../config.php');
session_start();
if(!isset($_SESSION['usuario']))
{
    header('Location: login.php');
    exit;
}
$vista='ejemplo';
require('../vistas/app/plantilla.html.php');
