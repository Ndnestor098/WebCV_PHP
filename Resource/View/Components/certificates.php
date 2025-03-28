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
                                <?php if($_SERVER["REQUEST_URI"] === "/dashboard") { ?>
                                    <a 
                                        href="<?= routes("certificate.delete", ["id" => $value->id]) ?>" 
                                        class="link-github" 
                                        style="border-color: #ef2929; color: #ef2929;"
                                    >
                                        delete
                                    </a>
                                <?php } ?>

                                <?php if($_SERVER["REQUEST_URI"] !== "/dashboard") { ?>
                                    <a href="<?= $value->url ?>" target="_blank" class="link-github" 
                                    aria-label="<?= $value->title ?>" 
                                    title="<?= $value->title ?>">
                                        See More
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </section>
</div>