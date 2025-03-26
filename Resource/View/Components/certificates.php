<!-- -------------------------- Certificados -------------------------- -->
<div id="certificates">
    <h2>Certificates</h2>
    <section class="certificado">
        <!-- Mis certificados -->
        <div id="Ubicacion-POR" style="margin-top: 50px;">
            <section class="Portafolio">
                <div class="galeria-certificado" id="certificados">
                    <?php foreach ($certificates as $key => $value) { ?>
                        <div class="content-certificado">
                            <div class="img" style="background-image: url('<?= $value->image ?>');"></div>
                            <p class="title-certificado"><?= $value->title ?></p>
                            
                            <div class="content-button-certificado">
                                <a href="<?= $value->url ?>" target="_blank" class="link-github" 
                                aria-label="View Coursera Certificate: Botón del certificado" 
                                title="View Coursera Certificate: Botón del certificado">
                                    See More
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </section>
</div>