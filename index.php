<!DOCTYPE html>
<html>
<header></header>
 <body>
    <!-- Isso e um comentario -->
<?php
/*comentario*/
echo "Meu primeiro script em PHP2!";
echo "<br>";
var_dump (3.14);
echo "<br>";
var_dump ("Maria");
echo "<br>";

?>

<?php 
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte é:  <br>";
echo $numero. "<br>";


?>
<?php>
    $valor = 18;{
        echo "Ö valor e 18";
    }
    elseif ($valor >= 10){
        echo "O valor é maior ou igual 10";
    }
    else {
        echo "O valor é menor 10";
    }
?>


</body>
</html>