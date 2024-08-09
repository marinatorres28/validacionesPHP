<?php
$mensaje="";
if (!empty($_POST["dni"])){
    $dni = $_POST["dni"];
    $expReg='/^[0-9]{8}[A-Z]{1}$/';
    if(preg_match($expReg,$dni) && validarLetra($dni)){
       $mensaje="El DNI es correcto";
    }else{
        $mensaje="El DNI no es valido";
    }
}else{
    $mensaje="El campo DNI es obligatorio";
}
header("Location:dniFront.php?mensaje=".$mensaje);

function validarLetra($dni){
    $letras="TRWAGMYFPDXBNJZSQVHLCKE";
    $enteroDNI=substr($dni,0,8);
    // calculamos el resto que nos indicara la posicion de la letra correspondiente de la cadena letras
    $resto = $enteroDNI % 23;
    if ($letras[$resto] == strtoupper(substr($dni,8,1))){
       return true;
    }else{
        return false;
    }

}
