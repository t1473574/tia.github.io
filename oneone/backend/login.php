<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>
<nav>
	<ul>
		<li> <a href="Home"></a></li>
		<li> <a href="?page=user">Data User</a></li>
        <li> <a href="?page=kategori">kategori</a></li>
	</ul>
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
    default:
        # code...
        break;
}
?>    	
</body>
</html>