<?php

declare(strict_types=1);

$pageTitle = 'Tiendas';
$activePage = 'tiendas';
require __DIR__ . '/../../data/demo.php';
require __DIR__ . '/../../includes/header.php';
?>
<div class="section-title">
    <div><h2>Red de tiendas</h2><p>Administra los puntos de venta y distribución.</p></div>
    <div class="page-actions"><button class="btn btn-outline-secondary"><i class="bi bi-download me-2"></i>Exportar</button><a class="btn btn-primary" href="<?= escape($baseUrl) ?>/views/tiendas/crear.php"><i class="bi bi-plus-lg me-2"></i>Nueva tienda</a></div>
</div>
<section class="panel-card">
    <div class="panel-heading"><div><h2>Tiendas registradas</h2><p><?= count($demoStores) ?> establecimientos en el directorio.</p></div><div class="input-group" style="max-width:280px"><span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span><input class="form-control border-start-0" type="search" placeholder="Buscar tienda"></div></div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead><tr><th>Tienda</th><th>Ciudad</th><th>Teléfono</th><th>Estado</th><th class="text-end">Acciones</th></tr></thead>
            <tbody>
            <?php foreach ($demoStores as $store): ?>
                <tr>
                    <td><div class="entity-title"><span class="entity-icon"><i class="bi bi-shop"></i></span><div><strong><?= escape($store['nombre']) ?></strong><small>ST-<?= str_pad((string) $store['id'], 3, '0', STR_PAD_LEFT) ?></small></div></div></td>
                    <td><?= escape($store['ciudad']) ?></td>
                    <td><?= escape($store['telefono']) ?></td>
                    <td><span class="status-badge <?= $store['estado'] === 'Activa' ? 'success' : 'warning' ?>"><?= escape($store['estado']) ?></span></td>
                    <td class="text-end"><a class="btn btn-sm btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/tiendas/editar.php?id=<?= escape($store['id']) ?>" aria-label="Editar"><i class="bi bi-pencil"></i></a> <a class="btn btn-sm btn-outline-danger" href="<?= escape($baseUrl) ?>/views/tiendas/eliminar.php?id=<?= escape($store['id']) ?>" aria-label="Eliminar"><i class="bi bi-trash3"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php require __DIR__ . '/../../includes/footer.php'; ?>

