<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-12">
        <h3>Data Training <a href="<?= url_to('training.create') ?>" class="btn btn-success">Add Data</a></h3>
        <hr />

        <!-- menampilkan pesan -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-info">
                <strong>Success!!</strong>
                <p>
                    <?= session()->getFlashdata('success') ?>
                </p>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <strong>Whoops Salah!!</strong>
                <p>
                    <?= session()->getFlashdata('error') ?>
                </p>
            </div>
        <?php endif; ?>
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Bangunan</th>
                    <th>Status Rumah</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($trainings as $p) :
                ?>
                    <tr>
                        <td> <?= $nomor ?></td>
                        <td> <?= $p->nama ?></td>
                        <td> <?= $p->umur ?></td>
                        <td> <?= $p->jenis_bangunan ?> </td>
                        <td> <?= $p->status_rumah ?> </td>
                        <td> <?= $p->pekerjaan ?> </td>
                        <td> <?= $p->penghasilan ?> </td>
                        <td> <?= $p->status ?> </td>



                        <td>
                            <a href="<?= site_url('/admin/training/edit/' . $p->training_id) ?>" class="btn btn-primary">Edit</a>
                            <a href="<?= site_url('/admin/training/delete/' . $p->training_id) ?>" class="btn btn-danger">Trash</a>

                        </td>
                    </tr>
                <?php $nomor++;endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>