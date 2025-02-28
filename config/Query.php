<?php 
    namespace Config\Query;
    use Config\Conn;
    require_once "Conn.php";

    class Query extends Conn{

        // Select Method
        public function select($table, $selector = "*", $conditions = "", $datatypes = "", $values = ""){
            $query = "SELECT $selector FROM $table WHERE $conditions";
            $stmt = $this->conn->prepare($query);

            if($stmt->prepare($query) === false){
                die("<h1>Failed to Prepare:</h1> " . $this->conn->error);
            }

            $stmt->bind_param($datatypes, $values);
            
            if(!$stmt->execute() || $stmt->errno){
                die("<h1>Could Not Select Table: </h1> " . $this->conn->error);
            }

            $stmt->execute();
            $result = $stmt->get_result();

            return $result;
        } 



        // Update method
        public function update($table, $keys = "", $values = [], $datatypes = ""){
            $query = "UPDATE $table SET $keys";
            $stmt = $this->conn->prepare($query);

            if($stmt->prepare($query) === false){
                die("<h1>Failed to Prepare:</h1> " . $this->conn->error);
            }

            $stmt->bind_param($datatypes, $values);

            if(!$stmt->execute() || $stmt->errno){
                die("<h1>Could Not Update Table: </h1> " . $this->conn->error);
            }


            return $stmt->execute();
        }




        // Delete Method
        public function delete($table, $selector = "*", $condition = "", $datatypes = "", $values = []){
            $query = "DELETE $selector FROM $table WHERE $condition";
            $stmt = $this->conn->prepare($query);

            if($stmt->prepare($query) === false){
                die("<h1>Failed to Prepare (Update):</h1> ". $this->conn->error);
            }

            $stmt->bind_param($datatypes, $values);

            if(!$stmt->execute() || $stmt->errno){
                die("<h1>Could Not delete Data: </h1>". $this->conn->error);
            }

            return $stmt->execute();
        }

        

        // Insert Method
       public function insert($table, $datas){
            $columns = implode(', ', array_keys($datas));
            $placeholders = implode(',', array_fill(0, count($datas), "?"));

            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
            $stmt = $this->conn->prepare($sql);

            if($stmt == false){
                die("<h1>Failed to prepare</h1>: ({$this->conn->error})");
            }

            $types = '';
            foreach ($datas as $data) {
                if (is_int($data)) {
                    $types .= 'i';
                } elseif (is_double($data) || is_float($data)) {
                    $types .= 'd';
                } else{
                    $types .= 's';
                }
            }
            // $type = str_repeat($types, count($datas));
            $stmt->bind_param($types, ...array_values($datas));

            if($stmt->execute()){
                return true;
            }else{
                die("<h1>Failed to Execute </h1>: {$stmt->error}");
            }
        }
    }