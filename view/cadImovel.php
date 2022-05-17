<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imóvel</title>
</head>
<body>
    <form name="cadImovel" id="cadImovel" action="" method="post">
        Descricao: <input type="text" name="descricao" id="descricao"
        value="<?php echo isset($imovel)?$imovel->getDescricao():'' ?>"></br>
        Foto: <input type="text" name="foto" id="foto"
        value="<?php echo isset($imovel)?$imovel->getFoto():'' ?>"></br>
        Valor: <input type="number" name="valor" id="valor"
        value="<?php echo isset($imovel)?$imovel->getValor():'' ?>"></br>
        Tipo:
        <select name="tipo" id="tipo">
            <option value="0"></option>
            <option value="C" <?php echo isset($imovel) && $imovel->getTipo()=='C'?'selected': ''?>>Casa</option>
            <option value="A" <?php echo isset($imovel) && $imovel->getTipo()=='A'?'selected': ''?>>Apartamento</option>
            <option value="T" <?php echo isset($imovel) && $imovel->getTipo()=='T'?'selected': ''?>>Terreno</option>
        </select></br></br>
        <input type="submit" name="btnSalvar2" id="btnSalvar2">
        <input type="hidden" name="id" id="id"
        value="<?php echo isset($imovel)?$imovel->getId():''; ?>"/>
    </form>

<?php
if(isset($_POST['btnSalvar2'])){
    require_once './controller/ImovelController.php';
    call_user_func(array('ImovelController','salvar'));
    header('Location: index.php?page=imovel&action=listar');
}
?>
</body>
</html>