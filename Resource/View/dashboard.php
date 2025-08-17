<?php

layout("app", function () use ($projects, $certificates, $languages) { ?>

    
    <?= components("menuDasboard") ?>

    <!--------------- Contenido de la pagina Web --------------->
    <main>
        <section>
        <!-- =================================================== Projects =================================================== -->
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
                                    value="<?= old("url") ?>"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("url") ? errors("url") : "" ?>

                                <input 
                                    type="text" 
                                    name="github" 
                                    id="github" 
                                    placeholder="Github Url" 
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


        <!-- =================================================== Certificates =================================================== -->
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

        <!-- =================================================== Languages =================================================== -->
            <?= components("experience", ["languages" => $languages]) ?>
            
            <div class="Experiencias">
                <div class="experiencia-content">
                    <div class="cuadrado-experiencias">
                        <p class="title-cuadrado-experiencias">Add a language</p>
                        <div class="ordenar-experiencia" style="margin: 0;">
                            <form action="<?= routes("language.adding") ?>" method="post" enctype="multipart/form-data" style="width: 100%; padding: 0 40px; margin-top: 40px;">
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
                                    name="name" 
                                    id="name" 
                                    placeholder="Name of the programming language" 
                                    required
                                    value="<?= old("title") ?>"
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                >
                                <?= hasError("title") ? errors("title") : "" ?>
                                

                                <label for="level" style="color: #ccc;">Select the language domain</label>
                                <select 
                                    name="level" 
                                    id="level" 
                                    required 
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                    value="<?= old("level") ?>"
                                >
                                    <option value="Starting">Starting</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Advanced">Advanced</option>
                                </select>
                                <?= hasError("level") ? errors("level") : "" ?>

                                <label for="architecture" style="color: #ccc;">Select the architecture</label>
                                <select 
                                    name="architecture" 
                                    id="architecture" 
                                    required 
                                    style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"
                                    value="<?= old("architecture") ?>"
                                >
                                    <option value="frontend">Front-End</option>
                                    <option value="backend">Back-End</option>
                                </select>
                                <?= hasError("level") ? errors("level") : "" ?>

                                <?= hasError("count_language") ? errors("count_language") : "" ?>

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


