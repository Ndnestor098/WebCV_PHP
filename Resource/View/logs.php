<?php

layout("app", function () use ($data) { ?>
    
    <?= components("menuDasboard") ?>

    <!--------------- Contenido de la pagina Web --------------->

    <div class="container">
        <!-- Header -->
        <header class="header">
            <h1 class="header-title">Analytics Dashboard</h1>
            <div class="header-subtitle">Monitoreo en tiempo real</div>
        </header>

        <!-- Main Navigation -->
        <nav class="main-nav">
            <button class="nav-btn active" data-view="logs">
                <span class="nav-icon">📊</span>
                Logs
            </button>
            <button class="nav-btn" data-view="visits">
                <span class="nav-icon">👥</span>
                Visitas
            </button>
        </nav>

        <!-- Page Navigation -->
        <nav class="page-nav">
            <div class="page-nav-title">Páginas:</div>
            <div class="page-buttons">
                <button class="page-btn active" data-page="ndnestor.com">ndnestor.com</button>
                <button class="page-btn" data-page="listana.ndnestor.com">listana.ndnestor.com</button>
                <button class="page-btn" data-page="realstate.ndnestor.com">realstate.ndnestor.com</button>
                <button class="page-btn" data-page="saldofacile.ndnestor.com">saldofacile.ndnestor.com</button>
                <button class="page-btn" data-page="scarpetoss.ndnestor.com">scarpetoss.ndnestor.com</button>
            </div>
        </nav>

        <!-- Content Area -->
        <main class="content">
            <!-- Logs View -->
            <div id="logs-view" class="view active">
                <div class="view-header">
                    <h2 class="view-title">Logs del Sistema</h2>
                    <div class="page-indicator" id="logs-page-name">Inicio</div>
                </div>
                <div class="logs-container" id="logs-container">
                    <!-- Logs will be populated by JavaScript -->
                </div>
            </div>

            <!-- Visits View -->
            <div id="visits-view" class="view">
                <div class="view-header">
                    <h2 class="view-title">Visualizaciones</h2>
                    <div class="page-indicator" id="visits-page-name">Inicio</div>
                </div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Visitas Hoy</h3>
                        <div class="stat-value" id="visits-today">0</div>
                    </div>
                    <div class="stat-card">
                        <h3>Visitas Mes</h3>
                        <div class="stat-value" id="visits-month">0</div>
                    </div>
                    <div class="stat-card">
                        <h3>Tiempo Promedio</h3>
                        <div class="stat-value" id="avg-time">0s</div>
                    </div>
                    <div class="stat-card">
                        <h3>Bounce Rate</h3>
                        <div class="stat-value" id="bounce-rate">0%</div>
                    </div>
                </div>
                <div class="chart-container">
                    <h3>Visitas por Hora</h3>
                    <div class="chart" id="visits-chart"></div>
                </div>
            </div>
        </main>
    </div>


    <!--  Efecto de Iluminacion -->
    <!-- <div class="iluminacion"></div> -->
    <!-- <script src="/assets/js/effect.js"></script> -->
    <script src="/assets/js/scriptLogs.js"></script>
<?php })?>


