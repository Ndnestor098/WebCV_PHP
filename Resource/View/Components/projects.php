<!-- -------------------------- Proyectos -------------------------- -->
<div id="Ubicacion-POR">
    <h2>Projects</h2>
    <section class="Portafolio">
        <div class="galeria-portafolio" id="projects">
            <?php foreach (range(1,5) as $value) { ?>
                <div class="content-portafolio">
                    <div class="img" style="background-image: url('/assets/images/eduplus.webp');"></div>
                    <p class="title-portafolios">Título del proyecto</p>
                    <div class="content-button-portafolio">
                        <a href="https://github.com/enlace-del-proyecto" target="_blank" class="link-github">Github</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>