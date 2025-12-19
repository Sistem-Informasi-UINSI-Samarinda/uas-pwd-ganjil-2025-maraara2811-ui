<?php include '../config/database.php';
$id=$_GET['id'];
d=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM produk WHERE id=$id"));
if(isset($_POST['update'])){
mysqli_query($conn,"UPDATE produk SET nama='$_POST[nama]',harga='$_POST[harga]',stok='$_POST[stok]' WHERE id=$id");
header('Location: produk.php');
}
?>
    <form method="post">
        <input name="nama" value="<?= $d['nama'] ?>">
        <input name="harga" value="<?= $d['harga'] ?>">
        <input name="stok" value="<?= $d['stok'] ?>">
        <button name="update">Update</button>
    </form>