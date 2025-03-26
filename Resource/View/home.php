<?php layout("app", function () use ($certificates, $projects, $lenguages) { ?>
    <div id="content-lenguague" style="display: none;">
        <div class="lenguague">
            <div class="cuadro">
                <span id="cancel">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="#ffffff" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                    </svg>
                </span>
                <div>
                    <p>Languages</p>
                </div>
                <div>
                    <a href="/es/">
                        <img src="/assets/images/spain.webp" alt="español" width="40px" height="28px" title="Español" alt="icon-leguague">
                        <span style="width: 50px;">Español</span>
                    </a>
                </div>
                <div>
                    <a href="/it/">
                        <img src="/assets/images/italian.webp" alt="italiano" width="40px" height="28px" title="Italiano" alt="icon-leguague">
                        <span style="width: 50px;">Italiano</span>
                    </a>
                    
                </div>
                <div>
                    <a href="/">
                        <img src="/assets/images/uk.webp" alt="english" width="40px" height="28px" title="English" alt="icon-leguague">
                        <span style="width: 50px;">English</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--------------- Presentacion del inicio de header --------------->
    <?= components("header")?>

    <!--------------- Iconos de la pagina --------------->
    <section class="area-iconos-red">
        <a href="https://github.com/Ndnestor098" target="_blank"><img src="/assets/images/svg/github.svg" width="23" height="24" title="Pagina de Nestor" alt="Nestor - icon-menu"></a>
        <a href="https://www.instagram.com/__catmaster__/" target="_blank"><img src="/assets/images/svg/insta.svg" width="23" height="24" title="Pagina de Nestor" alt="Nestor - icon-menu"></a>
        <a href="https://www.linkedin.com/in/nestor-daniel-salom-nunez"><img src="/assets/images/svg/linkedin.svg" width="23" height="24" title="Pagina de Nestor" alt="Nestor - icon-menu"></a>
        <a href="mailto:trabajo.nestor.098@gmail.com"><img src="/assets/images/svg/email.svg" width="23" height="24" title="Pagina de Nestor" alt="Nestor - icon-menu"></a>
    </section>

    <!--------------- Navegacion de la pagina --------------->
    <?= components("menu")?>

    <!--------------- Contenido de la pagina Web --------------->
    <main>
        <!-- -------------------------- Sobre mi persona -------------------------- -->
        <?= components("about")?>


        <!-- -------------------------- Proyectos -------------------------- -->
        <?= components("projects", ["projects" => $projects])?>
        
        <!-- -------------------------- Experiencia -------------------------- -->
        <?= components("experience", ["lenguages" => $lenguages])?>

        <!-- -------------------------- Certificados -------------------------- -->      
        <?= components("certificates", ["certificates" => $certificates])?>
        
        <!-- -------------------------- Contacto -------------------------- -->
        <?= components("contact")?>
    </main>

    <!--  Efecto de Iluminacion -->
    <div class="iluminacion"></div>
    <!--  files JS -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/effect.js"></script>
<?php })?>


