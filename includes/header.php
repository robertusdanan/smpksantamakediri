<?php
require_once __DIR__ . '/data.php';
$active = $active ?? 'beranda';
$pageTitle = isset($pageTitle) ? $pageTitle . ' | ' . SCHOOL_NAME : SCHOOL_NAME . ' | ' . SCHOOL_TAGLINE;
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($pageTitle) ?></title>
<meta name="description" content="<?= e(SCHOOL_NAME) ?> - <?= e(SCHOOL_TAGLINE) ?>. Sekolah Penggerak dan Adiwiyata di Kota Kediri.">
<link rel="icon" href="assets/img/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,700&family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<a class="skip" href="#main">Langsung ke konten</a>

<div class="topbar">
  <div class="wrap">
    <span><?= e(SCHOOL_PHONE) ?></span>
    <span><?= e(SCHOOL_EMAIL) ?></span>
    <span class="topbar-addr">Jl. Brawijaya No.63, Kediri</span>
  </div>
</div>

<header class="site-header" id="top">
  <div class="wrap bar">
    <a class="brand" href="index.php">
      <img src="assets/img/logo.png" alt="Logo <?= e(SCHOOL_NAME) ?>" width="44" height="50">
      <span><strong>SMP Katolik</strong><br>Santa Maria Kediri</span>
    </a>
    <button class="burger" aria-label="Buka menu" aria-expanded="false" aria-controls="menu"><span></span><span></span><span></span></button>
    <nav id="menu" class="menu" aria-label="Menu utama">
      <?php foreach ($nav as $key => [$label, $href]): ?>
        <a href="<?= e($href) ?>" class="<?= $key === 'ppdb' ? 'btn btn-sm' : '' ?><?= $key === $active ? ' is-active' : '' ?>"<?= $key === $active ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
</header>
<main id="main">
