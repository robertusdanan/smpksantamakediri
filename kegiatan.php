<?php
$active = 'kegiatan';
$pageTitle = 'Kegiatan';
include __DIR__ . '/includes/header.php';

$years = array_values(array_unique(array_column($kegiatan, 0)));
rsort($years);
$tahun = $_GET['tahun'] ?? 'semua';
if ($tahun !== 'semua' && !in_array($tahun, $years, true)) $tahun = 'semua';
$list = array_values(array_filter($kegiatan, fn($k) => $tahun === 'semua' || $k[0] === $tahun));

page_header('Kegiatan', 'Dokumentasi kegiatan belajar, perayaan, dan pelayanan di SMP Katolik Santa Maria Kediri.');
?>

<section class="section">
  <div class="wrap">
    <nav class="tabs" aria-label="Filter tahun">
      <a href="kegiatan.php" class="<?= $tahun === 'semua' ? 'on' : '' ?>">Semua</a>
      <?php foreach ($years as $y): ?>
        <a href="kegiatan.php?tahun=<?= e($y) ?>" class="<?= $tahun === $y ? 'on' : '' ?>"><?= e($y) ?></a>
      <?php endforeach; ?>
    </nav>

    <?php if (!$list): ?>
      <p class="lead">Belum ada kegiatan untuk tahun ini.</p>
    <?php else: ?>
    <div class="cards">
      <?php foreach ($list as $i => [$thn, $tgl, $judul, $isi, $tag]): ?>
        <article class="card">
          <div class="thumb t<?= ($i % 3) + 1 ?>"><span class="thumb-tag"><?= e($tag) ?></span></div>
          <div class="card-body">
            <time><?= e($tgl) ?></time>
            <h3><?= e($judul) ?></h3>
            <p><?= e($isi) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
