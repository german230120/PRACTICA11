<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 11 calculadora principios</title>
    <link rel="stylesheet" href="css/style.css">
    <body background="https://www.1zoom.me/big2/633/296036-alexfas01.jpg"style=background-size: cover;>
    
    
</head>
<body class="bodyPagina">

    <h1>VARIABLES</h1>
    <article>
        <aside>
	
		<h1>Cliente</h1>
     <img src= "img/j.jpg" width="480" height="240">
     

</aside>

</article>

     <?php  
        $nombre = 'Jefferson Gutierritoz';
        $edad = 34;
        $beca = 7545.50;
        $estatus = true;
        
        
        echo "<h3>Datos Economicos del Cliente<br></h3>";
        echo $nombre. '</br>';
        echo $edad. '</br>';
        echo $beca. '</br>';
        echo $estatus. '</br>';
        echo $nombre.' Con una edad de:'.$edad.' años , este muchachon gana  la cantidad de:'.$beca.'</br>';
        
    ?>
    <h1>Operadores aritmeticos</h1>
    <?php 
        $numero1 = 5;
        $numero2 = 4;
        $numero3 = 3;
        $numero4 = 10;
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicasion = $numero3 * $numero3;
        $division = $numero4/2;
        echo 'a)+Suma varios numeros: '. $suma.'</br>';
        echo 'b)-Resta varios numeros: '. $resta.'</br>';
        echo 'c)*Realiza una multiplicacion: '. $multiplicasion.'</br>';
        echo 'd)*Realiza una divicion: '. $division.'</br>';
        echo 'e)devuelve el residuo de una division: '. $numero1%$numero2. '</br>';
        echo 'f)incremento de suma es = '. $suma++.'</br>';
        echo 'g)decremento de suma es = '. $suma--.'</br>';

        ?>
      
      <aside>


      
</body>
</html>
   