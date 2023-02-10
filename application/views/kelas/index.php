<!-- Kelas Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light rounded p-4">
    <div class="col-md text-center">
      <h3 class="my-3">Kelas</h3>
    </div>

    <?= $this->session->flashdata('pesan'); ?>

    <a href="<?= base_url('kelas/addKelas') ?>" class="btn btn-sm btn-primary">Tambah Data Kelas</a>

    <table class="table table-hover my-3">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">ID</th>
          <th scope="col">Nama Kelas</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($kelas as $k) : ?>
          <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $k['id_kelas'] ?></td>
            <td><?= $k['nama_kelas'] ?></td>
            <td><?= $k['kompetensi_keahlian'] ?></td>
            <td>
              <a href="<?= base_url('kelas/updateKelas/') . $k['id_kelas'] ?>" class="btn btn-sm btn-primary">Update</a>
              <a href="<?= base_url('kelas/deleteKelas/') . $k['id_kelas'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
            </td>
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Kelas End -->