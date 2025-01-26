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
    
    if(count($res)==1 and password_verify($_REQUEST['login_password'], $res[0]['password']))
    {
        $_SESSION['usuario']=$res[0];
        $formatter = new IntlDateFormatter(
            'es_ES', // Idioma y localización
            IntlDateFormatter::LONG, // Formato largo: incluye día de la semana
            IntlDateFormatter::LONG // Sin formato de hora
        );
        db_query($conn, 'UPDATE usuarios set ultima_sesion=? WHERE id=?', [date('Y-m-d H:i:s'), $res[0]['id']]);
        $_SESSION['inicio_sesion']= $formatter->format(new DateTime());
        header('Location: .'); exit;
    }else{
        $_SESSION['error']='El usuario no está registrado o el password es incorrecto';
    }
    
    db_close($conn);
}

require('../vistas/login.html.php');
unset($_SESSION['error']);
