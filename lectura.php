<?php
$mensaje="";
if (empty($_POST["numero"])){
    $mensaje="Debe ingresar un numero";
}else{
    // la funcion is numeric devuelve true si es numerico y false si no lo es
    if (is_numeric($_POST["numero"])){
        $mensaje="Bien, es un numero correcto";
    }else{
        $mensaje="Debe ingresar un numero correcto";
    }
}
// si esta vacio o no es una cadena de texto, envia un mensaje diciendo que no es el dato esperado
if (empty($_POST["nombre"]) || is_string($_POST["nombre"])){
    $mensaje.="<br>Debe ingresar un nombre";
}else{
    $mensaje.="<br>Bien, es un nombre correcto".$_POST["nombre"];
}
header("Location: index.php?mensaje=".$mensaje);
