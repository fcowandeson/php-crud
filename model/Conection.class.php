<?php 
    
    /* conexão com o banco metodo sem POO
    try {
        $conection = new PDO("mysql:dbname=db_loca;host=localhost", "root", "");
        $cmd = $conection->prepare("SELECT * FROM filmes ORDER BY id_filmes");
        //$cmd->bindValue(":id",1);
        $cmd->execute();
        $resultado = $cmd->fetchALL(PDO::FETCH_ASSOC);
        print "<pre>";
        print_r($resultado);
        print "<pre>";
    } catch (PDOException $e) {
        echo "erro ao acessar banco".$e->getMessage();
    } catch (Exception $e) {
        echo "erro ".$e->getMessage();
    } */

	class Conection{
		
		public static $instance;

		public function __construct(){

		}


		public static function get_instance(){
			if(!isset(self::$instance)){
				self::$instance = new PDO('mysql:host=localhost;dbname=db_loca;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			}

			return self::$instance;
		}
	}
    
    //funções para gerenciamento do banco 
   /* function list_filmes($table, $fields){
        $conection->prepare();
    } */
?>