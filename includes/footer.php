</main>

<section class="cta-band">
  <div class="wrap cta-inner">
    <div>
      <h2>Ada pertanyaan tentang pendaftaran?</h2>
      <p>Tim kami siap menjawab melalui WhatsApp pada jam kerja sekolah.</p>
    </div>
    <div class="cta-actions">
      <a class="btn btn-wa" href="<?= e(wa_link('Halo SMP Katolik Santa Maria Kediri, saya ingin bertanya tentang pendaftaran.')) ?>" target="_blank" rel="noopener">Chat WhatsApp</a>
      <a class="btn btn-ghost" href="ppdb.php">Lihat info PPDB</a>
    </div>
  </div>
</section>

<footer class="site-footer">
  <div class="wrap foot-grid">
    <div>
      <a class="brand brand-light" href="index.php">
        <img src="assets/img/logo.png" alt="" width="44" height="50">
        <span><strong>SMP Katolik</strong><br>Santa Maria Kediri</span>
      </a>
      <p class="foot-note">"Encourage one another, and may your mutual good example speak louder than any words can."<br><em>Semangat Vinsensian</em></p>
    </div>
    <div>
      <h3>Halaman</h3>
      <ul>
        <?php foreach ($nav as [$label, $href]): ?>
          <li><a href="<?= e($href) ?>"><?= e($label) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div>
      <h3>Hubungi kami</h3>
      <ul>
        <li><?= e(SCHOOL_ADDRESS) ?></li>
        <li><a href="tel:+62354687084"><?= e(SCHOOL_PHONE) ?></a></li>
        <li><a href="mailto:<?= e(SCHOOL_EMAIL) ?>"><?= e(SCHOOL_EMAIL) ?></a></li>
      </ul>
      <p class="socials">
        <?php foreach ($social as $name => $url): ?>
          <a href="<?= e($url) ?>" target="_blank" rel="noopener"><?= e($name) ?></a>
        <?php endforeach; ?>
      </p>
    </div>
    <div class="map">
      <iframe title="Peta lokasi sekolah" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        src="https://maps.google.com/maps?q=SMP%20Katolik%20Santa%20Maria%20Kediri&amp;z=15&amp;output=embed"></iframe>
    </div>
  </div>
  <div class="wrap copy">&copy; <?= date('Y') ?> <?= e(SCHOOL_NAME) ?>. Hak cipta dilindungi.</div>
</footer>

<a class="wa-float" href="<?= e(wa_link('Halo SMP Katolik Santa Maria Kediri, saya ingin bertanya.')) ?>" target="_blank" rel="noopener" aria-label="Chat WhatsApp">
  <svg viewBox="0 0 32 32" width="28" height="28" aria-hidden="true"><path fill="#fff" d="M16 3C9 3 3.4 8.6 3.4 15.5c0 2.3.6 4.4 1.7 6.3L3 29l7.4-1.9a12.5 12.5 0 0 0 5.6 1.4C23 28.5 28.600 22.900 28.600 16S23 3 16 3zm0 22.800c-1.800 0-3.600-.5-5.100-1.400l-.4-.2-4.400 1.100 1.200-4.300-.3-.4a10 10 0 0 1-1.600-5.400C5.400 10 10.200 5.400 16 5.400S26.600 10 26.600 16 21.800 25.800 16 25.800zm5.800-7.500c-.3-.2-1.900-.9-2.200-1-.3-.1-.5-.2-.7.200-.2.300-.8 1-1 1.200-.2.200-.4.200-.7.100-.3-.2-1.400-.5-2.600-1.600-1-.9-1.600-1.900-1.800-2.300-.2-.3 0-.5.100-.7l.5-.6c.2-.2.200-.3.300-.5.100-.2.100-.4 0-.6l-1-2.300c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.6.100-.9.400-.3.300-1.200 1.200-1.200 2.900s1.300 3.400 1.400 3.600c.2.200 2.500 3.800 6 5.300.8.400 1.500.6 2 .8.800.3 1.600.2 2.200.1.700-.1 1.900-.8 2.200-1.500.3-.7.300-1.400.2-1.500-.1-.2-.3-.3-.6-.4z"/></svg>
</a>

<script src="assets/js/main.js"></script>
</body>
</html>
