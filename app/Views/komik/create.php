<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>




<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2 mb-2">Form Tambah Data Komik</h1>
            <form action="/komik/save" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input name="judul" type="text" class="form-control" id="judul" autofocus>
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input name="penulis" type="text" class="form-control" id="penulis">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input name="penerbit" type="text" class="form-control" id="penerbit">
                </div>
                <div class="mb-3">
                    <label for="sampul" class="form-label">Sampul</label>
                    <input name="sampul" type="text" class="form-control" id="sampul">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>