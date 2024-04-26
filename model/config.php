<?php 
    ini_set("display_errors", 1);

    $project_name = "php-crud";

    $project_path = $_SERVER["DOCUMENT_ROOT"]."/".$project_name."/";

    $project_http = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/".$project_name;
    
    $GLOBALS["project_path"] = $project_path;

    $GLOBALS["project_http"] = $project_http;
    
?>