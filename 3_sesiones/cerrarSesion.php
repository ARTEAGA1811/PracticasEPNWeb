<?php
$pathSesiones = $_SERVER["DOCUMENT_ROOT"]."/temporal";
ini_set("session.save_path", $pathSesiones);
session_start();
$_SESSION = array();
session_destroy();

header("Location: index.php");
?>