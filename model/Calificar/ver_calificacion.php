<?php
    require_once("../controller/cript_user.php");

    $sql="SELECT COUNT(*) as Calif FROM calificacion WHERE Materia=:materia AND Usuario=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":materia",$materia);
    $resultado->bindValue(":usuario",encriptar($usuario));
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $reviews = $registro["Calif"];

?>