<?php

layout("app", function () use ($projects, $certificates) { ?>

    <!--------------- Contenido de la pagina Web --------------->
    <main>
        <section>
            <?= components("projects", ["projects" => $projects]) ?>

            <div class="Experiencias">
                <div class="experiencia-content">
                    <div class="cuadrado-experiencias">
                        <p class="title-cuadrado-experiencias">Add a project</p>
                        <div class="ordenar-experiencia" style="margin: 0;">
                            <form action="<?= routes("project.adding") ?>" method="post" enctype="multipart/form-data" style="width: 100%; padding: 0 40px; margin-top: 40px;">
                                <input 
                                    type="file" 
                                    name="image" 
                                    id="image" 
                                    placeholder="Image" 
                                    required
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("image") ? errors("image") : "" ?>
                                <input 
                                    type="text" 
                                    name="title" 
                                    id="title" 
                                    placeholder="Title" 
                                    required
                                    value="<?= old("title") ?>"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("title") ? errors("title") : "" ?>

                                <input 
                                    type="text" 
                                    name="url" 
                                    id="url" 
                                    placeholder="Project Url" 
                                    required
                                    value="<?= old("url") ?>"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("url") ? errors("url") : "" ?>

                                <input 
                                    type="text" 
                                    name="github" 
                                    id="github" 
                                    placeholder="Github Url" 
                                    required
                                    value="<?= old("github") ?>"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("github") ? errors("github") : "" ?>
                                <?= hasError("count_project") ? errors("count_project") : "" ?>

                                <button 
                                    type="submit"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px; cursor: pointer; background-color: #80b39c; color: white; font-size: 16px;"
                                >
                                    Send
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?= components("certificates", ["certificates" => $certificates]) ?>
            
            <div class="Experiencias">
                <div class="experiencia-content">
                    <div class="cuadrado-experiencias">
                        <p class="title-cuadrado-experiencias">Add a certificate</p>
                        <div class="ordenar-experiencia" style="margin: 0;">
                            <form action="<?= routes("certificate.adding") ?>" method="post" enctype="multipart/form-data" style="width: 100%; padding: 0 40px; margin-top: 40px;">
                                <input 
                                    type="file" 
                                    name="image" 
                                    id="image" 
                                    placeholder="Image" 
                                    required
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("image") ? errors("image") : "" ?>
                                <input 
                                    type="text" 
                                    name="title" 
                                    id="title" 
                                    placeholder="Title" 
                                    required
                                    value="<?= old("title") ?>"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("title") ? errors("title") : "" ?>

                                <input 
                                    type="text" 
                                    name="url" 
                                    id="url" 
                                    placeholder="Certificate Url" 
                                    required
                                    value="<?= old("url") ?>"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("url") ? errors("url") : "" ?>

                                <?= hasError("count_certificate") ? errors("count_certificate") : "" ?>

                                <button 
                                    type="submit"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px; cursor: pointer; background-color: #80b39c; color: white; font-size: 16px;"
                                >
                                    Send
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>

    <!--  Efecto de Iluminacion -->
    <div class="iluminacion"></div>
    <script src="/assets/js/effect.js"></script>
<?php })?>


