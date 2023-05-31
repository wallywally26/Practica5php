index.php
<?php
session_start();
?>
<html>
  <body>
    <h1 style="color:red;">¡Pagina de inicio!</h1>
    <p>
    <?php
      if (isset($_SESSION['cont'])){
        $_SESSION['cont']++;
      } else {
        $_SESSION['cont'] = 1;
      }
      if($_SESSION['cont']== 1){
        echo "Esta es tu primera visita a estas páginas";
      } else {
        echo "Has visitado las páginas ".$_SESSION['cont']." veces";
      }
    ?>
    </p>
    <br>
    <a href='pg2.php'>Dirigete a la página 2</a>
  </body>
</html>