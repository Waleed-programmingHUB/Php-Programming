<?php
/**
 * 
 * Database class in Php programming 
 * waleed @2022
 * 
 */
 class Database
 {
     private $DB_SERVER = "127.0.0.1";
     private $DB_USER = "root";
     private $DB_PASS = "";
     private $DB_NAME = "student";
     // connection variable
     private $conn = false;
     private $my_sql = "";
     private $result = [];

     // constructor
     public function __construct()
     {
        // connection
         if (!$this->conn){
             $this->my_sql = new mysqli($this->DB_SERVER,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);
            $this->conn = true;
             if ($this->my_sql->connect_error){
                 array_push($this->result,$this->my_sql->connect_error);
                 return false;
             }
         }else{
             return true;
         }
     }

     // method insert
     public function Insert($table_Name,$params = array()){

        // inserting data in to database
        if ($this->tableExist($table_Name)){ // table is exists
            echo '<pre>';
            print_r($params);
            echo '</pre>';

            $table_columns = implode(', ',array_keys($params));
            $table_values = implode("', '",$params);
            $sql_Insert = "INSERT INTO $table_Name ($table_columns) VALUES ('$table_values')";
            // if query inserted
            if ($this->my_sql->query($sql_Insert)){
                array_push($this->result,$this->my_sql->insert_id);
                return true;
            }else{
                array_push($this->result,$this->my_sql->error);
                return false;
            }
        }

    }

    // get result
     public function GetResult(){

         $val = $this->result;
         $this->result = [];
         return $val;

     }
     // method update
     public function Update($tableName,$params = [],$Where = null){
        if ($this->tableExist($tableName))
        {
            $arg = [];
            // loop
            foreach ($params as $key => $v) {
                $arg [] = "$key = '$v'";
            }
            $sql_Update = "UPDATE $tableName SET ". implode(', ',$arg);
            // if where is not equal to null
            if ($Where != null){
                $sql_Update .= " WHERE $Where";
            }
            // execute query
            if ($this->my_sql->query($sql_Update)){
                array_push($this->result,$this->my_sql->affected_rows);
            }else{
                array_push($this->result,$this->my_sql->error);
            }
        }
        else
        {
            return false;
        }

     }

     // method delete
     public function Delete($tableName,$Where = null){
        // if table is exists
         if ($this->tableExist($tableName))
         {
             $sql_Delete = "DELETE FROM $tableName ";
             if ($Where != null){
                $sql_Delete .= "WHERE $Where";
             }
             // delete condition
             if ($this->my_sql->query($sql_Delete)){
                 array_push($this->result,$this->my_sql->affected_rows);
                 return true;
             }else{
                 array_push($this->result,$this->my_sql->affected_rows);
                 return false;
             }
             echo $sql_Delete;
         }else{
             return false;
         }
    }

    // table exists method
      private function tableExist($tableNAME){
         $sql_table = "SHOW TABLES FROM $this->DB_NAME LIKE '$tableNAME'";
         $tableINDatabase = $this->my_sql->query($sql_table);
         // if query run
          if ($tableINDatabase){
              if ($tableINDatabase->num_rows == 1){
                  return true;
              }else{
                  array_push($this->result,$tableNAME . "Dose not found table.");
                  return false;
              }
          }
      }

      // select method
     public function select_data($tableNAME , $row = null,$join = null,$where = null,$order = null,$limit = null)
     {
        if ($this->tableExist($tableNAME)){
            $sql_select = "SELECT $row FROM $tableNAME";
            if ($join != null){
                $sql_select .= " JOIN $join";
            }if ($where != null){
                $sql_select .= " WHERE $where";
            }if ($order != null){
                $sql_select .= " ORDER BY $order";
            }if ($limit != null){
                if (isset($_GET['page'])){
                    $page =$_GET['page'];
                }else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $sql_select .= " LIMIT $start, $limit";
            }
            // query
            $query = $this->my_sql->query($sql_select);
            if ($query){
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            }else{
                array_push($this->result,$this->my_sql->error);
                return false;
            }

        }else{
            return false;
        }
     }

     // pagination method
        public function pagination($tableNAME ,$join = null,$where = null,$limit = null){
            // table exists
            if ($this->tableExist($tableNAME)){
                // sql
                if ($limit != null){
                    $sql = "SELECT COUNT(*) FROM $tableNAME";
                    if ($join != null){
                        $sql .= " JOIN $join";
                    }
                    if ($where != null){
                        $sql .= " WHERE $where";
                    }
                    $query = $this->my_sql->query($sql);
                    $total_record = $query->fetch_array();
                    echo "Total record " . $total_record;
                    //
                }else{
                    return  false;
                }
            }else{
                return false;
            }
        }

     // sql command method
     public function sql_Query($sqlQueryText)
     {
         $query = $this->my_sql->query($sqlQueryText);
         if ($query){
             $this->result = $query->fetch_all(MYSQLI_ASSOC);
             return true;
         }else{
             array_push($this->result,$this->my_sql->error);
             return false;
         }
     }

    // destructor
     public function __destruct()
     {
         // TODO: Implement __destruct() method.
        // if connection
         if ($this->conn){
            if ($this->my_sql->close()){
                $this->conn = false;
                return true;
            }
         }else{
             return false;
         }
     }
 }