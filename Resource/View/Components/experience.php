<!-- -------------------------- Experiencia -------------------------- -->
<div id="experiences">
    <h2>Experiences</h2>
    
    <section class="Experiencias">
        <!-- Front-End -->
        <div class="experiencia-content">
            <div class="cuadrado-experiencias">
                <p class="title-cuadrado-experiencias">Front-End Developer</p>
                <div class="ordenar-experiencia">
                    <?php foreach ($languages as $key => $value) { ?>
                        <?php if ($value->architecture == "frontend") { ?>
                            <div <?php if($_SERVER["REQUEST_URI"] === "/dashboard") { ?> style="margin-top: 40px;" <?php } ?>>
                                <p class="title-lenguaje" style="display: flex; align-items: center; margin-bottom: 3px;">
                                    <img src="<?= $value->image ?>" width="25" height="25" title="Check Confirm" alt="Nestor - icon-check"> 
                                    <span><?= $value->name ?></span>
                                </p>
                                <p><?= $value->level ?></p>
                                <?php if($_SERVER["REQUEST_URI"] === "/dashboard") { ?>
                                    <p><a href="<?= routes("language.delete", ["id" => $value->id]) ?>" style="color: #ef2929;">Delete</a></p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Back-End -->
        <div class="experiencia-content">
            <div class="cuadrado-experiencias">
                <p  class="title-cuadrado-experiencias">Back-End Developer</p>
                <div class="ordenar-experiencia">
                    <?php foreach ($languages as $key => $value) { ?>
                        <?php if ($value->architecture == "backend") { ?>
                            <div <?php if($_SERVER["REQUEST_URI"] === "/dashboard") { ?> style="margin-top: 40px;" <?php } ?>>
                                <p class="title-lenguaje" style="display: flex; align-items: center; margin-bottom: 3px;">
                                    <img src="<?= $value->image ?>" width="25" height="25" title="Check Confirm" alt="Nestor - icon-check"> 
                                    <span><?= $value->name ?></span>
                                </p>
                                <p><?= $value->level ?></p>
                                <?php if($_SERVER["REQUEST_URI"] === "/dashboard") { ?>
                                    <p><a href="<?= routes("language.delete", ["id" => $value->id]) ?>" style="color: #ef2929;">Delete</a></p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>