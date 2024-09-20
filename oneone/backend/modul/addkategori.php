
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="uname">Nama kategori:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter kategori" name="uname">
    </div>
    <div class="mb-3">
      <label for="ket">Keterangan:</label>
      <input type="text" class="form-control" id="ket" placeholder="Enter keterangan" name="ket">
    </div>
    <div class="form-check mb-3">
    </div>
    <button type="submit" class="btn btn-primary" name="btn">INPUT DATA</button>
  </form>
</div>

<?php
    if(isset($_POST['btn'])){
      $uname = $_POST['uname'];
      $ket =$_POST['ket'];
      $sqlInput = $conn->query("INSERT INTO kategori(nama_kategori,keterangan)VALUES('$uname','$ket')");
    if($sqlInput){
      echo"<script>document.location.href='?page=kategori'</script>";
    }else{
      echo "Data Gagal Di Input<br>";
      print_r($conn->error);
    }
    }

?>