<?php
    class ProjectDao{

        private $conn;

        public function __construct(){
            try{
                Flight::register('db', 'PDO', 
                array('mysql:host=localhost;dbname=lab4_db','root','root'));
                echo "Connected succesfully!";
            } catch(PDOException $e){
                echo "Error". $e->getMessage();
            }
            
        }

        public function get_all(){
            $stmt = $this->conn->prepare("SELECT * FROM Users");
            $stmt->exec();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

        public function add_elements($first_name, $last_name, $age){
            $stmt = $this->conn->prepare("INSERT INTO Users (first_name, last_name, age) VALUES ('user001', 'test001', 'age001')");
            $result = $stmt->exec(['first_name'=>$first_name,'last_name'=>$last_name,  'age'=>$age]);
        }

        public function update_elements($first_name, $last_name, $age, $id){
            $stmt = $this->conn->prepare("UPDATE Users SET first_name = ':first_name', last_name = ':last_name', age = ':age' WHERE id=:id");
            $stmt->exec(['first_name'=>$first_name,'last_name'=>$last_name,  'age'=>$age, 'id'=>$id]);
        }

        public function delete_elements($id){
            $stmt = $this->conn->prepare("DELETE FROM Users WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->exec();
        }
    }
?>