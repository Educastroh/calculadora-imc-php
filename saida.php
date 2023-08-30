<?php
    $nome = $_POST["nome"];
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $sexo = $_POST["sexo"];
    $imc = $peso/($altura * $altura);
    echo "Nome: $nome"; echo "<br>";
    echo "Altura: $altura"; echo "<br>";
    echo "Seu peso: $peso"; echo "<br>";
    echo "Sexo: $sexo"; echo "<br>";
    echo "IMC: $imc"; echo "<br>";
    //calculadora masculina
    if ($sexo = "Homem"){
      if ($imc < 18.5){
         echo "Você está com magreza."; echo "<br>";echo "Seu Imc é $imc";
      }
      elseif ($imc >= 18.5 and $imc <=24.5){
         echo "Você com peso ideal.";
      }
      elseif ($imc >=25 and $imc <29.9){
         echo "Você está com sobrepeso.";
      }
      elseif($imc >=30 and $imc <= 34.9){
         echo "Você está com obesidade grau I.";
      }
      elseif($imc >=35 and $imc <=39.9){
         echo "Você está com obesidade grau II.";
      }
      elseif($imc >=40){
         echo "Você está com obesidade grau III.";
      }
     //Calculadora feminia 
    }
    else{
      if ($sexo = "Mulher"){
         if($imc < 19.1){
            echo "Você está abaixo do peso";
         }
         elseif($imc >=19.1 and $imc <=25.8){
            echo "Você está com peso normal.";
         }
         elseif($imc >25.8 and $imc <=27.3){
            echo "Você está com sobrepeso.";
         }
         elseif($imc >27.3 and $imc >= 32.3){
            echo "Você está com obesidade grau I.";
         }
         elseif($imc > 32.3){
            echo "Você está com obesidade grau II.";
         }
      }
   }
?>