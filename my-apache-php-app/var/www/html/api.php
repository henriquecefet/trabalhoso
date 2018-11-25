<?php
 if (isset($_POST["multiplicar"])){
   $numero1 = $_POST['numero1'];
   $numero2 = $_POST['numero2'];
   $produto = multiplica($numero1, $numero2);
   header("Location: index.php?produto=$produto");
 }
 if (isset($_POST["elevar"])){
   $numero1 = $_POST['numero1'];
   $numero2 = $_POST['numero2'];
   $potencia = eleva($numero1, $numero2);
   header("Location: index.php?potencia=$potencia");
 }
 if (isset($_POST["somar"])){
   $numero1 = $_POST['numero1'];
   $numero2 = $_POST['numero2'];
   $soma = soma($numero1, $numero2);
   header("Location: index.php?soma=$soma");
 }
 if (isset($_POST["subtrair"])){
   $numero1 = $_POST['numero1'];
   $numero2 = $_POST['numero2'];
   $sub = subtrai($numero1, $numero2);
   header("Location: index.php?sub=$sub");
 }
 if (isset($_POST["dividir"])){
   $numero1 = $_POST['numero1'];
   $numero2 = $_POST['numero2'];
   $dive = divide($numero1, $numero2);
   header("Location: index.php?dive=$dive");
 }
 if (isset($_POST["tudo"])){
   $numero1 = $_POST['numero1'];
   $numero2 = $_POST['numero2'];
   $produto = multiplica($numero1, $numero2);
   $potencia = eleva($numero1, $numero2);
   $soma = soma($numero1, $numero2);
   $sub = subtrai($numero1, $numero2);
   $dive = divide($numero1, $numero2);
   header("Location: index.php?produto=$produto&potencia=$potencia&soma=$soma&sub=$sub&dive=$dive");
 }
function multiplica($n1, $n2){
  return $n1 * $n2;
}
function eleva($n1, $n2){
  $resultado = 1;
  for($i = 0; $i<$n2; $i++){
    $resultado *= $n1;
  }
  return $resultado;
}
function soma($n1, $n2){
  return $n1 + $n2;
}
function subtrai($n1, $n2){
  return $n1 - $n2;
}
function divide($n1, $n2){
  return $n1 / $n2;
}
?>
