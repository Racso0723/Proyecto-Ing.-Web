<?php
    require_once '../models/User.php';
    require_once '../helpers/sesion_helper.php';
    
    
    class Users {
        private $userModel;


        public function __construct() 
        {
            $this->userModel = new User;
        }
        public  function register() 
        {
            //Procesa el FORMS

            //Limpia la data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'username' => trim($_POST['username']),
                'nombre' => trim($_POST['nombre']),
                'apellido' => trim($_POST['apellido']),
                'edad' => trim($_POST['edad']),
                'correo' => trim($_POST['correo']),
                'pass' => trim($_POST['pass'])
            ];

            //Validar nombre User
            if(!preg_match("/^[a-zA-Z0-9]*$/", $data['username']))
            {
                flash('register', "Nombre de usuario Inválido");
                redirect("../view/singup.php");
            }//if nombre user

            //Validar correo
            if(!filter_var($data['correo'], FILTER_VALIDATE_EMAIL))
            {
                flash('register', "Correo Inválido");
                redirect("../view/singup.php");
            }//if correo

            //Validar fortaleza de la contraseña
            if(strlen($data['pass']) < 6)
            {
                flash("register", "Contraseña inválida");
                redirect("../view/singup.php");
            }//if contraseña


            //Buscar usuario con mismo correo o username
            if($this->userModel->findUserByEmailorID($data['correo'], $data['username']))
            {
                flash('register', 'ID de usuario repetido o correo ya utilizado en otra cuenta');
                redirect('../view/singup.php');
            }

            //CHECKPOINT -> en caso de llegar aqui no hay ningun error en la entrada, hacer hash a las password
            $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);

            //Registrar al user
            if($this->userModel->register($data))
            {
                redirect("../view/login.php");
            }
            else
            {
                die('Algun error ha ocurrido...');
            }
        }//funct Register

        public function login() 
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data=[
                'username'=> trim($_POST['username']),
                'pass'=> trim($_POST['pass'])
            ];

            if(empty($data['username']) || empty($data['pass'])) {
                flash("login", "Por favor rellene los campos faltantes"); //Asignar msg de error
                header("Location: ../view/login.php");  
                exit();
            }
            //Revisar el usuarioID o correo
            if($this->userModel->findUserByEmailorID($data['username'], $data['username']))
            {
                $loggedUser = $this->userModel->login($data['username'], $data['pass']);
                if($loggedUser)
                {
                    $this->createUserSession($loggedUser);
                }//logged
                else
                {
                    flash("login", "Contraseña incorrecta"); //Asignar msg de error
                    redirect("../view/login.php");
                }//1° else
            
            }
            else
            {
                flash("login", "Correo o usuario no registrado"); //Asignar msg de error
                redirect("../view/login.php");
            }//2° else
        }//func login

        public function createUserSession($user)
        {
            $_SESSION['username'] = $user->username;
            $_SESSION['correo'] = $user->correo;
            redirect('../view/InicialPrueba.php');
        }
        public function logout(){
            unset($_SESSION['username']);
            unset($_SESSION['correo']);
            session_destroy();
            redirect("../view/login.php");
        }
    }

    //Obj de la clase
    $init = new Users;
    
    //Asegurar que el usuario mande el post

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        switch($_POST['type'])
        {
            case 'register':
                $init->register();
                break;
            case 'login':
                $init->login();
                break;
            default: 
            redirect('../view/login.php');       
        }
    }
    else
    {
        switch($_GET['q']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../view/login.php");
        }
    }