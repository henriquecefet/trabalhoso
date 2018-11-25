<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script>

    </script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div style="color: #35393B; margin-top: 100px; text-align: center; font-family: HelveticaNeue-Light, sans-serif;">
    <img src="https://cloud.githubusercontent.com/assets/251292/5254757/a08a277c-7981-11e4-9ec0-d49934859400.png">
    <h2>Voil&agrave;! Your nginx container is running!</h2>
    <div style="color: #838789;">
      <p>To edit files, double click the <strong>website_files</strong> folder in Kitematic and edit the <strong>index.html</strong> file.</p>
    </div>
    <div style="color: #838789;">
      <form action="api.php" method="post">
        <p>Número 1:</p> <input type="text" name="numero1" id="numero1"><br>
        <p>Número 2:</p> <input type="text" name="numero2" id="numero2"><br><br>

        <input type="submit" name="somar" id="somar" value="Somar" />
        <input type="submit" name="subtrair" id="subtrair" value="Subtrair" />
        <input type="submit" name="dividir" id="dividir" value="Dividir" /><br>

        <input type="submit" name="multiplicar" id="multiplicar" value="Multiplicar" />
        <input type="submit" name="elevar" id="elevar" value="Elevar" />
        <input type="submit" name="tudo" id="tudo" value="Calcular Tudo" />
      </form>
        <p id="displaytext"></p>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
      <?php
         if (isset($_GET["produto"])&&isset($_GET["potencia"])&&isset($_GET["soma"])&&isset($_GET["sub"])&&isset($_GET["dive"])){
          $produto = $_GET["produto"];
          $potencia = $_GET["potencia"];
          $soma = $_GET["soma"];
          $sub = $_GET["sub"];
          $dive = $_GET["dive"];
          echo "<p> O produto é $produto </p>";
          echo "<p> A potencia é $potencia </p>";
          echo "<p> A soma é $soma </p>";
          echo "<p> A subtração é $sub </p>";
          echo "<p> A divisão é $dive </p>";
        }
        else{
          if (isset($_GET["produto"])){
            $produto = $_GET["produto"];
            echo "<p> O produto é $produto </p>";
          }
          if (isset($_GET["potencia"])){
            $potencia = $_GET["potencia"];
            echo "<p> A potencia é $potencia </p>";
          }
          if (isset($_GET["soma"])){
            $soma = $_GET["soma"];
            echo "<p> A soma é $soma </p>";
          }
          if (isset($_GET["sub"])){
            $sub = $_GET["sub"];
            echo "<p> A subtração é $sub </p>";
          }
          if (isset($_GET["dive"])){
            $dive = $_GET["dive"];
            echo "<p> A divisão é $dive </p>";
          }
        }
       ?>
     </div>
   </div>
 </body>

</html>
