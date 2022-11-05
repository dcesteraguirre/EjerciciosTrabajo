<?php

class App
{

  /*Este constructor decidí usarlo para iniciar la sesion en la pagina web, ya que lo que hace el index principal
  es crear un objeto de esta clase, por lo tanto, el constructor se ejecuta e inicia la sesión.*/

  function __construct()
  {
    session_start();   
  }

  /*Esta función run hace lo mismo que la del ejercicio 17 llamada igual.*/

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();      
  }

  /*Esta función sirve para iniciar sesion en la página web y se llama por defecto cuando entras en la web por primera vez y cuando cierras sesion.
    Si al llamar a esta funcion, tienes la sesion iniciada, te redirecciona directamente al home, si no, cierra la sesión ya abierta y te muestra
    el login de la carpeta views.*/

  public function login() 
  {
    if (isset($_SESSION['name'])) 
    {
      header('Location: ?method=home');
      return;
    }
    else
    {
      setcookie(session_name(),'',time() -7200,'/');
      include('views/login.php');
    }
  }

    /*Esta función se llama al pulsar el botón de login en la pantalla de login, esta codificado de tal manera de que puedas logearte sin contraseña,
    si el formulario envía un POST con un nombre se crea una sesion cuyo nombre y contraseña son los introducidos y también se le asigna una lista vacía para los deseos.
      Si se llega a la función sin haber enviado un POST, el método te devuelve a la función login.*/

  public function auth()
  {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
      return;
    }
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['deseos'] = [];
    header('Location: index.php?method=home');
  }

  /*Esta función controla primeramente que se haya iniciado sesión, si no te devuelve a la función login, luego muestra el archivo home de la carpeta views.*/

  public function home()
  {
    if (!isset($_SESSION['name'])) {
      header('Location: ?method=login');
      return;
    }
    include('views/home.php');
  }

  /*Esta función añade a la lista de deseos asociada a la sesión un deseo nuevo y te lleva a la función home.*/

  public function new()
  {
    $new = $_POST['new'];
    $deseos = $_SESSION['deseos'];
    $deseos[] = $new;
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=home');
  }

  /*Esta función borra un deseo por id de la lista de deseos asociada de la sesión y te lleva a la función home.*/

  public function delete()
  {
    $deseos = $_SESSION['deseos'];
    $id = $_GET['id'];
    unset($deseos[$id]);
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=home');
  }

  /*La función empty vacía la lista de deseos asociada a la sesión, luego ejecuta el métod home.*/

  public function empty()
  {
    $_SESSION['deseos']=[];
    header('Location: index.php?method=home');    
  }

  /*Este método elimina la información de sesión y borra la cookie de la sesion y te lleva a la función login.*/

  public function close()
  {
    session_destroy();
    setcookie(session_name(), '', time() - 42000);
    header('Location: index.php?method=login');
  }
}