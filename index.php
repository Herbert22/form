<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        <?php
        // Se existir a variavel, vai imprimir o valor e depois destrui-la.
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
        <form method="post" action="processa.php">
            <label for="">Nome:  </label>
            <input type="text" name="nome" placeholder="Digite seu completo"><br><br>
            
            <label for="">E-mail: </label>
            <input type="email" name="email" placeholder="Digite seu melhor e-mail"><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>