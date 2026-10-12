<?php
$active = 'berita';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Detail artikel
if ($id && isset($berita[$id])) {
    [$judul, $tgl, $kat, $ringkas, $isi] = $berita[$id];
    $pageTitle = $judul;
    include __DIR__ . '/includes/header.php';
    page_header($judul, $ringkas);
    ?>
    <section class="section">
      <div class="wrap article">
        <a class="back" href="berita.php">Kembali ke berita</a>
        <p class="meta"><span class="badge"><?= e($kat) ?></span> &nbsp;<?= e($tgl) ?></p>
        <?php foreach ($isi as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
      </div>
    </section>
    <?php
    include __DIR__ . '/includes/footer.php';
    exit;
}

// Daftar berita
$pageTitle = 'Berita';
include __DIR__ . '/includes/header.php';
page_header('Berita', 'Cerita, sejarah, dan prestasi dari keluarga besar SMP Katolik Santa Maria Kediri.');

$ids = array_keys($berita);
$firstId = $ids[0];
[$fj, $ft, $fk, $fr] = $berita[$firstId];
?>
<section class="section">
  <div class="wrap">
    <a class="featured" href="berita.php?id=<?= $firstId ?>">
      <div class="thumb"><span class="thumb-tag"><?= e($fk) ?></span></div>
      <div class="card-body">
        <time><?= e($ft) ?></time>
        <h2><?= e($fj) ?></h2>
        <p><?= e($fr) ?></p>
        <span class="more">Baca selengkapnya</span>
      </div>
    </a>

    <div class="cards">
      <?php $n = 0; foreach ($berita as $bid => [$j, $t, $k, $r]): if ($bid === $firstId) continue; $n++; ?>
        <a class="card" href="berita.php?id=<?= $bid ?>">
          <div class="thumb t<?= ($n % 3) + 1 ?>"><span class="thumb-tag"><?= e($k) ?></span></div>
          <div class="card-body">
            <time><?= e($t) ?></time>
            <h3><?= e($j) ?></h3>
            <p><?= e($r) ?></p>
            <span class="more">Baca selengkapnya</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
