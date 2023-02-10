
<!-- Siswa Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light rounded p-4">
    <div class="col-md text-center">
      <h3 class="my-3">Siswa</h3>
    </div>

    <?= $this->session->flashdata('pesan'); ?>

    <a href="<?= base_url('siswa/addSiswa') ?>" class="btn btn-sm btn-primary">Tambah Data Siswa</a>

    <table class="table table-hover my-3">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">NISN</th>
          <th scope="col">Nama Siswa</th>
          <th scope="col">Kelas</th>
          <th scope="col">No Telpon</th>
          <th scope="col">SPP</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($siswa as $s) : ?>
          <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $s['nisn'] ?></td>
            <td><?= $s['nama'] ?></td>
            <td><?= $s['nama_kelas'] ?></td>
            <td><?= $s['no_telp'] ?></td>
            <td><?= $s['nominal'] ?></td>
            <td>
              <a href="<?= base_url('siswa/updateSiswa/') . $s['nisn'] ?>" class="btn btn-sm btn-primary">Update</a>
              <a href="<?= base_url('siswa/deleteSiswa/') . $s['nisn'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
            </td>
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Siswa End -->

<!-- Modal Delete Siswa-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="deleteModalLabel">Yakin hapus Siswa ini?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Delete Siswa-->