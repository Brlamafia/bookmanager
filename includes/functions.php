<?php

declare(strict_types=1);

function escape(string|int|float|null $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function money(float $value): string
{
    return 'RD$ ' . number_format($value, 2);
}

function validateStore(array $input): array
{
    $errors = [];

    if (trim((string) ($input['nombre'] ?? '')) === '') {
        $errors['nombre'] = 'Escribe el nombre de la tienda.';
    }

    if (trim((string) ($input['ciudad'] ?? '')) === '') {
        $errors['ciudad'] = 'Selecciona o escribe una ciudad.';
    }

    if (($input['telefono'] ?? '') !== '' && !preg_match('/^[0-9+()\-\s]{7,20}$/', (string) $input['telefono'])) {
        $errors['telefono'] = 'Usa un número de teléfono válido.';
    }

    return $errors;
}

function validateTitle(array $input): array
{
    $errors = [];

    if (trim((string) ($input['titulo'] ?? '')) === '') {
        $errors['titulo'] = 'Escribe el nombre del título.';
    }

    if (trim((string) ($input['id_pub'] ?? '')) === '') {
        $errors['id_pub'] = 'Selecciona una editorial.';
    }

    $price = filter_var($input['precio'] ?? null, FILTER_VALIDATE_FLOAT);
    if ($price === false || $price < 0) {
        $errors['precio'] = 'El precio debe ser un número igual o mayor que cero.';
    }

    return $errors;
}

