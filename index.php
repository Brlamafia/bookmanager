<?php

declare(strict_types=1);

$pageTitle = 'Resumen general';
$activePage = 'inicio';
require __DIR__ . '/data/demo.php';
require __DIR__ . '/includes/header.php';

$totalStock = array_sum(array_column($demoTitles, 'stock'));
$inventoryValue = array_sum(array_map(static fn (array $book): float => $book['precio'] * $book['stock'], $demoTitles));
?>
<section class="hero-panel mb-4">
    <span class="badge rounded-pill text-bg-light text-dark mb-3">Sistema de gestión de librería</span>
    <h2>Todo tu catálogo, en un solo lugar.</h2>
    <p class="mb-4">Consulta inventario, organiza tiendas y mantén la información editorial lista para tomar mejores decisiones.</p>
    <a class="btn btn-light px-4" href="<?= escape($baseUrl) ?>/views/titulos/crear.php"><i class="bi bi-plus-lg me-2"></i>Registrar título</a>
</section>

<div class="row g-3 mb-4">
    <div class="col-sm-6 col-xl-3"><div class="metric-card"><span class="metric-icon teal"><i class="bi bi-journal-bookmark"></i></span><div><p class="metric-label">Títulos registrados</p><p class="metric-value"><?= count($demoTitles) ?></p></div></div></div>
    <div class="col-sm-6 col-xl-3"><div class="metric-card"><span class="metric-icon blue"><i class="bi bi-shop"></i></span><div><p class="metric-label">Tiendas activas</p><p class="metric-value"><?= count($demoStores) ?></p></div></div></div>
    <div class="col-sm-6 col-xl-3"><div class="metric-card"><span class="metric-icon amber"><i class="bi bi-box-seam"></i></span><div><p class="metric-label">Unidades disponibles</p><p class="metric-value"><?= $totalStock ?></p></div></div></div>
    <div class="col-sm-6 col-xl-3"><div class="metric-card"><span class="metric-icon violet"><i class="bi bi-graph-up-arrow"></i></span><div><p class="metric-label">Valor del inventario</p><p class="metric-value"><?= money($inventoryValue) ?></p></div></div></div>
</div>

<div class="row g-4">
    <div class="col-xl-8">
        <section class="panel-card h-100">
            <div class="panel-heading"><div><h2>Inventario reciente</h2><p>Estado de los títulos con mayor movimiento.</p></div><a class="btn btn-sm btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/titulos/index.php">Ver catálogo</a></div>
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead><tr><th>Título</th><th>Editorial</th><th>Precio</th><th>Disponibilidad</th></tr></thead>
                    <tbody>
                    <?php foreach ($demoTitles as $book): ?>
                        <tr>
                            <td><div class="entity-title"><span class="entity-icon"><i class="bi bi-book"></i></span><div><strong><?= escape($book['titulo']) ?></strong><small><?= escape($book['id']) ?> · <?= escape($book['tipo']) ?></small></div></div></td>
                            <td><?= escape($book['editorial']) ?></td>
                            <td><strong><?= money($book['precio']) ?></strong></td>
                            <td><div class="d-flex align-items-center gap-2"><div class="stock-bar"><span style="width: <?= min(100, $book['stock'] * 3) ?>%"></span></div><small><?= escape($book['stock']) ?></small></div></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <div class="col-xl-4">
        <section class="panel-card h-100">
            <div class="panel-heading"><div><h2>Accesos rápidos</h2><p>Operaciones frecuentes.</p></div></div>
            <ul class="quick-list">
                <li><i class="bi bi-shop-window"></i><div class="flex-grow-1"><strong>Nueva tienda</strong><small>Registrar punto de distribución</small></div><a class="stretched-link" href="<?= escape($baseUrl) ?>/views/tiendas/crear.php" aria-label="Nueva tienda"></a></li>
                <li><i class="bi bi-journal-plus"></i><div class="flex-grow-1"><strong>Nuevo título</strong><small>Agregar libro al catálogo</small></div><a class="stretched-link" href="<?= escape($baseUrl) ?>/views/titulos/crear.php" aria-label="Nuevo título"></a></li>
                <li><i class="bi bi-building"></i><div class="flex-grow-1"><strong>Editoriales</strong><small>Gestionar datos editoriales</small></div></li>
            </ul>
        </section>
    </div>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>

