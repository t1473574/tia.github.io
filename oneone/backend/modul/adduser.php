
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter user" name="uname">
    </div>
    <div class="mb-3">
      <label for="pswd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
    </div>
    <button type="submit" class="btn btn-primary" name="btn">INPUT DATA</button>
  </form>
</div>

<?php
    if(isset($_POST['btn'])){
      $uname = $_POST['uname'];
      $pass =$_POST['pswd'];
      $sqlInput = $conn->query("INSERT INTO tbuser(username,password)VALUES('$uname','$pass')");
    if($sqlInput){
      echo"<script>document.location.href='?page=user'</script>";
    }else{
      echo "Data Gagal Di Input<br>";
      print_r($conn->error);
    }
    }

?>