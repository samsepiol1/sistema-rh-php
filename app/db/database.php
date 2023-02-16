<?php
    namespace App\Db;
    use \PDO;

    class Database{
        const HOST = 'localhost';

        const NAME = 'rh';

        const USER = 'root';

        const pass = '';

        private $table;

        private $connection;

        public function __construct($table=null){

            $this->table = $table;
            $this -> setConnection();
        }

        private function setConnection(){
            try{
                $this -> connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::pass);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                die('Erro:'.$e ->getMessage());
            }

        }

    }
?>