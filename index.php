<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Datq Hewan</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-3">Data Admin</h2>

    <!-- Tombol Tambah -->
    <button type="button" class="btn btn-info mb-3" data-bs-toggle="modal" data-bs-target="#modal-success">
        Tambah Data Hewan
    </button>

    <!-- Tabel Data -->
    <table id="table_id" class="table table-hover table-bordered nowrap">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>nama_hewan</th>
                <th>jenis_hewan</th>
                <th>asal_hewan</th>
                <th>jumlah_hewan</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include "koneksi.php";
        $sql = mysqli_query($koneksi, "SELECT * FROM suci");
       $no = 1;
        while($dat = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $dat['id']; ?></td>
                <td><?= $dat['nama_hewan']; ?></td>
                <td><?= $dat['asal_hewan']; ?></td>
                <td><?= $dat['jumlah_hewan']; ?></td>
                <td>
                    <a href="index.php?page=edit_admin&id=<?= $dat['id']; ?>" class="btn btn-info btn-sm">
                        <i class="fa fa-pencil-square"></i> Edit
                    </a>
                    <form  action="hapus.php?id=<?= $dat['id']; ?>" method="post" style="display:inline;">
                        <button type="submit" name="hapus_admin" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">
                            <i class="fa fa-trash-o"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>