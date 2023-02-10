<!-- Petugas Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light rounded p-4">
    <div class="col-md text-center">
      <h3 class="my-3"><?= $title; ?></h3>
    </div>

    <?= $this->session->flashdata('pesan'); ?>

    <a href="<?= base_url('petugas/addPetugas') ?>" class="btn btn-sm btn-primary">Tambah Data Petugas</a>

    <table class="table table-hover my-3">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Nama Petugas</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($petugas as $p) : ?>
          <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $p['id_petugas'] ?></td>
            <td><?= $p['nama_Petugas'] ?></td>
            <td><?= $p['kompetensi_keahlian'] ?></td>
            <td>
              <a href="<?= base_url('petugas/updatePetugas/') . $p['id_petugas'] ?>" class="btn btn-sm btn-primary">Update</a>
              <a href="<?= base_url('petugas/deletePetugas/') . $p['id_petugas'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
            </td>
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Petugas End -->
