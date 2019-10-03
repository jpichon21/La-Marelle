<?php 
include_once 'connection.php';
include_once 'imports/fiche.php';
include_once 'imports/bib.php';
include_once 'imports/case1.php';

$fiche = new Fiche;
$fiches = $fiche->fetch_all();
$bib = new Bib;
$bibs = $bib->fetch_all();
$case = new Contenu1;
$cases = $case->fetch_all();
?>

<div class="modal modal-lg" id="modal1">
        <a onclick="document.getElementById('closeSound').play();" href="#close" class="modal-overlay"
          aria-label="Close"></a>
        <div class="modal-container">
          <div class="modal-header">
            <a onclick="document.getElementById('closeSound').play();" href="#close" class="btn btn-clear float-right"
              aria-label="Close"></a>
            <div class="modal-title h5">
            <?php foreach ($cases as $case) { ?>
                       <p><?php echo $case['case_title']; ?></p>
            <?php } ?>
            </div>
          </div>
          <div class="modal-body">
            <div class="content">
              <aside>

                <h3>Ressources</h3>

                <!--Bibliographie -->
                <?php if (!empty($bibs)) { ?>
                  <div>
                    <h4>Bibliographie</h4>
                    <?php foreach ($bibs as $bib) { ?>
                    <p><?php echo $bib['bib_author'];?>. <i><?php echo $bib['bib_book'];?></i>
                     <?php echo $bib['bib_editor'];?>, <?php echo $bib['bib_year'];?>, <?php echo $bib['bib_size'];?> p.</p>
                    <a href="<?php echo $bib['bib_link'];?>"><?php echo $bib['bib_link'];?></a>
                    <?php } ?>
                  </div>
                <?php } ?>
                <!-- -->

              <!--Fiches pédagogiques -->
              <?php if (!empty($fiches)) { ?>
                  <div>
                    <h4>Fiches pédagogiques</h4>
                    <?php foreach ($fiches as $fiche) { ?>
                      <li>
                        <a href="docs/<?php echo $fiche['pdf_content'];?>"><i class="far fa-file-pdf"></i><?php echo $fiche['pdf_content'];?></a>
                      </li>
                    <?php } ?>
                  </div>
                <?php } ?>
                <!-- -->
       


                <div>
                  <h4>Sites</h4>
                </div>

              </aside>

              <?php foreach ($cases as $case) { ?>
                       <p><?php echo $case['case_content']; ?></p>
              <?php } ?>
              <!--<h2>Énergie et Concentration</h2>
           
              <p>Il existe de nombreux exercices pour développer la concentration et l’énergie.<br> En voici deux
                exemples :<b><i> « le regard » </i></b> et <b><i>« 1, 2, 3 »</i></b>. Le premier est filmé avec des adultes, le second avec des
                enfants (projet choral du collège Paul Bert) lors d’un stage conduit par Panda van Proosdij dans le
                cadre du <strong>PREAC Musique et voix</strong> en février 2019 à Auxerre.</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/6jiNS_4CEug" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>