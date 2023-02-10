<!-- Kelas Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light rounded p-4">
    <div class="col-md-10">
      <h3 class="my-3 text-center"><?= $title; ?></h3>
      <!-- Form Tambah Data kelas -->
      <form action="<?= base_url('kelas/updateKelas/').$kelas['id_kelas']; ?>" method="post">
      <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas']; ?>">
        <div class="row mb-3">
          <label for="kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
          <div class="col-sm-10">
            <input type="text" name="nama_kelas" class="form-control" value="<?= $kelas['nama_kelas']; ?>" id="kelas" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="kompetensi_keahlian" class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
          <div class="col-sm-10">
            <input type="text" name="kompetensi_keahlian" class="form-control" value="<?= $kelas['kompetensi_keahlian']; ?>" id="kompetensi_keahlian" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-6">
            <button type="submit" class="btn btn-sm btn-success">Save Change</button>
            <a href="<?= base_url('kelas') ?>" class="btn btn-sm btn-secondary">Cancel</a>
          </div>
        </div>
      </form>
      <!-- End Form Tambah Data kelas -->
    </div>
  </div>
</div>
<!-- Kelas End -->