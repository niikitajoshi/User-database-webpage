<?php 

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
 	<title>HOME</title>
 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WELCOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="add.html">Home <span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>

<div class="container my-5">
	<table class="table table-striped" width="80%" border=0>
		<tr bgcolor="#123456">
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php 
		while ($res = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['age']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td><a class ='btn btn-danger' href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";				
			}	
		 ?>
	</table>
</div>
 </body>
 </html>