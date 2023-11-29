<?php
    require_once '../libraries/Database.php';

    class User {
        private $db;
        public function __construct()
        {
            $this->db = new Database;
        }

        //Funcion para verificar existencia de emil o ID usuario

        public function findUserByEmailorID($correo, $username)
        {
            $this->db->query('SELECT * FROM usuarios WHERE username = :username OR correo = :correo');
            $this->db->bind(':username', $username);
            $this->db->bind(':correo', $correo);

            $row = $this->db->single();

            if($this->db->rowCount() > 0)
            {
                return $row;
            }
            else
            {
                return false;
            }
        }//func finduserbyEmailorID

        //Registrar el usuario
        public function register($data)
        {
            $this->db->query('INSERT INTO usuarios (username, correo, pass, nombre, apellido, edad)
            VALUES (:username, :correo, :pass, :nombre, :apellido, :edad)');

            $this->db->bind(':username', $data['username']);
            $this->db->bind(':correo', $data['correo']);
            $this->db->bind(':nombre', $data['nombre']);
            $this->db->bind(':apellido', $data['apellido']);
            $this->db->bind(':pass', $data['pass']);
            $this->db->bind(':edad', $data['edad']);

            //Ejecuta la query
            if($this->db->execute())
            {
                return true;
            }
            else 
            {
                return false;
            }
        }//func register

        public function login($IDorEmail, $password)
        {
            $row = $this->findUserByEmailorID($IDorEmail, $IDorEmail);
            if($row == false) 
            {
                return false;
            }
            $hashedPassword = $row->pass;
            if(password_verify($password, $hashedPassword))
            {
                return $row;
            }
            else
            {
                return false;
            }


        }//func login

    }//clase usuario