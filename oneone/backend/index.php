<?php
include "../lib/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>data user</title>
    <style>
      body {
        
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=user">Data User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=kategori">Kategori</a>
      </li>
    </ul>
  </div>
</nav>
<?php
    $page=$_GET['page'];
    switch ($page) {
        case 'user':
            include "modul/user.php";
            break;
         case "adduser";
        include "modul/adduser.php";
             break;
        case"edituser";
        include"modul/edituser.php";
        break;
        case"kategori";
        include"modul/kategori.php";
        break;
        case"addkategori";
        include"modul/addkategori.php";
        break;
        case"editkategori";
        include"modul/editkategori.php";
        break;
        default:
            # code...
            break;
    }
?>    
</body>
</html>