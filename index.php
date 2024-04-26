<?php
    include_once "model/config.php";

    if(!$_GET){
        $_GET["op"] = "";
    }
    include_once $GLOBALS["project_path"]."controller/validate.php";
    include_once $GLOBALS["project_path"]."controller/list_filmes.php";
    
    function page_content(){
        validate_options();
    }    
     
    include_once $GLOBALS["project_path"]."view/template.html";

?>