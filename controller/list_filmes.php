<?php
    include_once $GLOBALS["project_path"]."model/Conection.class.php";
    include_once $GLOBALS["project_path"]."model/Manager.class.php";

    function view_table(){
        $listdb = new Manager();
        $table_content = $listdb->list_filmes();
    
        $table_title["id_filmes"] = "id";
        $table_title["nome_filmes"] = "Nome";
        $table_title["qtd_estoque"] = "Quantidade";
        $table_title["descricao"] = "Descrição";
        
        include_once $GLOBALS["project_path"]."view/list_filmes.html";
    }
?>