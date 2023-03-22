<?php
    class UsersDao{
        public function __construct()
        {
            try{
                Flight::register('db', 'PDO', 
                array('mysql:host=localhost;dbname=lab4_db','root','root'));
                echo "Connected succesfully!";
            } catch(PDOException $e){
                echo "Error". $e->getMessage();
            }
        }

        public function add(){
            
        }
    }
?>