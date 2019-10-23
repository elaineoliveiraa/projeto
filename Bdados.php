
<!DOCTYPE html>
<html>
  <head>
    <title>Formulário </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <?php
    include "algumacoisa.php";
    if(isset($_POST["nome"])){
      

      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $assunto = $_POST["assunto"];
      $mensagem = $_POST["mensagem"];

      try{
        $query = "INSERT INTO dados (nome, email, assunto, mensagem) VALUES ('$nome','$email','$assunto','$mensagem')";
        $pdo->exec($query);
        echo "Deu bom!";
      }catch(PDOException $e){
          echo "Deu ruim";
        }
        unset ($pdo);
    }
    ?>
    
     <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

     <h1> Informações</h1>

     <p class="nome">
     <input type="text" name="nome" placeholder="informe seu nome" required="required">
     </p>

     <p class="email">
     <input type="email" name="email" placeholder="informe seu email" required="required">
     </p>

     <p class="assunto">
     <input type="text" name="assunto" placeholder="informe o assunto" required="required">
     </p>

     <p class="mensagem">
     <textarea name="mensagem" placeholder="deixe sua mensagem"></textarea>
     </p>

     <p class="enviar">
     <input type="submit" value="Enviar">
     </p>

     </form>

    </body>
</html>