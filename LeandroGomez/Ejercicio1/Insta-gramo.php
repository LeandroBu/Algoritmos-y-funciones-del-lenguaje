<?php require_once '../head.php' ?>
<body>
    
    <?php require_once '../header.php'; ?>

    <div class="w3-content w3-padding-large w3-margin-top" id="portfolio">

    <div class="w3-content w3-center">
    
    

    <div class="w3-card">
    <img src="imagenes/AnthonyKiedis.jpg" alt="rhcp" class="w3-image w3-padding-large w3-padding-32 w3-margin-top" width="800" height="500">
    <div class="w3-container w3-center">
        <h5>Ilustracion de Anthony Kiedis</h5>
        <p class="w3-sans-serif">Hecha en ilustrator por <a href="https://www.instagram.com/bubook11/">BuBook</a></p>
    </div>
    </div>
    <div class="w3-card">
    <img src="imagenes/Goku.jpg" alt="Kakarotto" class="w3-image w3-padding-large w3-padding-32 w3-margin-top" width="800" height="500">
    <div class="w3-container w3-center">
        <h5>Ilustracion de Goku</h5>
        <p class="w3-sans-serif">Hecha en ilustrator por <a href="https://www.instagram.com/bubook11/">BuBook</a></p>
    </div>
    </div>
    <div class="w3-card">
    <img src="imagenes/Terminator.jpg" alt="Arnold" class="w3-image w3-padding-large w3-padding-32 w3-margin-top" width="800" height="500">
    <div class="w3-container w3-center">
        <h5>Ilustracion de Terminator</h5>
        <p class="w3-sans-serif">Hecha en ilustrator por <a href="https://www.instagram.com/bubook11/">BuBook</a></p>
    </div>
    </div>
    </div>

<div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
  <h3 class="w3-center">Publicar nueva imagen</h3>
  <hr>
  <form action="<?php $_SERVER['PHP_SELF']?>"  ENCTYPE="multipart/form-data" method="post">
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