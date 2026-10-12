<?php
$active = 'fasilitas';
$pageTitle = 'Fasilitas';
include __DIR__ . '/includes/header.php';
page_header('Fasilitas', 'Ruang belajar yang nyaman dan lingkungan asri untuk mendukung tumbuh kembang siswa.');
?>

<section class="section">
  <div class="wrap">
    <div class="fac">
      <?php foreach ($fasilitas as $i => [$nama, $isi, $tag]): ?>
        <article class="card">
          <div class="thumb t<?= ($i % 3) + 1 ?>"><span class="thumb-tag"><?= e($tag) ?></span></div>
          <div class="card-body"><h3><?= e($nama) ?></h3><p><?= e($isi) ?></p></div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="wrap">
    <div class="section-head">
      <span class="cross" aria-hidden="true"></span>
      <h2>Ekstrakurikuler</h2>
      <p>Kegiatan di luar jam pelajaran untuk mengembangkan karakter Pelajar Pancasila: berkebinekaan global, bergotong royong, kreatif, bernalar kritis, mandiri, serta beriman dan berakhlak mulia.</p>
    </div>
    <div class="ekskul">
      <?php foreach ($ekskul as [$n, $d]): ?>
        <div><h3><?= e($n) ?></h3><p><?= e($d) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
