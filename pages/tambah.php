<?php
include '../includes/header.php';
include '../config/database.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp, "../assets/img/".$gambar);

    mysqli_query($conn,
        "INSERT INTO produk (nama,harga,stok,deskripsi,gambar)
         VALUES ('$nama','$harga','$stok','$deskripsi','$gambar')"
    );

    header("Location: produk.php");
    exit;
}
?>

<h3>Tambah Produk</h3>

<form method="post" enctype="multipart/form-data">
    <input type="text" name="nama" placeholder="Nama Produk" required>
    <input type="number" name="harga" placeholder="Harga" required>
    <input type="number" name="stok" placeholder="Stok" required>

    <textarea name="deskripsi" placeholder="Deskripsi Produk"></textarea>

    <input type="file" name="gambar" required>

    <button name="simpan">Simpan</button>
</form>

<?php include '../includes/footer.php'; ?>
