<?php
    include_once dirname(__DIR__)."/model/config.php";
    include_once $GLOBALS["project_path"]."model/Conection.class.php";
    include_once $GLOBALS["project_path"]."model/Manager.class.php";

    $fon = new Manager();

    $send = $_POST;

    if($send["nome_filmes"] == "" || $send["qtd_estoque"] == ""){
        header("location: ".$GLOBALS["project_http"]."?op=sem_dados");
    }else{
        $fon->insert_filme($send);
        header("location: ".$GLOBALS["project_http"]);
    }

    //header("location: ".$GLOBALS["project_http"]);
?>