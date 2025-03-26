<!-- -------------------------- Proyectos -------------------------- -->
<div id="projects">
    <h2>Projects</h2>
    <section class="Portafolio">
        <div class="galeria-portafolio" id="projects">
            <?php foreach ($projects as $key => $value) { ?>
                <div class="content-portafolio">
                    <div class="img" style="background-image: url('<?= $value->image ?>');"></div>
                    <p class="title-portafolios"><?= $value->title ?></p>
                    <div class="content-button-portafolio">
                        <a href="<?= $value->url ?>" target="_blank" class="link-github">Github</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>