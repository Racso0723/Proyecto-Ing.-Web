<?php
    class Database {
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $dbname = 'reservaya';
        private $dbh;
        private $stmt;
        private $error;

        public function __construct()

        {
            $dsn = 'mysql:host='. $this->host.';dbname='.$this->dbname;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            //Generar una instancia del pdo
            try 
            {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            }
            catch(PDOException $e) 
            {
                $this->error = $e->getMessage();
                echo 'Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine();
            }
        } //const

        public function query($sql)
        {
            $this->stmt = $this->dbh->prepare($sql);
        }//func query
        public function bind($param, $value, $type = null)
        {
            if(is_null($type))
            {
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }//if
            $this->stmt->bindValue($param, $value, $type);
        }//funct bind

        //Ejecucion de la consulta
        public function execute()
        {
            return $this->stmt->execute();
        }//Execute

        //Retornar N tuplas
         //Return multiple records
        public function resultSet()
        {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function single() 
        {

            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);

        }//funct sing

        //CUANTAS TUPLAS SACO LA QUERY
        public function rowCount() 
        {

            return $this->stmt->rowCount();

        }//FUNCT ROWCOUNT


    } //clase