<?=$this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-12">
        <h3>Data Product <a href="<?=url_to('product.create')?>"class="btn btn-success">Add Product</a></h3>
        <hr/>

        <!-- menampilkan pesan -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-info">
                <strong>Success!!</strong>
                <p>
                    <?= session()->getFlashdata('success') ?>
                </p>
            </div>
            <?php endif;?>

            <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <strong>Whoops Salah!!</strong>
                <p>
                    <?= session()->getFlashdata('error') ?>
                </p>
            </div>
            <?php endif;?>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th> 
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach ($products as $p) :
                ?>
                <tr>
                    <td> <?=$nomor?></td>
                    <td> <?=$p->product_name?></td>
                    <td> <?=$p->product_stock?></td>
                    <td>  <?=$p->product_description?> </td>
                    <td>
                        <a href="<?=site_url('/admin/product/edit/'.$p->product_id)?>" class="btn btn-primary">Edit</a>
                        <a href="<?=site_url('/admin/product/delete/'.$p->product_id)?>" class="btn btn-danger">Trash</a>

                    </td>
                </tr>
                <?php $nomor++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>