<?php

declare(strict_types=1);

$pageTitle = 'Eliminar título';
$activePage = 'titulos';
require __DIR__ . '/../../data/demo.php';
$id = (string) ($_GET['id'] ?? $demoTitles[0]['id']);
$book = $demoTitles[array_search($id, array_column($demoTitles, 'id'), true)] ?? $demoTitles[0];
require __DIR__ . '/../../includes/header.php';
?>
<div class="mx-auto" style="max-width:650px"><section class="panel-card text-center py-5"><span class="metric-icon mx-auto mb-3" style="color:#b42318;background:#feeceb"><i class="bi bi-trash3"></i></span><h2 class="h4">¿Eliminar este título?</h2><p class="text-secondary">Se eliminará <strong><?= escape($book['titulo']) ?></strong> del catálogo. Esta acción no podrá deshacerse después de conectar la base de datos.</p><div class="d-flex justify-content-center gap-2 mt-4"><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/titulos/index.php">Conservar título</a><button class="btn btn-danger" type="button" data-confirm="¿Confirmas que deseas eliminar este título?">Eliminar título</button></div></section></div>
<?php require __DIR__ . '/../../includes/footer.php'; ?>

