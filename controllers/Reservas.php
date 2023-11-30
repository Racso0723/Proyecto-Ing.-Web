<?php
    ob_start();
    require_once "../models/Reserva.php";
    require_once '../helpers/sesion_helper.php';

class Reservas {
    private $reservaModel;

    public function __construct() 
        {
            $this->reservaModel = new Reserva;
        }
    public  function realizarReserva() 
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //init data
        $data = [
            'username' => trim($_SESSION['username']),
            'fecha' => trim($_POST['fecha']),
            'num_personas' => trim($_POST['num_personas']),
            'hora' => trim($_POST['hora']),
            'nombre_rest' => trim($_POST['nombre_rest']),
        ];

        if (!isset($_SESSION['username'])) {
            // Handle the case where the username is not set in the session
            flash("sesion", "User not authenticated");
            header("Location: ../view/login.php");
            exit();
        }

        if (!$this->isValidTimeFormat($data['hora'])) {
            flash("hora", "Formato de hora inválido");
            header("Location: ../view/Reservas.php");
            exit();
        }
        if($this->validarRangoHorario(($data['hora']) == false))
        {
            flash("horario", "Reserva fuera del horario");
            header("Location: ../view/Reservas.php");
            exit();
        }

        // Validate date input in YYYY-DD-MM format
        if (!$this->isValidDateFormat($data['fecha'])) {
            flash("fecha", "Formato de fecha inválido");
            header("Location: ../view/Reservas.php");
            exit();
        }
        
        if (!$this->validateRest(strtolower($data['nombre_rest'])))
        {
            flash("nombre", "El restaurante colocado no existe...");
            header("Location: ../view/Reservas.php");
            exit();
        }

        if ($this->reservaModel->realizarReserva($data))
        {
            flash('correcto', 'Se ha realizado la reserva con exito'); 
            redirect('../view/Reservas.php');

        }
        else
        {
            flash('reserva', 'Se ha ocurrido un error'); //Funcion para agregar a la lista de reservas por ID
            redirect('../view/Reservas.php');
            exit();
        }
    }
    public function isValidDateFormat($date)
    {
        $pattern = '/^\d{4}-\d{2}-\d{2}$/';
        return preg_match($pattern, $date) === 1;
    }

    public function isValidTimeFormat($time)
    {
        $pattern = '/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/';
        return preg_match($pattern, $time) === 1;
    }
    public function validateRest($restaurante)
    {
        $restaurantesPermitidos = array("mole o mas", "giorgios", "don ming", "global palate", "sabores indigenas", "el bernabeu",
         "kessler galimany", "rincon del cafe", "vegano");
         if (in_array($restaurante, $restaurantesPermitidos))
         {
            return true;
         }
         else
         {
            return false;
         }
    }//Validar Rest

    function validarRangoHorario($hora)
    {
        $horaObj = DateTime::createFromFormat('H:i', $hora);

        if ($horaObj && $horaObj->format('H:i') >= '08:00' && $horaObj->format('H:i') <= '22:00') {
            return true;
        } else {
            return false;
        }
    }

// Ejemplo de uso:
    
    public function logout(){
        unset($_SESSION['usersId']);
        unset($_SESSION['usersName']);
        unset($_SESSION['usersEmail']);
        session_destroy();
        redirect("../view/login.php");
    }
}//clase


 //Obj de la clase
 $init = new Reservas;
    
 //Asegurar que el usuario mande el post

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
     switch($_POST['type'])
     {
         case 'reserva':
             $init->realizarReserva();
     }
 }
