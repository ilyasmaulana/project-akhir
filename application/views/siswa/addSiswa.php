
<!-- Siswa Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light rounded p-4">
    <div class="col-md-10">
      <h3 class="my-3 text-center"><?= $title; ?></h3>
      <!-- Form Tambah Data Siswa -->
      <form action="<?= base_url('siswa/addSiswa') ?>" method="post">
        <div class="row mb-3">
          <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
          <div class="col-sm-10">
            <input type="text" name="nisn" class="form-control" id="nisn" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="nis" class="col-sm-2 col-form-label">NIS</label>
          <div class="col-sm-10">
            <input type="text" name="nis" class="form-control" id="nis" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="nama" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="id_kelas" class="col-sm-2 col-form-label">Kelas</label>
          <div class="col-sm-10">
            <select class="form-select" name="id_kelas" required>
              <option selected>--Pilih Kelas--</option>
              <?php foreach ($kelas as $k) : ?>
                <option value="<?= $k['id_kelas'] ?>"><?= $k['nama_kelas'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
              <textarea name="alamat" id="alamat" class="form-control"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="no_telp" class="col-sm-2 col-form-label">No. Telpon</label>
          <div class="col-sm-10">
            <input type="text" name="no_telp" class="form-control" id="no_telp" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="id_spp" class="col-sm-2 col-form-label">Tahun Masuk</label>
          <div class="col-sm-10">
            <select class="form-select" name="id_spp" required>
              <option selected>--Pilih Tahun--</option>
              <?php foreach ($spp as $s) : ?>
                <option value="<?= $s['id_spp'] ?>"><?= $s['tahun'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-6">
            <button type="submit" class="btn btn-sm btn-success">Save Change</button>
            <a href="<?= base_url('siswa') ?>" class="btn btn-sm btn-secondary">Cancel</a>
          </div>
        </div>
      </form>
      <!-- End Form Tambah Data Siswa -->
    </div>
  </div>
</div>
<!-- Siswa End -->