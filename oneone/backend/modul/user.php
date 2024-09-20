<div class="container">
<a href="?page=adduser" class="btn btn-primary mt-5">Tambah User</a>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th>No Urut</th>
      <th>Username</th>
      <th>Password</th>
      <th>Aksi</th>
    </tr>
  </thead>
</tbody>
<?php
  $no = 1;
  $sqloutput = $conn->query("SELECT*FROM tbuser");
  while($result = $sqloutput->fetch_array()){
?>
<tr>
  <td><?=$no++?></td>
  <td><?=$result['username']?></td>
  <td><?=$result['password']?></td>
  <td><a href="?page=edituser&id=<?=$result['userid']?>" class="btn btn-success">Edit</a></td>
  <td><a href="?page=edituser&id=<?=$result['userid']?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>