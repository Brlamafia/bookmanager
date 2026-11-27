<?php

declare(strict_types=1);

$pageTitle = 'Editar tienda';
$activePage = 'tiendas';
require __DIR__ . '/../../data/demo.php';
$id = (int) ($_GET['id'] ?? 1);
$store = $demoStores[array_search($id, array_column($demoStores, 'id'), true)] ?? $demoStores[0];
require __DIR__ . '/../../includes/header.php';
?>
<div class="section-title"><div><h2>Editar tienda</h2><p>Actualiza los datos del establecimiento seleccionado.</p></div><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/tiendas/index.php">Cancelar</a></div>
<form class="panel-card needs-validation" novalidate>
    <div class="row g-4">
        <div class="col-md-7"><label class="form-label" for="nombre">Nombre de la tienda</label><input class="form-control" id="nombre" name="nombre" value="<?= escape($store['nombre']) ?>" required><div class="invalid-feedback">Escribe el nombre de la tienda.</div></div>
        <div class="col-md-5"><label class="form-label" for="estado">Estado</label><select class="form-select" id="estado" name="estado"><option <?= $store['estado'] === 'Activa' ? 'selected' : '' ?>>Activa</option><option <?= $store['estado'] === 'Revisión' ? 'selected' : '' ?>>Revisión</option><option>Inactiva</option></select></div>
        <div class="col-md-6"><label class="form-label" for="ciudad">Ciudad</label><input class="form-control" id="ciudad" name="ciudad" value="<?= escape($store['ciudad']) ?>" required></div>
        <div class="col-md-6"><label class="form-label" for="telefono">Teléfono</label><input class="form-control" id="telefono" name="telefono" value="<?= escape($store['telefono']) ?>"></div>
        <div class="col-12"><label class="form-label" for="direccion">Dirección</label><textarea class="form-control" id="direccion" name="direccion" rows="3">Av. Principal #24</textarea></div>
    </div>
    <div class="d-flex justify-content-end gap-2 border-top mt-4 pt-4"><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/tiendas/index.php">Volver</a><button class="btn btn-primary px-4" type="submit"><i class="bi bi-floppy me-2"></i>Guardar cambios</button></div>
</form>
<?php require __DIR__ . '/../../includes/footer.php'; ?>

