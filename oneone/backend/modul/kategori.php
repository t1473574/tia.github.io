<div class="container">
<a href="?page=addkategori" class="btn btn-primary mt-5">Tambah kategori</a>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th>No Urut</th>
      <th>Kategori</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
  </thead>
</tbody>
<?php
  $no = 1;
  $sqloutput = $conn->query("SELECT*FROM kategori");
  while($result = $sqloutput->fetch_array()){
?>
<tr>
  <td><?=$no++?></td>
  <td><?=$result['nama_kategori']?></td>
  <td><?=$result['keterangan']?></td>
  <td><a href="?page=editkategorir&id=<?=$result['id_kategori']?>" class="btn btn-success">Edit</a></td>
  <td><a href=">" class="btn btn-danger">Delete</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>