<?php 
    include_once dirname(__DIR__)."/model/config.php";
    include_once $GLOBALS["project_path"]."model/Conection.class.php";
    include_once $GLOBALS["project_path"]."model/Manager.class.php";

    $update = new Manager;

    $upload = $_POST;

    $id = $upload["id_filmes"];
    unset($upload["id_filmes"]);

    $update->update_filme($upload, $id);

    header("location: ".$GLOBALS["project_http"]);
?>