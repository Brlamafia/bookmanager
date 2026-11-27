<?php

declare(strict_types=1);

const APP_NAME = 'BookManager';
const APP_TAGLINE = 'Biblioteca organizada, decisiones más claras';

$baseUrl = getenv('BOOKMANAGER_BASE_URL');
$baseUrl = $baseUrl === false ? '/bookmanager' : rtrim($baseUrl, '/');

