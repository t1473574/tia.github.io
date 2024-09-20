<?php 
$id=$_GET['id'];
$sqlOut=$conn->query("SELECT*FROM kategori WHERE id_kategori='$id'");
$result=$sqlOut->fetch_array();
 ?>
<form method="post">
	<input type="hidden" value="<?=result['id_kategori']?>" name="id">
	<div class="mb-3 mt-3">
	<label form="uname" class="form-label">Nama Kategori</label>
	<input type="text" class="form-control" name="uname" value="<?=$result['nama_kategori']?>">
	</div>
<div class="mb-3">
	<label form="ket" class="form-label">Keterangan</label>
	<input type="text" class="form-control" name="ket" value="<?=$result['keterangan']?>">
</div>
<button type="submit" class="btn btn-warning" name="btn">Edit Data</button>
</form>

<?php
if (isset($_POST['btn'])) {
	$id_kategori = $_POST['id'];
	$uname = $_POST['uname'];
	$ket = $_POST['ket'];
	$sqledikategori = $conn->query("UPDATE kategori SET nama_kategori='$uname', keterangan='$ket' WHERE id_kategori='$id'");
    
}
?>