<?php 
$id=$_GET['id'];
$sqlOut=$conn->query("SELECT*FROM tbuser WHERE userid='$id'");
$result=$sqlOut->fetch_array();
 ?>
<form method="post">
	<input type="hidden" value="<?=result['userid']?>" name="id">
	<div class="mb-3 mt-3">
	<label form="uname" class="form-label">Username</label>
	<input type="text" class="form-control" name="uname" value="<?=$result['username']?>">
	</div>
<div class="mb-3">
	<label form="pswd" class="form-label">Password</label>
	<input type="password" class="form-control" name="pswd" value="<?=$result['password']?>">
</div>
<button type="submit" class="btn btn-warning" name="btn">Edit Data</button>
</form>

<?php
if (isset($_POST['btn'])) {
	$userid = $_POST['id'];
	$uname = $_POST['uname'];
	$pass = $_POST['pswd'];
	$sqledituser = $conn->query("UPDATE tbuser SET username='$uname', password='$pass' WHERE userid='$id'");
	if($sqledituser){
		header('location:?page=user');
	}else{
		print_r($conn->error);
	}
}
?>