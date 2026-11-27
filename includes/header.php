<?php

declare(strict_types=1);

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/functions.php';

$pageTitle = $pageTitle ?? 'Panel';
$activePage = $activePage ?? 'inicio';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panel administrativo BookManager">
    <title><?= escape($pageTitle) ?> | <?= APP_NAME ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="<?= escape($baseUrl) ?>/assets/css/app.css" rel="stylesheet">
</head>
<body>
<div class="app-shell">
    <?php require __DIR__ . '/sidebar.php'; ?>
    <div class="app-main">
        <header class="topbar">
            <button class="btn sidebar-toggle d-lg-none" type="button" aria-label="Abrir navegación" data-sidebar-toggle>
                <i class="bi bi-list"></i>
            </button>
            <div>
                <p class="eyebrow mb-1">Panel administrativo</p>
                <h1 class="h4 mb-0"><?= escape($pageTitle) ?></h1>
            </div>
            <div class="topbar-actions">
                <button class="btn icon-button" type="button" aria-label="Notificaciones">
                    <i class="bi bi-bell"></i>
                    <span class="notification-dot"></span>
                </button>
                <div class="user-chip">
                    <span class="avatar">BR</span>
                    <span class="d-none d-sm-block">
                        <strong>Bryant Romano</strong>
                        <small>Administrador</small>
                    </span>
                </div>
            </div>
        </header>
        <main class="content-area">

