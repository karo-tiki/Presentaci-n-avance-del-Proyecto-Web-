<?php 
    $conexion = mysqli_connect("localhost","root","","bdd");
    
    if($conexion){
        echo 'Conectado exitosamente a la base de datos';

    }else{
        echo 'No se ha podido conectar a la base de datos';
    }

    

?>