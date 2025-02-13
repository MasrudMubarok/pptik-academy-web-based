<div class="py-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- <h3 class="display-3">Ubah Data Siswa</h3> -->
      </div>
    </div>
  </div>
</div>
<?php if ($this->session->flashdata('error_message')) { ?>
  <div class="py-1">
    <div class="container">
      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Oh snap!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
        <p><?= $this->session->flashdata('error_message') ?></p>
      </div>
    </div>
  </div>
<?php } ?>
<div class="py-1">
  <div class="container">
    <div class="alert alert-primary" role="alert">
      <p><b>Informasi!</b> Field yang ditandai harus diisi dengan benar.</p>
    </div>
  </div>
</div>
<div class="py-4">
  <div class="container">
    <form id="c_form-h" method="post" action="<?= base_url('siswa/update1'); ?>" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="id_siswa" class="col-2 col-form-label">ID*</label>
        <div class="col-3">
          <input type="text" class="form-control" name="id_siswa" value="<?= $swa->id_siswa ?>" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="nama_siswa" class="col-2 col-form-label">Nama Siswa*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="nama_siswa" value="<?= $swa->nama_siswa ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="username" class="col-2 col-form-label">Username*</label>
        <div class="col-3">
          <input type="text" class="form-control" name="username" value="<?= $swa->username ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-2 col-form-label">Password*</label>
        <div class="col-3">
          <input type="text" class="form-control" name="password" value="<?= $swa->password ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-2 col-form-label">Email*</label>
        <div class="col-3">
          <input type="text" class="form-control" name="email" value="<?= $swa->email ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="kota" class="col-2 col-form-label">Kota*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="kota" value="<?= $swa->kota ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="negara" class="col-2 col-form-label">Negara*</label>
        <div class="col-5">
          <input type="text" class="form-control" name="negara" value="<?= $swa->negara ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
  </div>
</div>