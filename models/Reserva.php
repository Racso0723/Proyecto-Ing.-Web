
<?php
    require_once '../libraries/Database.php';
    

class Reserva {
    private $db;

    public function __construct()
        {
            $this->db = new Database;
        }
    public function realizarReserva($data)
    {
        {
            $this->db->query('INSERT INTO reservas (username, fecha, num_personas, nombre_rest, hora)
            VALUES (:username, :fecha, :num_personas, :nombre_rest, :hora)');

            $this->db->bind(':username', $data['username']);
            $this->db->bind(':fecha', $data['fecha']);
            $this->db->bind(':num_personas', $data['num_personas']);
            $this->db->bind(':nombre_rest', $data['nombre_rest']);
            $this->db->bind(':hora', $data['hora']);
            

            //Ejecuta la query
            if($this->db->execute())
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
    }//funct reserva


    
    public function findReservas($username)
        {
            $this->db->query('SELECT * FROM reservas WHERE username = :username ORDER BY fecha ASC, hora ASC');
            $this->db->bind(':username', $username);



            $reservas = $this->db->resultSet();

            if($this->db->rowCount() == 0)
            {
                return array();
            }
            else 
            {
                return $reservas;
            }
        }//func findReservas
}//clase

