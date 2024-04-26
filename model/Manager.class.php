<?php 
    class Manager extends Conection{

        public function list_filmes(){
            $pdo = parent::get_instance();
            
            $test = $pdo->prepare("SELECT * FROM filmes");
            $test->execute();

            $data = $test->fetchAll(PDO::FETCH_ASSOC);            
            
            return $data;
        }

        public function insert_filme($data){

            $pdo = parent::get_instance();

            $field = "";
            $values = "";
            $mascara = "";
            foreach($data as $key => $value){
                $field.=$key.", ";
                $mascara.=":".$key.", ";
                $values.=$value.", ";
            }

            $field = substr($field, 0, -2);
            $values = substr($values, 0, -2);
            $mascara = substr($mascara, 0, -2);
            
            $query = "INSERT INTO filmes($field) VALUES ($mascara)";
            $res = $pdo->prepare($query);

            if(!$res){
                print_r($res->errorInfo());
            }
            
            foreach($data as $key => $values){
                $data[$key] = filter_var($values);
            }

            foreach ($data as $key => $values) {
                $res->bindValue(":$key", $values);
            }

            if($res->execute()){
                
            } else {
                echo "erro";
            }
           //var_dump($mascara);*/
        }

        public function delete_filme($field){
            $pdo = parent::get_instance();

            $query = ("DELETE FROM filmes WHERE id_filmes = :id");

            $res = $pdo->prepare($query);

            if(!$res){
                print_r($res->errorInfo());
            }
            
            foreach($field as $key => $value){
                $id[$key] = filter_var($value);
            }
            
            foreach($field as $key => $value){
                $res->bindValue(":id", $value);
            }

            if ($res->execute()) {
                
            }else{
                echo 'erro';
            }
        }

        public function update_filme($data, $id){

            $pdo = parent::get_instance();

            $prepare = "";
            foreach($data as $key => $value){
                $prepare.=" $key = :$key,";
            }

            $prepare = substr($prepare, 0, -1);
          
            $query = "UPDATE filmes SET $prepare WHERE id_filmes = $id";

            $res = $pdo->prepare($query);
            
            if(!$res){
                print_r($res->errorInfo());
            }
            
            foreach($data as $key => $values){
                $data[$key] = filter_var($values);
            }
            
            foreach ($data as $key => $values) {
                //var_dump($values);
                $res->bindValue($key, $values);
            }
            
            //$id = filter_var($id);
            //$res->bindValue(":$id", $id);
           
            if($res->execute()){
                
            } else {
                echo "erro";
            }

        }

        public function select_filme($id){

            $pdo = parent::get_instance();
            
            $query = "SELECT * FROM filmes WHERE id_filmes = :id";

            $res = $pdo->prepare($query);

            if(!$res){
                print_r($res->errorInfo());
            }

            $id = filter_var($id);

            $res->bindValue(":id", $id);

            
            if($res->execute()){
                $data = $res->fetchAll(PDO::FETCH_ASSOC);

                return $data;
            }else{
                echo "erro";
            }
        }
    }
?>