<!-- Kelas Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light rounded p-4">
    <div class="col-md text-center">
      <h3 class="my-3">SPP</h3>
    </div>

    <?= $this->session->flashdata('pesan'); ?>

    <a href="<?= base_url('spp/addSpp') ?>" class="btn btn-sm btn-primary">Tambah Data SPP</a>

    <table class="table table-hover my-3">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">ID</th>
          <th scope="col">Tahun</th>
          <th scope="col">Nominal</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($spp as $s) : ?>
          <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $s['id_spp'] ?></td>
            <td><?= $s['tahun'] ?></td>
            <td><?= $s['nominal'] ?></td>
            <td>
              <a href="<?= base_url('Spp/deleteSpp/') . $s['id_spp'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
            </td>
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Kelas End -->