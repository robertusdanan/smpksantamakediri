<?php
$active = 'pengumuman';
$pageTitle = 'Pengumuman';
include __DIR__ . '/includes/header.php';
page_header('Pengumuman', 'Informasi resmi untuk siswa, orang tua, dan wali murid.');
?>

<section class="section">
  <div class="wrap split">
    <div class="notices">
      <?php foreach ($pengumuman as [$judul, $tgl, $kat, $isi]):
        $p = explode(' ', $tgl); ?>
        <article class="notice">
          <div class="date"><b><?= e($p[0]) ?></b><span><?= e($p[1] . ' ' . $p[2]) ?></span></div>
          <div>
            <span class="badge"><?= e($kat) ?></span>
            <h3><?= e($judul) ?></h3>
            <p><?= e($isi) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <aside class="panel">
      <span class="cross sm" aria-hidden="true"></span>
      <h3>Butuh informasi lebih lanjut?</h3>
      <p style="margin:10px 0 20px;color:var(--muted)">Hubungi sekolah melalui WhatsApp atau telepon <?= e(SCHOOL_PHONE) ?>.</p>
      <a class="btn btn-wa" href="<?= e(wa_link('Halo, saya ingin menanyakan pengumuman sekolah.')) ?>" target="_blank" rel="noopener">Chat WhatsApp</a>
    </aside>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
