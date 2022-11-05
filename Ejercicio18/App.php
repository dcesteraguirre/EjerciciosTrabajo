<?php

class App
{

  //Este constructor inicia la sesion cuando introducimos usuario y contraseña//

  function __construct()
  {
    session_start();   
  }

  //recogemos los argumentos mediante este metodo
public function run()
  {
    if (isset($_GET['method'])) {

      $method = $_GET['method'];

    } else {

      $method = 'login';
      
    }
    $this->$method();      
  }

  //la funcion login comprueba si estas inciado de sesion y si es asi vas al vuelta, sino vas al login para logearte


  public function login() 
  {
    if (isset($_SESSION['nombre'])) 
    {
      header('Location: ?method=vuelta');
      return;
    }
    else
    {
      setcookie(session_name(),'',time() -8000,'/');
      include('views/login.php');
    }
  }

    //si se ha colocado algo en el input name se guarda dentro de la variable nombre y la contraseña introducida
    //dentro de la variable contrasegna, sino te redirecciona al metodo login


  public function confirmacion()
  {
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
      $nombre = $_POST['nombre'];
      $contrasegna = $_POST['contrasegna'];
    } else {
      header('Location: ?method=login');
      return;

    }

        $_SESSION['nombre'] = $nombre;
        $_SESSION['contrasegna'] = $contrasegna;
        $_SESSION['deseos'] = [];
        header('Location: index.php?method=vuelta');
  }


//   si se ha iniciado sesion te manda al login de la carpeta views


  public function vuelta()
  {
    if (!isset($_SESSION['nombre'])) {
      header('Location: ?method=login');
      return;
    }
    include('views/home.php');
  }

  //Esta funcion crea un nuevo deseo asociado a tu sesion y te manda de nuevo al home


  public function nuevo()
  {
    $nuevo = $_POST['nuevo'];
    $deseos = $_SESSION['deseos'];
    $deseos[] = $nuevo;
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=vuelta');
  }

//   /esta funcion borra un deseo por id y te redirige al home


  public function borrar()
  {
    $deseos = $_SESSION['deseos'];
    $id = $_GET['id'];
    unset($deseos[$id]);
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=vuelta');
  }


  //vaciamos la lista de deseos y vamos a la funcion vuelta para para que nos ver si tenemos que logear

  public function vaciar()
  {
    $_SESSION['deseos']=[];
    header('Location: index.php?method=vuelta');    
  }


  //Este metodo cierra la sesion destruyendola y realiza el metodo vuelta

  public function destruir()
  {
    session_destroy();
    setcookie(session_name(), '', time() - 500000);
    header('Location: index.php?method=login');
  }
}