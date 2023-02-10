<!-- Petugas Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light rounded p-4">
    <div class="col-md-10">
      <h3 class="my-3 text-center"><?= $title; ?></h3>
      <!-- Form Tambah Data Petugas -->
      <form action="<?= base_url('Petugas/addPetugas') ?>" method="post">
        <div class="row mb-3">
          <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
          <div class="col-sm-10">
            <input type="text" name="tahun" class="form-control" id="tahun" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
          <div class="col-sm-10">
            <input type="number" name="nominal" class="form-control" id="nominal" placeholder="Rp." required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-6">
            <button type="submit" class="btn btn-sm btn-success">Save Change</button>
            <a href="<?= base_url('Petugas') ?>" class="btn btn-sm btn-secondary">Cancel</a>
          </div>
        </div>
      </form>
      <!-- End Form Tambah Data Petugas -->
    </div>
  </div>
</div>
<!-- Petugas End -->