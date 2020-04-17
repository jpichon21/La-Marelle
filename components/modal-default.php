<div class="modal modal-lg" id="modal<?php echo $case_number;?>">
    <a onclick="document.getElementById('closeSound').play();" href="#close" class="modal-overlay"
        aria-label="Close"></a>
    <div class="modal-container" >


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
            <div class="content" >
            <!--encart droit-->
            <?php if (!empty($bibs) || !empty($sites) || !empty($fiches)) { ?>
                <aside>
                    <h3>Ressources associées</h3>
                    <!--Bibliographie -->
                    <?php if (!empty($bibs)) { ?>
                    <div>
                        <h4><i class="fas fa-book"></i> Bibliographie</h4>
                        <?php foreach ($bibs as $bib) { ?>
                        <div class="bibContainer">
                            <p><?php echo $bib['bib_author'];?>. <i><?php echo $bib['bib_book'];?></i>
                                <?php echo $bib['bib_editor'];?>, <?php echo $bib['bib_year'];?>,
                                <?php echo $bib['bib_size'];?> p.</p>
                            <a href="https://<?php echo $bib['bib_link'];?>"><?php echo $bib['bib_link'];?></a>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <!-- -->

                    <!--Fiches pédagogiques -->
                    <?php if (!empty($fiches)) { ?>
                    <div>
                        <h4><i class="fas fa-file-alt"></i> Fiches pédagogiques</h4>
                        <div class="ficheContainer">
                        <?php foreach ($fiches as $fiche) { ?>
                            <li>
                                <a href="docs/<?php echo $fiche['pdf_content'];?>"><i class="far fa-file-pdf"></i> <?php echo $fiche['pdf_content'];?></a>
                            </li>
                        <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- -->


                    <!--Sites ressources -->
                    <?php if (!empty($sites)) { ?>
                    <div>
                        <h4><i class="fas fa-globe-europe"></i> Sites</h4>
                        <div class="ficheContainer">
                        <?php foreach ($sites as $site) { ?>
                        <li>
                            <a href="https://<?php echo $site['site_url'];?>"><i class="fas fa-globe"></i> <?php echo $site['site_name'];?></a>
                        </li>
                        <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- -->
                </aside>
            <?php } ?>
                <!--contenu-->
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