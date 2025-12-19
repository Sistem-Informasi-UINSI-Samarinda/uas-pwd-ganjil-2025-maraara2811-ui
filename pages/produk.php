<?php
include '../includes/header.php';
include '../config/database.php';

$data = mysqli_query($conn, "SELECT * FROM produk");
$jumlah = mysqli_num_rows($data);
?>

<h2>Data Produk</h2>
<br>
<br>
<a href="tambah.php" class="button">Tambah Produk</a>
<br>
<br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Foto</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>

    <?php if ($jumlah > 0) { ?>
        <?php while ($d = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td>
                <img src="../uploads/<?= $d['gambar']; ?>" width="80">
            </td>
            <td><?= $d['nama']; ?></td>
            <td>Rp <?= number_format($d['harga']); ?></td>
            <td><?= $d['stok']; ?></td>
            <td><?= $d['deskripsi']; ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    <?php } else { ?>
        <!-- DUMMY DATA -->
        <tr>
            <td><img src="../uploads/foto1.jpeg" width="80"></td>
            <td>Kebaya Biru Elegan</td>
            <td>Rp 350.000</td>
            <td>10</td>
            <td>Kebaya modern dengan desain elegan.</td>
            <td>-</td>
        </tr>

        <tr>
            <td><img src="../uploads/foto2.jpeg" width="80"></td>
            <td>Dress Pesta</td>
            <td>Rp 450.000</td>
            <td>7</td>
            <td>Cocok untuk acara formal dan pesta.</td>
            <td>-</td>
        </tr>

        <tr>
            <td><img src="../uploads/foto3.jpeg" width="80"></td>
            <td>Gamis Premium</td>
            <td>Rp 300.000</td>
            <td>15</td>
            <td>Bahan adem dan nyaman dipakai.</td>
            <td>-</td>
        </tr>
    <?php } ?>
</table>

<?php include '../includes/footer.php'; ?>
