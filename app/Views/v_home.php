<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<!-- Table with stripped rows -->
<div class="row">
    <?php foreach ($product as $key => $item) : 
        $hargaSetelahDiskon = $item['harga'];
            if (session()->has('diskon')) {
                $hargaSetelahDiskon = $item['harga'] - session()->get('diskon');
            }
            ?>
        <div class="col-lg-6">
            <?= form_open('keranjang') ?>
            <?= csrf_field() ?>
            <?php
            echo form_hidden('id', $item['id']);
            echo form_hidden('nama', $item['name']);
            echo form_hidden('harga', strval($hargaSetelahDiskon));
            echo form_hidden('foto', $item['foto']);
            ?>
            <div class="card">
                <div class="card-body">
                    <img src="<?php echo base_url() . "img/" . $item['foto'] ?>" alt="..." width="300px">
                    <h5 class="card-title">
                        <?php
                        $hargaAsli = $item['harga'];
                        $diskon = session()->get('diskon');
                        ?>
                        <?= esc($item['name']) ?><br>

                        <?php if ($diskon): ?>
                            <span style="text-decoration: line-through; color: gray;">
                                <?= number_to_currency($hargaAsli, 'IDR') ?>
                            </span><br>
                            <span style="color: green; font-weight: bold;">
                                <?= number_to_currency($hargaAsli - $diskon, 'IDR') ?>
                            </span>
                        <?php else: ?>
                            <?= number_to_currency($hargaAsli, 'IDR') ?>
                        <?php endif; ?>
                    </h5>
                    <button type="submit" class="btn btn-info rounded-pill">Beli</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    <?php endforeach ?>
</div>
<!-- End Table with stripped rows -->
<?= $this->endSection() ?>