<?php

declare(strict_types=1);

$pageTitle = 'Títulos';
$activePage = 'titulos';
require __DIR__ . '/../../data/demo.php';
require __DIR__ . '/../../includes/header.php';
?>
<div class="section-title"><div><h2>Catálogo editorial</h2><p>Consulta precios, editoriales y disponibilidad.</p></div><div class="page-actions"><button class="btn btn-outline-secondary"><i class="bi bi-funnel me-2"></i>Filtrar</button><a class="btn btn-primary" href="<?= escape($baseUrl) ?>/views/titulos/crear.php"><i class="bi bi-plus-lg me-2"></i>Nuevo título</a></div></div>
<section class="panel-card">
    <div class="panel-heading"><div><h2>Inventario de títulos</h2><p><?= count($demoTitles) ?> libros registrados.</p></div><div class="input-group" style="max-width:300px"><span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span><input class="form-control border-start-0" type="search" placeholder="Buscar título o editorial"></div></div>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead><tr><th>Título</th><th>Editorial</th><th>Tipo</th><th>Precio</th><th>Stock</th><th class="text-end">Acciones</th></tr></thead>
            <tbody>
            <?php foreach ($demoTitles as $book): ?>
                <tr>
                    <td><div class="entity-title"><span class="entity-icon"><i class="bi bi-book"></i></span><div><strong><?= escape($book['titulo']) ?></strong><small><?= escape($book['id']) ?></small></div></div></td>
                    <td><?= escape($book['editorial']) ?></td><td><span class="badge text-bg-light border"><?= escape($book['tipo']) ?></span></td><td><strong><?= money($book['precio']) ?></strong></td><td><?= escape($book['stock']) ?> unidades</td>
                    <td class="text-end"><a class="btn btn-sm btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/titulos/editar.php?id=<?= escape($book['id']) ?>"><i class="bi bi-pencil"></i></a> <a class="btn btn-sm btn-outline-danger" href="<?= escape($baseUrl) ?>/views/titulos/eliminar.php?id=<?= escape($book['id']) ?>"><i class="bi bi-trash3"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php require __DIR__ . '/../../includes/footer.php'; ?>

