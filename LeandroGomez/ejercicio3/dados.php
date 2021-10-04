<?php require_once '../head.php' ?>

<body>
    <?php require_once '../header.php'; 
    
    if(isset($_POST['cantidad'])){
        $cantidad = $_POST['cantidad'];

        if($cantidad <= 3 && $cantidad > 0){
            echo resultadoDeDados($cantidad);
        }
        else
        {
            echo 'La cantidad de dados solicitada excede de nuestro contenido, por favor elija una cantidad menor';
        }
        
    }

    function resultadoDeDados($var){
        if($var == 3){
            $dadoUno = rand(1,6);
            $dadoDos = rand(1,6);
            $dadoTres = rand(1,6);

            $resultado = $dadoUno + $dadoDos + $dadoTres;

            echo "<img src='carasDados/".$dadoUno.".png' alt='' class='w3-image w3-padding-large w3-padding-32 w3-margin-top' width='400'"
            ."<h1> + </h1>"."<img src='carasDados/".$dadoDos.".png' alt='' class='w3-image w3-padding-large w3-padding-32 w3-margin-top' width='400'".
            "<h1> + </h1>"."<img src='carasDados/".$dadoTres.".png' alt='' class='w3-image w3-padding-large w3-padding-32 w3-margin-top' width='400'".
            "<br>"."<h2>La suma de los dados es: ".$resultado." </h2>";

        } 
        else if($var == 2){
            $dadoUno = rand(1,6);
            $dadoDos = rand(1,6);

            $resultado = $dadoUno + $dadoDos;

            echo "<img src='carasDados/".$dadoUno.".png' alt='' class='w3-image w3-padding-large w3-padding-32 w3-margin-top' width='400'"
            ."<h1> + </h1>"."<img src='carasDados/".$dadoDos.".png' alt='' class='w3-image w3-padding-large w3-padding-32 w3-margin-top' width='400'".
            "<br>"."<h2>La suma de los dados es: ".$resultado." </h2>";

        } 
        else if($var == 1){
            $dadoUno = rand(1,6);

            echo "<img src='carasDados/".$dadoUno.".png' alt='' class='w3-image w3-padding-large w3-padding-32 w3-margin-top' width='400'";
        }
        
    }
    ?>


</body>

