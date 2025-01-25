<?php
require('../config.php');
require('../librerias/db_mysql.php');
session_start();

if(isset($_SESSION['usuario']))
{
    header('Location: .');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!isset($_REQUEST['login_email']) or filter_var($_REQUEST['login_email'], FILTER_VALIDATE_EMAIL))
    {
        $_SESSION['error']='El email está vacío o es incorrecto';
    }
    
    if(!isset($_REQUEST['login_password']))    {
        $_SESSION['error']='El password está vacío o es incorrecto';
    }

    $conn=db_open();
    $res=db_query($conn, 'SELECT * FROM usuarios WHERE email=?', [$_REQUEST['login_email']]);
    db_close($conn);    
    
    if(count($res)==1 and password_verify($_REQUEST['login_password'], $res[0]['password']))
    {
        $_SESSION['usuario']=$res[0];
        header('Location: .'); exit;
    }else{
        $_SESSION['error']='El usuario no está registrado o el password es incorrecto';
    }
}

require('../vistas/login.html.php');
unset($_SESSION['error']);
