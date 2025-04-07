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
                        <?php  if($_SERVER["REQUEST_URI"] !== "/dashboard" && strlen($value->url) > 4) { ?> 
                            <a href="<?= $value->url ?>" target="_blank" class="link-github">See More</a>
                        <?php } ?>

                        <?php  if($_SERVER["REQUEST_URI"] !== "/dashboard" && !is_null($value->github_url)) { ?> 
                            <a href="<?= $value->github_url ?>" target="_blank" class="link-github">Github</a>
                        <?php } ?>

                        <?php  if($_SERVER["REQUEST_URI"] === "/dashboard") { ?> 
                            <a href="<?= routes("project.delete", ["id" => $value->id]) ?>" style="border-color: #ef2929; color: #ef2929;" class="link-edit">Delete</a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</div>