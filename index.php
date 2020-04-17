<?php 
include_once 'components/connection.php';
include_once 'components/imports/allCase.php';

$case = new AllContenu;
$cases = $case->fetch_all();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="description" content="Créé dans le cadre du Pôle de Ressources pour l’Education Artistique et Culturelle (PREAC Musique et voix de Bourgogne) avec l’aide de financements de la DRAC Bourgogne Franche-Comté, du réseau Canopé et du Conseil régional de Bourgogne Franche-Comté, ce site a pour objectif de faciliter la création et l’animation de chœurs d’enfants et de jeunes." />
  <meta property="og:url"                content="https://lamarelle-voix.fr" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="La Marelle Voix" />
  <meta property="og:description"        content="Créé dans le cadre du Pôle de Ressources pour l’Education Artistique et Culturelle (PREAC Musique et voix de Bourgogne) avec l’aide de financements de la DRAC Bourgogne Franche-Comté, du réseau Canopé et du Conseil régional de Bourgogne Franche-Comté, ce site a pour objectif de faciliter la création et l’animation de chœurs d’enfants et de jeunes." />
  <meta property="og:image"              content="https://lamarelle-voix.fr/img/og_image.png" />
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

  <script>
    $(document).ready(function () {
      $('.ql-editor').prop('contenteditable', false);
      $('.ql-clipboard').prop('contenteditable', false);

      $('.cls-10, .cls-10-5').hover(function () {
        $('#modal1-dropdown').addClass('visible');
      });
      $('.cls-10, .cls-10-5').mouseleave(function () {
        $('#modal1-dropdown').removeClass('visible');
      });
      $('.cls-9, .cls-9-5').hover(function () {
        $('#modal2-dropdown').addClass('visible');
      });
      $('.cls-9, .cls-9-5').mouseleave(function () {
        $('#modal2-dropdown').removeClass('visible');
      });
      $('.cls-8, .cls-8-5').hover(function () {
        $('#modal3-dropdown').addClass('visible');
      });
      $('.cls-8, .cls-8-5').mouseleave(function () {
        $('#modal3-dropdown').removeClass('visible');
      });
      $('.cls-7, .cls-7-5').hover(function () {
        $('#modal4-dropdown').addClass('visible');
      });
      $('.cls-7, .cls-7-5').mouseleave(function () {
        $('#modal4-dropdown').removeClass('visible');
      });
      $('.cls-11, .cls-11-5').hover(function () {
        $('#modal5-dropdown').addClass('visible');
      });
      $('.cls-11, .cls-11-5').mouseleave(function () {
        $('#modal5-dropdown').removeClass('visible');
      });
      $('.cls-12, .cls-12-5').hover(function () {
        $('#modal6-dropdown').addClass('visible');
      });
      $('.cls-12, .cls-12-5').mouseleave(function () {
        $('#modal6-dropdown').removeClass('visible');
      });
      $('.cls-4, .cls-4-5').hover(function () {
        $('#modal7-dropdown').addClass('visible');
      });
      $('.cls-4, .cls-4-5').mouseleave(function () {
        $('#modal7-dropdown').removeClass('visible');
      });
      $('.cls-6, .cls-6-5').hover(function () {
        $('#modal8-dropdown').addClass('visible');
      });
      $('.cls-6, .cls-6-5').mouseleave(function () {
        $('#modal8-dropdown').removeClass('visible');
      });

  
      $('#menuToggle').on('click touch', function () {
        $('#mainMenu').toggleClass('displayed')
      })


    });
  </script>
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
                  Menu
                  <i class="icon icon-arrow-right mr-1"></i>
                </label>
                <div class="accordion-body">
                  <?php foreach ($cases as $case) { ?>
                  <a onclick="document.getElementById('beepSound').play();" href="#modal<?php echo $case['case_number']; ?>"><?php echo $case['case_title']; ?> </a>
                  <?php } ?>
                </div>
                </div>
              </div>

              <div id="menuMentions">
                <div class="textContent">
                  <h3>La marelle : lamarelle-voix.fr</h3>
                  <p>Créé dans le cadre du Pôle de Ressources pour l’Education Artistique et Culturelle (PREAC Musique
                    et
                    voix de Bourgogne) avec l’aide de financements de la DRAC Bourgogne Franche-Comté, du réseau Canopé
                    et
                    du Conseil régional de Bourgogne Franche-Comté, ce site a pour objectif de faciliter la création et
                    l’animation de chœurs d’enfants et de jeunes. </p>
                  <div id="toggle">
                    <a href="#modalMentions" id="#modalMentionsToggle">en savoir plus +</a>
                  </div>
                </div>

                <div class="logosContent">
                  <div>
                    <img src="img/logos/logo_ministere_culture_noir.png" width="64px"> 
                    <img src="img/logos/region.svg" width="52px">
                    <img src="img/logos/logo-lab-noir.svg" width="36px">
                  </div>

                  <div>
                    <img src="img/logos/cdlv-new.png" width="64px">
                    <img src="img/logos/Logo_89_Yonne.png" width="32px">
                  </div>

                  <div>
                    <img src="img/logos/canope.png" width="92px">
                    <img src="img/logos/carasso.png" width="54px">
                  </div>

                  <div>
                    <img src="img/logos/menj.jpg" width="82px">
                    <img src="img/logos/mgen.png" width="36px">
                  </div>
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
                  <?php foreach ($cases as $case) { ?>
                  <?php if ($case['case_number'] == 1) { ?>
                  <span id="modal1-dropdown" class="modal-dropdown">
                    <h2><?php echo $case['case_title']; ?></h2>
                  </span>
                  <?php } ?>
                  <?php if ($case['case_number'] == 2) { ?>
                  <span id="modal2-dropdown" class="modal-dropdown">
                    <h2><?php echo $case['case_title']; ?></h2>
                  </span>
                  <?php } ?>
                  <?php if ($case['case_number'] == 3) { ?>
                  <span id="modal3-dropdown" class="modal-dropdown">
                    <h2><?php echo $case['case_title']; ?></h2>
                  </span>
                  <?php } ?>
                  <?php if ($case['case_number'] == 4) { ?>
                  <span id="modal4-dropdown" class="modal-dropdown">
                    <h2><?php echo $case['case_title']; ?></h2>
                  </span>
                  <?php } ?>
                  <?php if ($case['case_number'] == 5) { ?>
                  <span id="modal5-dropdown" class="modal-dropdown">
                    <h2><?php echo $case['case_title']; ?></h2>
                  </span>
                  <?php } ?>
                  <?php if ($case['case_number'] == 6) { ?>
                  <span id="modal6-dropdown" class="modal-dropdown">
                    <h2><?php echo $case['case_title']; ?></h2>
                  </span>
                  <?php } ?>
                  <?php if ($case['case_number'] == 7) { ?>
                  <span id="modal7-dropdown" class="modal-dropdown">
                    <h2><?php echo $case['case_title']; ?></h2>
                  </span>
                  <?php } ?>
                  <?php if ($case['case_number'] == 8) { ?>
                  <span id="modal8-dropdown" class="modal-dropdown">
                    <h2><?php echo $case['case_title']; ?></h2>
                  </span>
                  <?php } ?>
                  <?php } ?>

                  <?php include 'components/marelle-svg.php';?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <!--Modals-->
      <?php include 'components/modal-mentions.php';?>
      <?php include 'components/modal1.php';?>
      <?php include 'components/modal2.php';?>
      <?php include 'components/modal3.php';?>
      <?php include 'components/modal4.php';?>
      <?php include 'components/modal5.php';?>
      <?php include 'components/modal6.php';?>
      <?php include 'components/modal7.php';?>
      <?php include 'components/modal8.php';?>

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
            <p>Créé dans le cadre du Pôle de Ressources pour l’Education Artistique et Culturelle (PREAC Musique et voix
              de
              Bourgogne) avec l’aide de financements de la DRAC Bourgogne Franche-Comté, du réseau Canopé et du Conseil
              régional de Bourgogne Franche-Comté, ce site a pour objectif de faciliter la création et l’animation de
              chœurs
              d’enfants et de jeunes. </p>
            <p>Vous y trouverez des vidéos, des fiches pédagogiques, des sites de références, des bibliographies… sur
              tous
              les sujets utiles à la direction d’un chœur d’enfants ou de jeunes : la voix de l’enfant, les jeux vocaux,
              les
              répertoires, les aides et dispositifs.</p>
            <p>Interactif et ludique, vous pourrez parcourir la marelle en fonction de vos envies et y revenir chaque
              fois
              que de besoin. </p>
          </div>
          <div class="logosContent">
                  <div>
                    <img src="img/logos/logo_ministere_culture_noir.png" width="64px"> 
                    <img src="img/logos/region.svg" width="52px">
                    <img src="img/logos/logo-lab-noir.svg" width="36px">
                    <img src="img/logos/cdlv-new.png" width="64px">
                    <img src="img/logos/Logo_89_Yonne.png" width="32px">
                    <img src="img/logos/canope.png" width="92px">
                    <img src="img/logos/carasso.png" width="54px">
                    <img src="img/logos/menj.jpg" width="82px">
                    <img src="img/logos/mgen.png" width="36px">
                  </div>
                </div>
        </div>
      </footer>

</body>

</html>