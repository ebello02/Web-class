

<?php


try{
    $conexion= new PDO('mysql:host=127.0.0.1;dbname=webclass', 'root', '');

}catch(PDOException $e){
    echo 'Error '. $e->getMessage();
}


?>