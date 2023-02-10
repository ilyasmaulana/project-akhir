<!-- Pembayaran Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light rounded p-4">
    <div class="col-md text-center">
      <h3 class="my-3"><?= $title; ?></h3>
    </div>

    <?= $this->session->flashdata('pesan'); ?>

    <a href="<?= base_url('pembayaran/addPembayaran') ?>" class="btn btn-sm btn-primary">Tambah Data Pembayaran</a>

    <table class="table table-hover my-3">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">ID</th>
          <th scope="col">Petugas</th>
          <th scope="col">NISN</th>
          <th scope="col">Tanggal Bayar</th>
          <th scope="col">Bulan dibayar</th>
          <th scope="col">Tahun dibayar</th>
          <th scope="col">SPP</th>
          <th scope="col">Jumlah Bayar</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($pembayaran as $p) : ?>
          <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $p['id_pembayaran'] ?></td>
            <td><?= $p['id_petugas'] ?></td>
            <td><?= $p['nisn'] ?></td>
            <td><?= $p['tgl_bayar'] ?></td>
            <td><?= $p['bulan_dibayar'] ?></td>
            <td><?= $p['tahun_dibayar'] ?></td>
            <td><?= $p['id_spp'] ?></td>
            <td><?= $p['jumlah_bayar'] ?></td>
            <td>
              <a href="<?= base_url('pembayaran/deletePembayaran/') . $p['id_pembayaran'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
            </td>
          </tr>
        <?php $no++;
        endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Pembayaran End -->
