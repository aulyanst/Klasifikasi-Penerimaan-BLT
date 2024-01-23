<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-12 col-md-6">
        <form action="<?= base_url('/admin/testing/update'); ?>" method="post">

            <?= csrf_field() ?>

            <input type="hidden" name="testingid" value="<?= $testing->testing_id ?>">

            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="testingnama" class="form-control" value="<?= $testing->testingnama ?>" required autofocus>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Umur</label>
                <input type="text" name="testingumur" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jenis Bangunan</label>
                <input type="text" name="testingjenis_bangunan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status Rumah</label>
                <input type="text" name="testingstatus_rumah" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pekerjaan</label>
                <input type="text" name="testingpekerjaan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penghasilan</label>
                <input type="text" name="testingpenghasilan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status</label>
                <input type="text" name="testingstatus" class="form-control" required>
            </div>





            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>