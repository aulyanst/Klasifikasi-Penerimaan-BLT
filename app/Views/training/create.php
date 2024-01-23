<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-12 col-md-6">
        <form action="<?= base_url('/admin/training/store'); ?>" method="post">

            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Umur</label>
                <input type="text" name="umur" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jenis Bangunan</label>
                <input type="text" name="jenis_bangunan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status Rumah</label>
                <input type="text" name="status_rumah" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penghasilan</label>
                <input type="text" name="penghasilan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status</label>
                <input type="text" name="status" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>