<?php
session_start();
if(session_destroy()) // Destrucción de las sesiones
{
    header("Location: ../../index.html"); // Redireccionado
}
?>