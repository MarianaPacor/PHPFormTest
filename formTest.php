<?php 
    if(isset($_POST['enviar'])) :
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        if (mail('marianapacor@gmail', $assunto, $mensagem, 'From: ' . $email)) :
            $aviso = "E-mail enviado com sucesso.";
        else:
            $aviso = "E-mail falhou.";
        endif;
    endif;
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(isset($aviso)): echo $aviso; endif; ?>
    <form action="formTest.php" method="POST">
        <p><label for="">Nome:</label><input type="text" name="nome" id=""></p> 
        <p><label for="">E-mail:</label><input type="text" name="email" id=""></p> 
        <p><label for="">Assunto:</label><input type="text" name="assunto" id=""></p> 
        <p><label for="">Mensagem:</label><textarea name="mensagem" id="" cols="30" rows="10"></textarea></p> 
        <p><input type="submit" name="enviar" value="Enviar"></p> 
    </form>
</body>
</html>