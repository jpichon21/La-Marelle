<?php 
include_once 'connection.php';
include_once 'imports/fiche.php';
include_once 'imports/case2.php';

$fiche = new Fiche;
$fiches = $fiche->fetch_all();
$case = new Contenu2;
$cases = $case->fetch_all();
?>


<div class="modal modal-lg" id="modal2">
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

                <!--h3>Ressources</h3>

                <div>
                  <h4>Bibliographie</h4>
                  <p>FRIS Tine, THORNING Kristoffer Fynbo. <i>Icebreakers, a practical approach to group dynamics.</i>
                    Aarhus :
                    Postyr Project I/S, 2014, 72 p.</p>
                  <a href="https://breaktheice.dk">https://breaktheice.dk</a>
                </div-->

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
              <!--Contenu de la case -->
              <?php foreach ($cases as $case) { ?>
                       <p><?php echo $case['case_content']; ?></p>
              <?php } ?>
              <!-- -->
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>