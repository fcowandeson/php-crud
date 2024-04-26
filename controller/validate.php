<?php 
    //arquivo controlador da pagina dinamica
    //incluindo arquivo de configuração e arquivos de manipulação do banco
    include_once dirname(__DIR__)."/model/config.php";
    include_once $GLOBALS["project_path"]."model/Conection.class.php";
    include_once $GLOBALS["project_path"]."model/Manager.class.php";

    //manipular pagina atraves do get
    function validate_options(){

        switch ($_GET["op"]) {
            case 'update':

                $prepare = new Manager();

                $id = $_GET["id_filmes"];

                $data = $prepare->select_filme($id);

                //var_dump($data);

                include_once $GLOBALS["project_path"]."/view/forms/update_filme.html";
                break;
            
            default:
                include_once $GLOBALS["project_path"]."/view/forms/insert_filme.html";
                break;
        }
    }
?>