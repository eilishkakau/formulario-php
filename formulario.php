<?php

if(isset($_POST['submit']))
{
    //print_r('Nome: ' .$_POST['username']);
   // print_r ('<br>');
   // print_r('Email: ' .$_POST['email']);
   // print_r ('<br>');
   // print_r('Senha: ' .$_POST['senha']);


   include_once('config.php');

   $nome = $_POST['username'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $result = mysqli_query($conexao, "INSERT INTO cliente(nome,email,senha)
   VALUES('$nome','$email','$senha')");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Formulario</title>
</head>
<body>
    <div id="form">
        <form action="formulario.php" method="POST">
            <h2 class="tittle">Cadastrar</h2>

            <label for="username">Nome</label>
            <div class="input"> 
                <img width="24" height="24" src="https://img.icons8.com/material/24/user--v1.png" alt="user--v1"/>
                <input id="username" name="username" placeholder="Username" type="text">
            </div>

            <label for="email">Email</label>
            <div class="input">
               <img width="24" height="24" src="icons8-nova-mensagem-24.png" alt="">
                <input id="email" name="email" placeholder="Email" type="text">
            </div>

            <label for="senha">Senha</label>
            <div class="input">
                <img width="24" height="24" src="icons8-cadeado-24.png" alt="">
                <input id="senha" name="senha" placeholder="Password" type="password">
            </div>

            <div id="submit">
                <input type="submit" name="submit" id="submit">
                </div>
        </form>
    </div>
</body>
</html>
