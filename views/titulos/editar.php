<?php

declare(strict_types=1);

$pageTitle = 'Editar título';
$activePage = 'titulos';
require __DIR__ . '/../../data/demo.php';
$id = (string) ($_GET['id'] ?? $demoTitles[0]['id']);
$book = $demoTitles[array_search($id, array_column($demoTitles, 'id'), true)] ?? $demoTitles[0];
require __DIR__ . '/../../includes/header.php';
?>
<div class="section-title"><div><h2>Editar título</h2><p>Actualiza la información editorial y comercial.</p></div><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/titulos/index.php">Cancelar</a></div>
<form class="panel-card needs-validation" novalidate>
    <div class="row g-4">
        <div class="col-md-8"><label class="form-label" for="titulo">Título</label><input class="form-control" id="titulo" name="titulo" value="<?= escape($book['titulo']) ?>" required></div>
        <div class="col-md-4"><label class="form-label" for="codigo">Código</label><input class="form-control" id="codigo" name="codigo" value="<?= escape($book['id']) ?>" readonly></div>
        <div class="col-md-6"><label class="form-label" for="editorial">Editorial</label><select class="form-select" id="editorial" name="id_pub"><?php foreach ($demoPublishers as $publisher): ?><option <?= $publisher['nombre'] === $book['editorial'] ? 'selected' : '' ?>><?= escape($publisher['nombre']) ?></option><?php endforeach; ?></select></div>
        <div class="col-md-6"><label class="form-label" for="tipo">Categoría</label><select class="form-select" id="tipo" name="tipo"><option selected><?= escape($book['tipo']) ?></option><option>Tecnología</option><option>Narrativa</option><option>Negocios</option></select></div>
        <div class="col-md-6"><label class="form-label" for="precio">Precio</label><input class="form-control" id="precio" name="precio" type="number" min="0" step="0.01" value="<?= escape($book['precio']) ?>" required></div>
        <div class="col-md-6"><label class="form-label" for="stock">Stock</label><input class="form-control" id="stock" name="stock" type="number" min="0" value="<?= escape($book['stock']) ?>"></div>
    </div>
    <div class="d-flex justify-content-end gap-2 border-top mt-4 pt-4"><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/titulos/index.php">Volver</a><button class="btn btn-primary px-4" type="submit"><i class="bi bi-floppy me-2"></i>Guardar cambios</button></div>
</form>
<?php require __DIR__ . '/../../includes/footer.php'; ?>

