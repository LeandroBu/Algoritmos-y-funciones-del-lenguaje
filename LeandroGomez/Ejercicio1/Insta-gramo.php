<?php require_once '../head.php' ?>
<body>
    
    <?php require_once '../header.php'; ?>

    <div class="w3-content w3-padding-large w3-margin-top" id="portfolio">

    <div class="w3-content w3-center">

    </div>
    <?php
    $imgs = dir("imagenes");
    while (($img = $imgs->read()) !== false){
        if (preg_match('/jpg/', $img) || preg_match('/jpeg/', $img) || preg_match('/gif/', $img) || preg_match('/png/', $img)){
            echo "<img src='imagenes/$img' alt='' class='w3-image w3-padding-large w3-padding-32 w3-margin-top' width='800' height='500'>";
        }
    }
    ?>
    
    </div> 

<div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
  <h3 class="w3-center">Publicar nueva imagen</h3>
  <hr>
  <form action="cargarImagen.php"  ENCTYPE="multipart/form-data" method="post">
  <div class="w3-row">
    <div class="w3-col w3-container s3">
      <input class="w3-input w3-border" type="text" name="Nombre" placeholder="Nombre">
    </div>
    <div class="w3-col w3-container s6">
    <input type="file" name="archivo" id="fileToUpload" class="w3-input w3-border" value="archivo">
    </div>
    <div class="w3-col w3-container s3">  
    <button type="submit" class="w3-button w3-blue w3-hover-purple">Publicar</button>
    </div>
    </div>
  </form><br>

</div>

</div>

</body>
</html>