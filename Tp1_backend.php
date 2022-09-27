<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $saludo = "HOLA MUNDO";
    echo $saludo;
    ?>
    <br>
    <hr>
    <?php
    $caracteres = "HOLA MUNDO";
    echo $caracteres;
    ?>
    <br>
    <hr>
    <?php
    $numeroA= "10";
    $numeroB= "2";
    $total= $numeroA + $numeroB;
    echo $total;
    ?>
    <br>
    <hr>
    <?php
    $total= $numeroA - $numeroB;
    echo $total;
    ?>
    <br>
    <hr>
    <?php
    $total= $numeroA / $numeroB;
    echo $total;
    ?>
    <br>
    <hr>
    <?php
    $total= $numeroA % $numeroB;
    echo $total;
    ?>
    <br>
    <hr>
    <?php
    $gradocelsius= "20º";
    $gradofahrenheit= "(gradocelsius*1,8) + 32º";
    echo $gradofahrenheit;
    ?>
    <br>
    <hr>
    <?php
    $baserectanglo= "10";
    $alturarectangulo= "7";
    $arearectangulo= $baserectanglo * $alturarectangulo;
    echo $arearectangulo= $baserectanglo * $alturarectangulo;
    ?>
    <br>
    <hr>
    <?php
    $perimetrorectangulo= $baserectanglo+$baserectanglo*$alturarectangulo*$alturarectangulo;
    echo $perimetrorectangulo;
    ?>
    <br>
    <hr>
    <?php
    $radiocirculo= "30";
    $pi= "3.1416";
    $areacirculo= "$pi * ($radiocirculo*2)";
    echo $areacirculo;
    ?>
    <br>
    <hr>
    <?php
    $radiocirculo= "30";
    $pi= "3.1416";
    $perimetrocirculo= "(2 * $pi) * ($radiocirculo)";
    echo $perimetrocirculo;
    ?>
  </body>
</html>
