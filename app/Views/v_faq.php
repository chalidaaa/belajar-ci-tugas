<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Frequently Asked Questions (F.A.Q)</h2>

<div class="accordion" id="faqAccordion">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Bagaimana cara membuat akun di aplikasi ini?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Saat ini fitur pendaftaran belum tersedia, jadi akun dibuat oleh admin secara manual.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Bagaimana cara membeli produk?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Login terlebih dahulu, kemudian pilih produk dan klik tombol "Tambah ke Keranjang". Setelah selesai, lakukan checkout di halaman keranjang.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Apakah tersedia diskon untuk produk tertentu?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Ya, ada fitur diskon yang otomatis diterapkan jika ada data diskon yang aktif pada tanggal pembelian.
      </div>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
