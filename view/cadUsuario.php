<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form name="cadUsuario" id="cadusuario" action="" method="post">
        Login: <input type="text" class="form-control col-sm-8" name="login" id="login"
        value="<?php echo isset($usuario)?$usuario->getLogin():'' ?>"></br>
        Senha: <input type="password" name="senha1" id="senha1"
        value="<?php echo isset ($usuario)?$usuario->getSenha():'' ?>"></br>
        Confirmação Da Senha<input type="password" name="senha2" id="senha2"><br>
        <select name="permissao" id="permissao">
            <option value="0"></option>
            <option value="A" <?php echo isset($usuario) && $usuario->getPermissao()=='A'?'selected': ''?>>Administrador</option>
            <option value="C" <?php echo isset($usuario) && $usuario->getPermissao()=='C'?'selected': ''?>>Comum</option>
        </select><br><br>
        <input type="submit" name="btnSalvar" id="btnSalvar">
        <input type="hidden" name="id" id="id"
        value="<?php echo isset($usuario)?$usuario->getId():''; ?>"/>
    </form>
</body>
</html>

<?php
if(isset($_POST['btnSalvar'])){
    require_once './controller/UsuarioController.php';
    call_user_func(array('UsuarioController','salvar'));
    header('Location: index.php?page=usuario&action=listar');
}
?>