<?php

namespace App;

/* inicio de sesion para poder traspasar variables entre paginas */
session_start();

/*incluir los controlleres */
use App\Controller\AppController;
use App\Controller\UsuarioController;
use App\Controller\NoticiaController;

/*Asignar sesion alas rutas a las carpetas public y home */
// $_SESSION['public']= '/new-cms/public/';

$_SESSION['public']= '/';
$_SESSION['home']= $_SESSION['public'].'/index.php';

/* Llamar a la funcion de autocarga  de clases(controlleres, modelos, vistas)*/
spl_autoload_register('App\autoload');

function autoload($clase,$dir=null){
    if(is_null($dir)){
        $dirname=str_replace('\public','', dirname(__FILE__));
        $dir=realpath($dirname);
    }

    //escaneo de busca recursiva
    foreach (scandir($dir) as $file){
        if(is_dir($dir."/".$file) AND substr($file,0,1) !=='.'){
            autoload($clase, $dir."/".$file);
        }
        else if(is_file($dir."/".$file) AND $file == substr(strrchr($clase, "\\"), 1).".php"){
            require($dir."/".$file);
        }
    }
}

//invocar controller en cada ruta
function controller($nombre=null){
    switch($nombre){
        default : 
            // echo "llama a Appcontroler";
            return new AppController;
        case "noticias" : return new NoticiaController;
        case "usuarios" : return new UsuarioController;
    }
}

//rutas

$ruta=str_replace($_SESSION['home'],'',$_SERVER['REQUEST_URI']);

//encaminar en cada ruta al controlodar y accion correspondiewnte
switch($ruta){
    //front-end
    case "":
    case "/":
        echo "pasa por aqui";
        controller()->index();
        echo "entra en la app";
        break;
    case "acerca-de":
        controller()->acercade();
        break;
    case "noticias":
        controller()->noticias();
        break;
    case (strpos($ruta,"noticia/")===0):
        controller()->noticia(str_replace("noticia/","",$ruta));
        break;
    //back-end
    case "admin":
    case "admin/entrar":
        controller("usuarios")->entrar();
        break;
    case "admin/salir":
        controller("usuarios")->salir();
        break;
    //usuarios urls
    case "admin/usuarios":
        controller("usuarios")->index();
        break;
    case "admin/crear":
        controller("usuarios")->crear();
        break;
    case (strpos($ruta,"admin/usuarios/editar/")===0):
        controller("usuarios")->editar(str_replace("admin/usuarios/editar/","",$ruta));
        break;
    case (strpos($ruta,"admin/usuarios/activar/")===0):
        controller("usuarios")->activar(str_replace("admin/usuarios/activar/","",$ruta));
        break;
    case (strpos($ruta,"admin/usuarios/borrar/")===0):
        controller("usuarios")->borrar(str_replace("admin/usuarios/borrar/","",$ruta));
        break;
        //noticias urls
    case "admin/noticias":
        contorlador("noticias")->index();
        break;
    case "admin/noticias/crear":
        contorlador("noticias")->crear();
        break;
    case (strpos($ruta,"admin/noticias/activar/")===0):
        controller("noticias")->activar(str_replace("admin/noticias/activar/","",$ruta));
        break;
    case (strpos($ruta,"admin/noticias/editar/")===0):
        controller("noticias")->editar(str_replace("admin/noticias/editar/","",$ruta));
        break;
    case (strpos($ruta,"admin/noticias/borrar/")===0):
        controller("noticias")->borrar(str_replace("admin/noticias/borrar/","",$ruta));
        break;
    case (strpos($ruta,"admin/noticias/home/")===0):
        controller("noticias")->home(str_replace("admin/noticias/home/","",$ruta));
        break;
    case (strpos($ruta,"contacto/")===0):

        break;
    //resto de rutas estaticas
    default:
        controller()->index();
    
}

?>