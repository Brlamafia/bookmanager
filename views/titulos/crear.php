<?php

declare(strict_types=1);

require_once __DIR__ . '/../../includes/functions.php';
require __DIR__ . '/../../data/demo.php';
$pageTitle = 'Nuevo título';
$activePage = 'titulos';
$errors = $_SERVER['REQUEST_METHOD'] === 'POST' ? validateTitle($_POST) : [];
$validated = $_SERVER['REQUEST_METHOD'] === 'POST' && $errors === [];
require __DIR__ . '/../../includes/header.php';
?>
<div class="section-title"><div><h2>Registrar título</h2><p>Agrega un libro y su información comercial.</p></div><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/titulos/index.php">Cancelar</a></div>
<?php if ($validated): ?><div class="alert alert-success"><i class="bi bi-check-circle me-2"></i>Los datos pasaron las validaciones y están listos para guardarse.</div><?php endif; ?>
<form class="panel-card needs-validation" method="post" novalidate>
    <div class="row g-4">
        <div class="col-md-8"><label class="form-label" for="titulo">Título del libro</label><input class="form-control <?= isset($errors['titulo']) ? 'is-invalid' : '' ?>" id="titulo" name="titulo" value="<?= escape($_POST['titulo'] ?? '') ?>" placeholder="Ej. Fundamentos de bases de datos" required><div class="invalid-feedback"><?= escape($errors['titulo'] ?? 'Escribe el título del libro.') ?></div></div>
        <div class="col-md-4"><label class="form-label" for="codigo">Código</label><input class="form-control" id="codigo" name="codigo" value="<?= escape($_POST['codigo'] ?? '') ?>" placeholder="BU1032"></div>
        <div class="col-md-6"><label class="form-label" for="id_pub">Editorial</label><select class="form-select <?= isset($errors['id_pub']) ? 'is-invalid' : '' ?>" id="id_pub" name="id_pub" required><option value="">Seleccionar editorial</option><?php foreach ($demoPublishers as $publisher): ?><option value="<?= escape($publisher['id']) ?>" <?= ($_POST['id_pub'] ?? '') === $publisher['id'] ? 'selected' : '' ?>><?= escape($publisher['nombre']) ?></option><?php endforeach; ?></select><div class="invalid-feedback"><?= escape($errors['id_pub'] ?? 'Selecciona una editorial.') ?></div></div>
        <div class="col-md-6"><label class="form-label" for="tipo">Categoría</label><select class="form-select" id="tipo" name="tipo"><option>Tecnología</option><option>Narrativa</option><option>Negocios</option><option>Educación</option></select></div>
        <div class="col-md-4"><label class="form-label" for="precio">Precio</label><div class="input-group"><span class="input-group-text">RD$</span><input class="form-control <?= isset($errors['precio']) ? 'is-invalid' : '' ?>" id="precio" name="precio" type="number" min="0" step="0.01" value="<?= escape($_POST['precio'] ?? '') ?>" required><div class="invalid-feedback"><?= escape($errors['precio'] ?? 'Indica un precio válido.') ?></div></div></div>
        <div class="col-md-4"><label class="form-label" for="stock">Stock inicial</label><input class="form-control" id="stock" name="stock" type="number" min="0" value="<?= escape($_POST['stock'] ?? 0) ?>"></div>
        <div class="col-md-4"><label class="form-label" for="fecha">Fecha de publicación</label><input class="form-control" id="fecha" name="fecha" type="date" value="<?= escape($_POST['fecha'] ?? '') ?>"></div>
        <div class="col-12"><label class="form-label" for="notas">Notas internas</label><textarea class="form-control" id="notas" name="notas" rows="3" placeholder="Detalles opcionales sobre la edición"><?= escape($_POST['notas'] ?? '') ?></textarea></div>
    </div>
    <div class="d-flex justify-content-end gap-2 border-top mt-4 pt-4"><a class="btn btn-outline-secondary" href="<?= escape($baseUrl) ?>/views/titulos/index.php">Volver</a><button class="btn btn-primary px-4" type="submit"><i class="bi bi-check2 me-2"></i>Validar título</button></div>
</form>
<?php require __DIR__ . '/../../includes/footer.php'; ?>

