<?php 
    if (isset($_POST["usu"]) && isset($_POST["pass"])) {

        require_once("../modelo/modeloLogin.php");
        $validar = new modeloLogin();
        $validar->validarDatos($_POST["usu"], $_POST["pass"]);

    } else {
        header("location:../index.php");
    }
?>