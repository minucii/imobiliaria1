<?php

require_once 'controller/UsuarioController.php';
require_once 'controller/ImovelController.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Imobiliaria</title>
  </head>
  <body>
<?php
if(isset($_GET["action"]) && isset($_GET["page"]) && $_GET["page"] == "usuario"){
    if($_GET["action"] == "editar"){
        $usuario = call_user_func(array("UsuarioController","editar"), $_GET["id"]);
        require_once 'view/cadUsuario.php';
    }
    if($_GET["action"] == "listar"){
        require_once 'view/listUsuario.php';
    }
    if($_GET["action"] == "excluir"){
        $usuario = call_user_func(array("UsuarioController","excluir"), $_GET["id"]);
        require_once 'view/listUsuario.php';
    }
}else{
    require_once 'view/cadUsuario.php';
}
?>
<?php
if(isset($_GET["action"]) && isset($_GET["page"]) && $_GET["page"] == "imovel"){
    if($_GET["action"] == "editar"){
        $imovel = call_user_func(array("ImovelController","editar"), $_GET["id"]);
        require_once 'view/cadImovel.php';
    }
    if($_GET["action"] == "listar"){
        require_once 'view/listImovel.php';
    }
    if($_GET["action"] == "excluir"){
        $imovel = call_user_func(array("ImovelController","excluir"), $_GET["id"]);
        require_once 'view/listImovel.php';
    }
}else{
    require_once 'view/cadImovel.php'; 
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>