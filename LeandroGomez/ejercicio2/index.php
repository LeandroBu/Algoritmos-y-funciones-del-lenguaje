<?php require_once '../head.php' ?>
<body>
    
    <?php require_once '../header.php'; ?>

    <?php
    //opendir : abre una carpeta y devuelve un bool
        if($dir = opendir("imagenes/")){
            //bucle para leer archivo y guardar su nombre y devuelve un bool
            while($archivo = readdir($dir)){
                if($archivo != '.' && $archivo != '..'){
                    echo "<a href= 'imagenes/".$archivo."' target='_blank'>".$archivo."</a>";
                }
            }
        }
    ?>
    </form>

</body>
</hmtl>