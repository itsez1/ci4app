<?php $this->extend('layout/template'); ?>


<?php $this->section('content'); ?>




<div class="container">
    <div class="row">
        <div class="col">

        <h2 class='mt-2'>Detail Komik</h2>

        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/img/<?= $komik['sampul']; ?>" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body ml-5">
        <h5 class="card-title"><?= $komik['judul'];?></h5>
        <p class="card-text">Penulis: <b><?= $komik['penulis']; ?></b></p>
        <p class="card-text"><small class="text-muted">Penerbit : <b><?= $komik['penerbit']; ?></b></small></p>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
<br><br>
            <a href="/komik">Kembali kedaftar komik</a>
        
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</div>

<?php $this->endsection(); ?>