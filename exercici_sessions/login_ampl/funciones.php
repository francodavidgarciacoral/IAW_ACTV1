<?php
session_start();

function validarUsuario($usuario, $password){
    return ($usuario === $password);
}

function comprobarSesion(){
    if(!isset($_SESSION['usuario'])){
        header("Location: index.html");
        exit();
    }
}

function mostrarUsuario(){
    if(isset($_SESSION['usuario'])){
        echo "<p>Benvingut, <b>".$_SESSION['usuario']."</b> | <a href='logout.php'>Tancar sessió</a></p>";
    }
}
?>
