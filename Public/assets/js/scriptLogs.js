// Data structure for different pages
const pagesData = {
    "ndnestor.com": {
        name: 'ndnestor.com',
        logs: [
            { time: '2024-01-15 10:30:25', level: 'info', message: 'Usuario accedió a la página principal' },
            { time: '2024-01-15 10:31:12', level: 'success', message: 'Carga exitosa del carrusel de imágenes' },
            { time: '2024-01-15 10:32:45', level: 'info', message: 'Click en botón "Conocer más"' },
            { time: '2024-01-15 10:33:20', level: 'warning', message: 'Carga lenta de imagen hero (3.2s)' },
            { time: '2024-01-15 10:35:10', level: 'info', message: 'Usuario se desplazó 80% de la página' },
            { time: '2024-01-15 10:36:33', level: 'error', message: 'Error en formulario de newsletter - email inválido' },
            { time: '2024-01-15 10:37:15', level: 'success', message: 'Suscripción a newsletter completada' },
            { time: '2024-01-15 10:38:50', level: 'info', message: 'Click en enlace de redes sociales' }
        ],
        stats: {
            visitsToday: 1247,
            visitsMonth: 32150,
            avgTime: 185,
            bounceRate: 32,
            uniqueVisitors: 892,
            pageViews: 2156,
            conversionRate: 3.2,
            topReferrer: 'Google',
            topDevice: 'Desktop',
            topBrowser: 'Chrome'
        },
        chartData: [45, 62, 38, 71, 89, 125, 156, 134, 98, 87, 76, 82, 94, 108, 142, 165, 156, 134, 121, 98, 76, 54, 43, 38]
    },
    "listana.ndnestor.com": {
        name: 'listana.ndnestor.com',
        logs: [
            { time: '2024-01-15 09:15:33', level: 'info', message: 'Acceso a página Nosotros desde menú principal' },
            { time: '2024-01-15 09:16:20', level: 'success', message: 'Video institucional cargado correctamente' },
            { time: '2024-01-15 09:17:45', level: 'info', message: 'Usuario reprodujo video institucional' },
            { time: '2024-01-15 09:18:12', level: 'warning', message: 'Video pausado en 45% de reproducción' },
            { time: '2024-01-15 09:19:30', level: 'info', message: 'Scroll hasta sección de equipo' },
            { time: '2024-01-15 09:20:15', level: 'success', message: 'Apertura de modal de información de empleado' },
            { time: '2024-01-15 09:21:08', level: 'info', message: 'Click en certificaciones de la empresa' }
        ],
        stats: {
            visitsToday: 892,
            visitsMonth: 21450,
            avgTime: 245,
            bounceRate: 28,
            uniqueVisitors: 654,
            pageViews: 1234,
            conversionRate: 4.1,
            topReferrer: 'Direct',
            topDevice: 'Mobile',
            topBrowser: 'Safari'
        },
        chartData: [32, 45, 28, 51, 67, 89, 112, 98, 76, 65, 58, 63, 72, 85, 102, 118, 134, 121, 108, 89, 67, 45, 32, 28]
    },
    "realstate.ndnestor.com": {
        name: 'realstate.ndnestor.com',
        logs: [
            { time: '2024-01-15 11:22:15', level: 'info', message: 'Búsqueda de producto: "laptop gaming"' },
            { time: '2024-01-15 11:23:40', level: 'success', message: 'Resultados de búsqueda mostrados (24 productos)' },
            { time: '2024-01-15 11:24:22', level: 'info', message: 'Filtro aplicado: precio entre $800-$1500' },
            { time: '2024-01-15 11:25:10', level: 'info', message: 'Click en producto "Gaming Laptop Pro X1"' },
            { time: '2024-01-15 11:26:33', level: 'success', message: 'Galería de imágenes del producto cargada' },
            { time: '2024-01-15 11:27:45', level: 'warning', message: 'Reseñas del producto tardaron en cargar (4.1s)' },
            { time: '2024-01-15 11:28:20', level: 'info', message: 'Producto añadido al carrito de compras' },
            { time: '2024-01-15 11:29:12', level: 'success', message: 'Redirección a carrito exitosa' }
        ],
        stats: {
            visitsToday: 2156,
            visitsMonth: 58320,
            avgTime: 312,
            bounceRate: 22,
            uniqueVisitors: 1543,
            pageViews: 3892,
            conversionRate: 5.8,
            topReferrer: 'Facebook',
            topDevice: 'Desktop',
            topBrowser: 'Chrome'
        },
        chartData: [78, 92, 65, 108, 134, 165, 198, 176, 145, 132, 118, 125, 142, 158, 189, 212, 234, 198, 176, 145, 118, 92, 78, 65]
    },
    "saldofacile.ndnestor.com": {
        name: 'saldofacile.ndnestor.com',
        logs: [
            { time: '2024-01-15 14:45:20', level: 'info', message: 'Acceso a página de contacto' },
            { time: '2024-01-15 14:46:15', level: 'info', message: 'Usuario comenzó a llenar formulario de contacto' },
            { time: '2024-01-15 14:47:33', level: 'warning', message: 'Campo teléfono - formato inválido detectado' },
            { time: '2024-01-15 14:48:10', level: 'success', message: 'Validación de email exitosa' },
            { time: '2024-01-15 14:49:25', level: 'info', message: 'Mensaje escrito (245 caracteres)' },
            { time: '2024-01-15 14:50:40', level: 'success', message: 'Formulario enviado correctamente' },
            { time: '2024-01-15 14:51:12', level: 'success', message: 'Email de confirmación enviado' },
            { time: '2024-01-15 14:52:05', level: 'info', message: 'Click en información de ubicación en mapa' }
        ],
        stats: {
            visitsToday: 543,
            visitsMonth: 14280,
            avgTime: 198,
            bounceRate: 45,
            uniqueVisitors: 398,
            pageViews: 721,
            conversionRate: 2.1,
            topReferrer: 'Email',
            topDevice: 'Mobile',
            topBrowser: 'Chrome'
        },
        chartData: [25, 32, 18, 42, 56, 68, 85, 72, 58, 48, 42, 45, 52, 61, 74, 89, 95, 82, 71, 58, 45, 32, 25, 18]
    },
    "scarpetoss.ndnestor.com": {
        name: 'scarpetoss.ndnestor.com',
        logs: [
            { time: '2024-01-15 16:12:30', level: 'info', message: 'Acceso a listado de artículos del blog' },
            { time: '2024-01-15 16:13:45', level: 'success', message: 'Carga de 12 artículos más recientes' },
            { time: '2024-01-15 16:14:20', level: 'info', message: 'Click en artículo "Tendencias Tech 2024"' },
            { time: '2024-01-15 16:15:10', level: 'success', message: 'Artículo cargado - tiempo de lectura estimado: 8 min' },
            { time: '2024-01-15 16:16:35', level: 'info', message: 'Usuario llegó al 40% del artículo' },
            { time: '2024-01-15 16:18:22', level: 'info', message: 'Click en compartir artículo en LinkedIn' },
            { time: '2024-01-15 16:19:15', level: 'success', message: 'Artículo compartido exitosamente' },
            { time: '2024-01-15 16:20:40', level: 'info', message: 'Scroll a sección de comentarios' },
            { time: '2024-01-15 16:21:33', level: 'warning', message: 'Intento de comentario sin autenticación' }
        ],
        stats: {
            visitsToday: 1689,
            visitsMonth: 43520,
            avgTime: 425,
            bounceRate: 35,
            uniqueVisitors: 1234,
            pageViews: 2567,
            conversionRate: 1.8,
            topReferrer: 'Twitter',
            topDevice: 'Desktop',
            topBrowser: 'Firefox'
        },
        chartData: [52, 68, 45, 78, 95, 118, 145, 132, 108, 95, 85, 89, 102, 118, 145, 168, 189, 156, 132, 108, 85, 68, 52, 45]
    }
};

// Current state
let currentView = 'logs';
let currentPage = 'ndnestor.com';

// Initialize the application
function init() {
    setupEventListeners();
    updateContent();
}

// Setup event listeners
function setupEventListeners() {
    // Main navigation (Logs/Visits)
    document.querySelectorAll('.nav-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const view = e.target.closest('.nav-btn').dataset.view;
            if (view !== currentView) {
                switchView(view);
            }
        });
    });

    // Page navigation
    document.querySelectorAll('.page-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const page = e.target.dataset.page;
            if (page !== currentPage) {
                switchPage(page);
            }
        });
    });
}

// Switch between logs and visits view
function switchView(view) {
    // Update navigation
    document.querySelectorAll('.nav-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelector(`[data-view="${view}"]`).classList.add('active');

    // Update content views
    document.querySelectorAll('.view').forEach(viewEl => {
        viewEl.classList.remove('active');
    });
    document.getElementById(`${view}-view`).classList.add('active');

    currentView = view;
    updateContent();
}

// Switch between different pages
function switchPage(page) {
    // Update page navigation
    document.querySelectorAll('.page-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelector(`[data-page="${page}"]`).classList.add('active');

    currentPage = page;
    updateContent();
}

// Update content based on current view and page
function updateContent() {
    const pageData = pagesData[currentPage];
    
    // Update page indicators
    document.getElementById('logs-page-name').textContent = pageData.name;
    document.getElementById('visits-page-name').textContent = pageData.name;

    if (currentView === 'logs') {
        updateLogsView(pageData.logs);
    } else {
        updateVisitsView(pageData.stats, pageData.chartData);
    }
}

// Update logs view
function updateLogsView(logs) {
    const container = document.getElementById('logs-container');
    container.innerHTML = '';

    logs.forEach(log => {
        const logEntry = document.createElement('div');
        logEntry.className = 'log-entry';
        
        logEntry.innerHTML = `
            <div class="log-time">${log.time}</div>
            <div class="log-level ${log.level}">${log.level}</div>
            <div class="log-message">${log.message}</div>
        `;
        
        container.appendChild(logEntry);
    });
}

// Update visits view
function updateVisitsView(stats, chartData) {
    // Add real-time indicator
    const visitsView = document.getElementById('visits-view');
    let realTimeIndicator = visitsView.querySelector('.real-time-indicator');
    if (!realTimeIndicator) {
        realTimeIndicator = document.createElement('div');
        realTimeIndicator.className = 'real-time-indicator';
        realTimeIndicator.innerHTML = `
            <div class="status-dot"></div>
            <span class="status-text">Datos actualizados en tiempo real</span>
        `;
        visitsView.insertBefore(realTimeIndicator, visitsView.querySelector('.stats-grid'));
    }

    // Update stats
    document.getElementById('visits-today').textContent = stats.visitsToday.toLocaleString();
    document.getElementById('visits-month').textContent = stats.visitsMonth.toLocaleString();
    document.getElementById('avg-time').textContent = `${stats.avgTime}s`;
    document.getElementById('bounce-rate').textContent = `${stats.bounceRate}%`;

    // Update additional stats
    updateAdditionalStats(stats);

    // Update chart
    updateChart(chartData);
}

// Update additional statistics
function updateAdditionalStats(stats) {
    let additionalStatsContainer = document.querySelector('.additional-stats');
    if (!additionalStatsContainer) {
        additionalStatsContainer = document.createElement('div');
        additionalStatsContainer.className = 'additional-stats';
        
        const statsGrid = document.querySelector('.stats-grid');
        statsGrid.parentNode.insertBefore(additionalStatsContainer, statsGrid.nextSibling);
    }

    additionalStatsContainer.innerHTML = `
        <div class="additional-stat-card">
            <h4>Tráfico</h4>
            <div class="stat-item">
                <span class="stat-label">Visitantes únicos</span>
                <span class="stat-number">${stats.uniqueVisitors.toLocaleString()}</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">Páginas vistas</span>
                <span class="stat-number">${stats.pageViews.toLocaleString()}</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">Tasa de conversión</span>
                <span class="stat-number">${stats.conversionRate}%</span>
            </div>
        </div>
        <div class="additional-stat-card">
            <h4>Fuentes de Tráfico</h4>
            <div class="stat-item">
                <span class="stat-label">Principal referente</span>
                <span class="stat-number">${stats.topReferrer}</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">Dispositivo principal</span>
                <span class="stat-number">${stats.topDevice}</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">Navegador principal</span>
                <span class="stat-number">${stats.topBrowser}</span>
            </div>
        </div>
    `;
}

// Update chart visualization
function updateChart(data) {
    const chart = document.getElementById('visits-chart');
    chart.innerHTML = '';

    const maxValue = Math.max(...data);
    
    data.forEach((value, index) => {
        const bar = document.createElement('div');
        bar.className = 'chart-bar';
        bar.style.height = `${(value / maxValue) * 100}%`;
        bar.setAttribute('data-value', value);
        bar.title = `Hora ${index}: ${value} visitas`;
        
        chart.appendChild(bar);
    });
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', init);