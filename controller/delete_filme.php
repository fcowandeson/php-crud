<?php 
    include_once dirname(__DIR__)."/model/config.php";
    include_once $GLOBALS["project_path"]."model/Conection.class.php";
    include_once $GLOBALS["project_path"]."model/Manager.class.php";

    $delete = new Manager();

    $id = $_GET;

    $delete->delete_filme($id);

    header("location: ".$GLOBALS["project_http"]);
?>