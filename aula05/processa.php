<?php
    $email= $_POST['email'];
    $senha= $_POST['senha'];

    if($email == 'heloisa@email.com' && $senha == '1234'){
//pagina privada
   $nome = "Heloisa";
   header('Location: privada.php?nome='.$nome);
}else{
    //pagina de erro
    header('Location: erro.php');
  }
?>