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
    }
?>