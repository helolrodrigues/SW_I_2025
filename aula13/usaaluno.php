<?php
  include_once 'Aluno.class.php';



  $Heloisa = new Aluno ("Heloisa",10, 7);

  $Nota1 = $Heloisa ->getNota1();
  $Nota2 = $Heloisa ->getNota2();
    //echo $Nota1;
echo "NOME:".$Heloisa->getNome();
echo "<br>";
echo "MÉDIA:".$Heloisa->CalcularaMedia($Nota1,$Nota2);
echo "<br>";
echo  "SITUAÇÃO:".  $VerificarSituacao = $Heloisa->VerificarSituacao($Nota1,$Nota2);
echo "<br>";
?>