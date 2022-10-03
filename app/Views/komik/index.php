<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<?php if(session()->getFlashdata('pesan')): ?>

<?php endif; ?>    

<div class="container">
    <div class="row">
        <div class="col">

            <h1>ini adalah komik</h1>
            <a href="/komik/create" class="btn btn-success mb-3">Tambah data komik</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">sampul</th>
                        <th scope="col">judul</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $k['judul']; ?></td>
                            <td><a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>