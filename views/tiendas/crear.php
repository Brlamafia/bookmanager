<?php

declare(strict_types=1);

require_once __DIR__ . '/../../includes/functions.php';
$pageTitle = 'Nueva tienda';
$activePage = 'tiendas';
$errors = $_SERVER['REQUEST_METHOD'] === 'POST' ? validateStore($_POST) : [];
$validated = $_SERVER['REQUEST_METHOD'] === 'POST' && $errors === [];
require __DIR__ . '/../../includes/header.php';
?>
<div class="section-title"><div><h2>Registrar tienda</h2><p>Completa la información del nuevo establecimiento.</p></div><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/tiendas/index.php"><i class="bi bi-x-lg me-2"></i>Cancelar</a></div>
<?php if ($validated): ?><div class="alert alert-success"><i class="bi bi-check-circle me-2"></i>Los datos pasaron las validaciones y están listos para guardarse.</div><?php endif; ?>
<form class="panel-card needs-validation" method="post" novalidate>
    <div class="row g-4">
        <div class="col-md-7"><label class="form-label" for="nombre">Nombre de la tienda</label><input class="form-control <?= isset($errors['nombre']) ? 'is-invalid' : '' ?>" id="nombre" name="nombre" value="<?= escape($_POST['nombre'] ?? '') ?>" placeholder="Ej. Librería Central" required><div class="invalid-feedback"><?= escape($errors['nombre'] ?? 'Escribe el nombre de la tienda.') ?></div></div>
        <div class="col-md-5"><label class="form-label" for="codigo">Código interno</label><input class="form-control" id="codigo" name="codigo" value="<?= escape($_POST['codigo'] ?? '') ?>" placeholder="ST-004"><div class="form-note mt-2">Se utilizará para reportes internos.</div></div>
        <div class="col-md-6"><label class="form-label" for="ciudad">Ciudad</label><input class="form-control <?= isset($errors['ciudad']) ? 'is-invalid' : '' ?>" id="ciudad" name="ciudad" value="<?= escape($_POST['ciudad'] ?? '') ?>" placeholder="Santo Domingo" required><div class="invalid-feedback"><?= escape($errors['ciudad'] ?? 'Indica una ciudad.') ?></div></div>
        <div class="col-md-6"><label class="form-label" for="telefono">Teléfono</label><input class="form-control <?= isset($errors['telefono']) ? 'is-invalid' : '' ?>" id="telefono" name="telefono" value="<?= escape($_POST['telefono'] ?? '') ?>" placeholder="809-555-0100"><div class="invalid-feedback"><?= escape($errors['telefono'] ?? '') ?></div></div>
        <div class="col-12"><label class="form-label" for="direccion">Dirección</label><textarea class="form-control" id="direccion" name="direccion" rows="3" placeholder="Calle, número y sector"><?= escape($_POST['direccion'] ?? '') ?></textarea></div>
    </div>
    <div class="d-flex justify-content-end gap-2 border-top mt-4 pt-4"><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/tiendas/index.php">Volver</a><button class="btn btn-primary px-4" type="submit"><i class="bi bi-check2 me-2"></i>Validar tienda</button></div>
</form>
<?php require __DIR__ . '/../../includes/footer.php'; ?>

