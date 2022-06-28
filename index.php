<!DOCTYPE html>
<html lang="pt-br">
<head>
          <!-Bootstrap->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <!-Ionic Framewrok->
  <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
  <link rel="stylesheet" href="css/main.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AnimeX</title>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-md">
      <div class="toolbar-icons">
        <ion-icon name="menu-outline" id="menu" aria-label="Menu Icon"></ion-icon>
          <div class="submenu rounded-pill bg-light" hidden>
            <ion-icon name="heart" class="menu_icons" id="heart"></ion-icon>
            <span class="icons_spans">Favoritos</span>
            <br>
            <ion-icon name="radio" id="stream"></ion-icon>
            <span>Ao vivo !</span>
            <br>
            <ion-icon name="notifications" id="notifications"></ion-icon>
            <span>Notificações</span>
            <ion-icon name="image" id="image"></ion-icon>
            <span>Plano de Fundo</span>
            <br>
            <br>
            <ion-icon name="eye" id="eye"></ion-icon>
            <span>Historico</span>
            <br>
            <ion-icon name="cog" id="cog"></ion-icon>
            <span>Configurações</span>
          </div>

          <span>Catálogo</span>
          <div class="container-sm bg-dark"></div>
      </div>
    </div>
</nav>
<script src="js/script.js"></script>
</body>
</html>
