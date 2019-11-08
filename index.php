<?php

$rotas = key($_GET) ? key($_GET) : 'posts';    
// $url = isset($_GET('url')) ? $_GET['url'] : "home";

switch($rotas){
    case "posts":
        include "controllers/PostController.php";
        $controller = new PostController();
        $controller->acao($rotas);
    break;
    case "formulario-post":
        include "controllers/PostController.php";
        $controller = new PostController();
        $controller->acao($rotas);
    break;
    case "cadastrar-post":
        include "controllers/PostController.php";
        $controller = new PostController();
        $controller->acao($rotas);
    break;
    
}

?>