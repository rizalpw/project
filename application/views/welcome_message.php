<?php 
// buat koneksi dengan MySQL, gunakan database: universitas
$link = mysqli_connect("localhost", "root", "", "ci-test");
 
// jalankan query
$result = mysqli_query($link, "SELECT * FROM users");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Universitas Muhammadiah Banjarmasin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  .jumbotron{
    background: url("../Project1/img/umb_bg.jpg") no-repeat center center; 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100%;

  }
  .strokeme{
    text-align: right;
    color: #005B89 ;
    text-shadow:
    -1px -1px 0 #fff,
    1px -1px 0 #fff,
    -1px 1px 0 #fff,
    1px 1px 0 #fff;  
  }
</style>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Login/index">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="jumbotron text-center">
  <h1 class="strokeme">Selamat Datang di Universitas Muhammadiyah Banjarmasin</h1>
  <p class="strokeme" style="color: black;">Resize this responsive page to see the effect!</p> 
</div>
  
<center>
	<div class="container">
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <br>	

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php 
			while ($row=mysqli_fetch_row($result))
{
	if ($row[4] == 'tesPid1') {
		
	
   echo "<tr> <td> $row[1] </td> <td> $row[2] </td> <td> <a> Detail >> </a> </td> </tr>" ;
   }
}

    	 ?>
    </tbody>
  </table>
</div>
</center>

</body>
</html>