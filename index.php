<?php
$active = 'beranda';
include __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <h1>Cerdas, terampil, dan berkarakter.</h1>
      <p>Sekolah Penggerak dan Adiwiyata di Kota Kediri. Kami mendampingi setiap siswa bertumbuh dalam ilmu, keterampilan, dan semangat Vinsensian.</p>
      <div class="actions">
        <a class="btn btn-gold" href="ppdb.php">Daftar PPDB Online</a>
        <a class="btn btn-ghost" href="<?= e(wa_link('Halo, saya ingin tahu lebih lanjut tentang SMP Katolik Santa Maria Kediri.')) ?>" target="_blank" rel="noopener">Chat WhatsApp</a>
      </div>
      <p class="hero-note">Bergerak dan berjalan bersama mewujudkan Kurikulum Merdeka.</p>
    </div>
    <img class="hero-crest" src="assets/img/logo.png" alt="Lambang SMP Katolik Santa Maria Kediri">
  </div>
</section>

<section class="stats">
  <div class="wrap stats-grid">
    <?php foreach ($stats as [$num, $label]): ?>
      <div class="stat"><b><?= e($num) ?></b><span><?= e($label) ?></span></div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="cross" aria-hidden="true"></span>
      <h2>Visi sekolah</h2>
      <p class="vision-quote">Terwujudnya insan pendidikan yang cerdas, berwawasan global, kompetitif, berkarakter Pancasila, yang berlandaskan semangat Vinsensian.</p>
      <div class="mapel" aria-label="Mata pelajaran">
        <?php foreach ($mapel as $m): ?><span class="chip"><?= e($m) ?></span><?php endforeach; ?>
      </div>
    </div>
    <div class="verse">
      <p>"Encourage one another, and may your mutual good example speak louder than any words can."</p>
      <small>Semangat Vinsensian</small>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="wrap">
    <div class="section-head">
      <h2>Mengapa memilih SMPK Santa Maria?</h2>
      <p>Lingkungan belajar yang asri, guru yang mendampingi, dan nilai yang dihidupi setiap hari.</p>
    </div>
    <div class="pillars">
      <?php foreach ($keunggulan as [$t, $d]): ?>
        <div class="pillar"><h3><?= e($t) ?></h3><p><?= e($d) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="wrap">
    <div class="section-head">
      <h2>Ekstrakurikuler</h2>
      <p>Tiga belas pilihan kegiatan untuk menyalurkan minat dan bakat siswa.</p>
    </div>
    <div class="ekskul">
      <?php foreach ($ekskul as [$n, $d]): ?>
        <div><h3><?= e($n) ?></h3><p><?= e($d) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <h2>Kegiatan terbaru</h2>
      <p>Momen belajar, merayakan, dan melayani bersama.</p>
    </div>
    <div class="cards">
      <?php foreach (array_slice($kegiatan, 0, 3) as $i => [$thn, $tgl, $judul, $isi, $tag]): ?>
        <a class="card" href="kegiatan.php?tahun=<?= e($thn) ?>">
          <div class="thumb t<?= ($i % 3) + 1 ?>"><span class="thumb-tag"><?= e($tag) ?></span></div>
          <div class="card-body">
            <time><?= e($tgl) ?></time>
            <h3><?= e($judul) ?></h3>
            <p><?= e($isi) ?></p>
            <span class="more">Lihat kegiatan</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="wrap split">
    <div>
      <h2>Pengumuman</h2>
      <p class="lead">Informasi terbaru untuk siswa dan orang tua.</p>
      <p style="margin-top:22px"><a class="btn btn-sm" href="pengumuman.php">Semua pengumuman</a></p>
    </div>
    <div class="notices">
      <?php foreach (array_slice($pengumuman, 0, 3) as [$judul, $tgl, $kat, $isi]):
        $p = explode(' ', $tgl); ?>
        <div class="notice">
          <div class="date"><b><?= e($p[0]) ?></b><span><?= e($p[1] . ' ' . $p[2]) ?></span></div>
          <div><span class="badge"><?= e($kat) ?></span><h3><?= e($judul) ?></h3><p><?= e($isi) ?></p></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="section-head">
      <h2>Berita dan cerita sekolah</h2>
      <p>Mengenal sejarah, makna lambang, dan semangat yang menggerakkan sekolah kami.</p>
    </div>
    <div class="cards">
      <?php $n = 0; foreach ($berita as $id => [$judul, $tgl, $kat, $ringkas]): if ($n++ >= 3) break; ?>
        <a class="card" href="berita.php?id=<?= $id ?>">
          <div class="thumb t<?= $n ?>"><span class="thumb-tag"><?= e($kat) ?></span></div>
          <div class="card-body">
            <time><?= e($tgl) ?></time>
            <h3><?= e($judul) ?></h3>
            <p><?= e($ringkas) ?></p>
            <span class="more">Baca selengkapnya</span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
