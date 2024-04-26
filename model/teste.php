<?php 
    include_once "Conection.class.php";
    include_once "Manager.class.php";


    $teste["nome"] = 13;
    $teste["test"] = 13;
    $teste["font"] = 13;
    
    $fon = new Manager();
    $fon->update_filme($teste, 4);
?>