<aside class="sidebar" data-sidebar>
    <a class="brand" href="<?= escape($baseUrl) ?>/index.php">
        <span class="brand-mark"><i class="bi bi-book-half"></i></span>
        <span><strong>BookManager</strong><small>Gestión editorial</small></span>
    </a>
    <nav class="sidebar-nav" aria-label="Navegación principal">
        <p class="nav-label">Principal</p>
        <a class="nav-link <?= $activePage === 'inicio' ? 'active' : '' ?>" href="<?= escape($baseUrl) ?>/index.php">
            <i class="bi bi-grid-1x2"></i><span>Resumen</span>
        </a>
        <p class="nav-label">Gestión</p>
        <a class="nav-link <?= $activePage === 'tiendas' ? 'active' : '' ?>" href="<?= escape($baseUrl) ?>/views/tiendas/index.php">
            <i class="bi bi-shop"></i><span>Tiendas</span>
        </a>
        <a class="nav-link <?= $activePage === 'titulos' ? 'active' : '' ?>" href="<?= escape($baseUrl) ?>/views/titulos/index.php">
            <i class="bi bi-journal-bookmark"></i><span>Títulos</span>
        </a>
        <p class="nav-label">Sistema</p>
        <a class="nav-link" href="#">
            <i class="bi bi-people"></i><span>Editoriales</span><span class="nav-badge">Próximo</span>
        </a>
        <a class="nav-link" href="#">
            <i class="bi bi-gear"></i><span>Configuración</span>
        </a>
    </nav>
    <div class="sidebar-card">
        <i class="bi bi-cloud-check"></i>
        <strong>Proyecto en desarrollo</strong>
        <span>Interfaz lista para integrar con MySQL.</span>
    </div>
</aside>
<div class="sidebar-backdrop" data-sidebar-backdrop></div>

