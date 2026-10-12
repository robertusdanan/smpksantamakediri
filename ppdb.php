<?php
require_once __DIR__ . '/includes/data.php';

// Formulir minat: dirangkum menjadi pesan WhatsApp (tanpa database)
$error = '';
$val = ['nama' => '', 'asal' => '', 'ortu' => '', 'hp' => '', 'catatan' => ''];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($val as $k => $_) {
        $val[$k] = trim(strip_tags($_POST[$k] ?? ''));
    }
    if ($val['nama'] === '' || $val['ortu'] === '' || $val['hp'] === '') {
        $error = 'Nama calon siswa, nama orang tua, dan nomor HP wajib diisi.';
    } else {
        $pesan = "Halo SMP Katolik Santa Maria Kediri, saya ingin mendaftar.\n"
            . "Nama calon siswa: {$val['nama']}\n"
            . "Asal SD/MI: " . ($val['asal'] ?: '-') . "\n"
            . "Nama orang tua/wali: {$val['ortu']}\n"
            . "No. HP: {$val['hp']}\n"
            . "Catatan: " . ($val['catatan'] ?: '-');
        header('Location: ' . wa_link($pesan));
        exit;
    }
}

$active = 'ppdb';
$pageTitle = 'PPDB Online';
include __DIR__ . '/includes/header.php';
page_header('Penerimaan Peserta Didik Baru', 'Daftar secara online dari rumah. Panitia akan menghubungi orang tua melalui WhatsApp.');
?>

<section class="section">
  <div class="wrap split">
    <div>
      <span class="cross" aria-hidden="true"></span>
      <h2>Alur pendaftaran</h2>
      <ol class="steps">
        <?php foreach ($alur as [$t, $d]): ?>
          <li><h3><?= e($t) ?></h3><p><?= e($d) ?></p></li>
        <?php endforeach; ?>
      </ol>

      <h2 style="margin-top:30px">Persyaratan</h2>
      <ul class="checklist">
        <?php foreach ($syarat as $s): ?><li><?= e($s) ?></li><?php endforeach; ?>
      </ul>
      <p style="margin-top:22px"><a class="btn btn-gold" href="<?= e(PPDB_FORM) ?>" target="_blank" rel="noopener">Buka formulir resmi</a></p>
    </div>

    <div class="panel" id="form">
      <h2 style="font-size:1.7rem">Tanya atau daftar lewat WhatsApp</h2>
      <p style="color:var(--muted);margin-bottom:20px">Isi data singkat, lalu kami teruskan ke WhatsApp sekolah.</p>
      <?php if ($error): ?><div class="alert" role="alert"><?= e($error) ?></div><?php endif; ?>
      <form class="form" method="post" action="ppdb.php#form" novalidate>
        <label>Nama calon siswa
          <input type="text" name="nama" value="<?= e($val['nama']) ?>" required autocomplete="off"></label>
        <label>Asal SD/MI
          <input type="text" name="asal" value="<?= e($val['asal']) ?>"></label>
        <div class="row2">
          <label>Nama orang tua/wali
            <input type="text" name="ortu" value="<?= e($val['ortu']) ?>" required></label>
          <label>Nomor HP
            <input type="tel" name="hp" value="<?= e($val['hp']) ?>" required inputmode="tel"></label>
        </div>
        <label>Catatan atau pertanyaan
          <textarea name="catatan" rows="3"><?= e($val['catatan']) ?></textarea></label>
        <button class="btn btn-wa" type="submit">Kirim lewat WhatsApp</button>
      </form>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
