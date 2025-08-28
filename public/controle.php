<?php
$mensagem = "";
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    //$mensagem = "Olá ";
    if($_POST['periodo'] == 'm'){
        $mensagem = 'Bom dia ';

    } else if($_POST['periodo'] == 't'){
        $mensagem = 'Boa Tarde ';

    } else{
        $mensagem = 'Boa Noite ';
    }
     
    $mensagem .= $_POST['nome'];
} else {
    $mensagem = "Digite seu nome";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Estrutura de Controle</title>
</head>
<body>
    <form action="controle.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome"/>
        <select name="periodo">
            <option value= "m">Manha</option>
             <option value= "t">Tarde</option>
             <option value= "n">Noite</option>            
        </select>
        <button type="submit">Enviar</button>
    </form>
    <p> <?= $mensagem ?></p>
</body>
</html>