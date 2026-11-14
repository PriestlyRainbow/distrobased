<?php
   
   session_start();

   
   function validar_login() {
        
   if (login == true){
    // deve retornar se o login foi bem susedido

   }
    
   //qualquer coisa que a função retornar que não seja true ele deve impedir o login imediatamente 
   else {

   }
   
   }  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style = "text-align: center;">Fazer cadastro/login</h1>
    <form method="post" action="conta.php">
        Login: <input type="text" name="login"><br>
        Senha: <input type="text" name="senha"><br>
        <input type="submit">
    </form>
</body>
</html>