<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>La Marelle</title>

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="icon" href="img/favicon.png" />

  <link rel='stylesheet' type='text/css' media='screen' href='css/all.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/spectre.min.css'>
  <link rel="stylesheet" type='text/css' media='screen' href="css/spectre-exp.min.css">
  <link rel="stylesheet" type='text/css' media='screen' href="css/spectre-icons.min.css">
  <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>

  <script src='js/all.js'></script>
  <script src='js/jquery-3.4.1.min.js'></script>
  <script src='js/main.js'></script>
  <script src='js/parallaxe.js'></script>
</head>

<body>

  <div id="bodyContainer">

    <div id="appContainer">

      <div id="leftMenuContainer">
        <nav>
          <div id="menuIconContainer">
            <a href="#" id="menuToggle"><img src="img/menu_burger.svg" width="32px"></a>
          </div>

          <!--menu container-->
          <div id="mainMenu">
            <div id="menuList">
              <div class="accordion">
                <input onclick="document.getElementById('listSound').play();" type="checkbox" id="accordion-1"
                  name="accordion-checkbox" hidden>
                <label class="accordion-header" for="accordion-1">
                  Titre 1
                  <i class="icon icon-arrow-right mr-1"></i>
                </label>
                <div class="accordion-body">
                  <a href="#">Sous-titre</a>
                </div>
              </div>
              <div class="accordion">
                <input onclick="document.getElementById('listSound').play();" type="checkbox" id="accordion-2"
                  name="accordion-checkbox" hidden>
                <label class="accordion-header" for="accordion-2">
                  Titre 2
                  <i class="icon icon-arrow-right mr-1"></i>
                </label>
                <div class="accordion-body">
                  <a href="#">Sous-titre</a>
                </div>
              </div>
              <div class="accordion">
                <input onclick="document.getElementById('listSound').play();" type="checkbox" id="accordion-3"
                  name="accordion-checkbox" hidden>
                <label class="accordion-header" for="accordion-3">
                  Titre 3
                  <i class="icon icon-arrow-right mr-1"></i>
                </label>
                <div class="accordion-body">
                  <a href="#">Sous-titre</a>
                </div>
              </div>
            </div>

            <div id="menuMentions">
              <div class="textContent">
                <h3>La marelle : lamarelle-voix.fr</h3>
                <p>Créé dans le cadre du Pôle de Ressources pour l’Education Artistique et Culturelle (PREAC Musique et
                  voix de Bourgogne) avec l’aide de financements de la DRAC Bourgogne Franche-Comté, du réseau Canopé et
                  du Conseil régional de Bourgogne Franche-Comté, ce site a pour objectif de faciliter la création et
                  l’animation de chœurs d’enfants et de jeunes. </p>
                <p>Vous y trouverez des vidéos, des fiches pédagogiques, des sites de références, des bibliographies…
                  sur tous les sujets utiles à la direction d’un chœur d’enfants ou de jeunes : la voix de l’enfant, les
                  jeux vocaux, les répertoires, les aides et dispositifs.</p>
                <p>Interactif et ludique, vous pourrez parcourir la marelle en fonction de vos envies et y revenir
                  chaque fois que de besoin. </p>
              </div>
              <div class="logosContent">
                <img src="img/logo_region.svg" width="64px">
                <img src="img/logo_ministere_culture_noir.png" width="64px">
              </div>
            </div>
          </div>
        </nav>

      </div>
      <div id="backgroundContainer">
        <div id="layer1container">
          <div id="layer2container">
            <div id="layer3container">
              <div id="gameContainer" class="parallaxe">
                <div id="marelleContainer">
                <?php include 'components/marelle-svg.php';?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Modals-->
      <?php include 'components/modals/modal1.php';?>
      <?php include 'components/modals/modal2.php';?>
      <?php include 'components/modals/modal3.php';?>
      <?php include 'components/modals/modal4.php';?>
      <?php include 'components/modals/modal5.php';?>
      <?php include 'components/modals/modal6.php';?>
      <?php include 'components/modals/modal7.php';?>
      <?php include 'components/modals/modal8.php';?>

      <!-- AUDIO -->
      <audio id="beepSound">
        <source src="sounds/GUI_Select_29.wav" type="audio/wav">
      </audio>

      <audio id="closeSound">
        <source src="sounds/eraser-b.wav" type="audio/wav">
      </audio>

      <audio id="listSound">
        <source src="sounds/zipsound-b.wav" type="audio/wav">
      </audio>

  <footer>
    <div id="mobileMentions">
      <div class="textContent">
        <h3>La marelle : lamarelle-voix.fr</h3>
        <p>Créé dans le cadre du Pôle de Ressources pour l’Education Artistique et Culturelle (PREAC Musique et voix de
          Bourgogne) avec l’aide de financements de la DRAC Bourgogne Franche-Comté, du réseau Canopé et du Conseil
          régional de Bourgogne Franche-Comté, ce site a pour objectif de faciliter la création et l’animation de chœurs
          d’enfants et de jeunes. </p>
        <p>Vous y trouverez des vidéos, des fiches pédagogiques, des sites de références, des bibliographies… sur tous
          les sujets utiles à la direction d’un chœur d’enfants ou de jeunes : la voix de l’enfant, les jeux vocaux, les
          répertoires, les aides et dispositifs.</p>
        <p>Interactif et ludique, vous pourrez parcourir la marelle en fonction de vos envies et y revenir chaque fois
          que de besoin. </p>
      </div>
      <div class="logosContent">
        <img src="img/logo_region.svg" width="64px">
        <img src="img/logo_ministere_culture_noir.png" width="64px">
      </div>
    </div>
  </footer>

</body>

</html>