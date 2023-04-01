<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link rel="stylesheet" type="text/css" href="css/style6.css"> 
    <style>
       html{
           background: url(1.jpg);     
       } 
    </style>   
</head>

<body>
    <header>
        <div class="main">
            <ul>
                <li ><a href="home.php#">Home</a></li>
                <li><a href="regulament.html#">Regulament</a></li>
                <li><a href="organizatori.html#">Organizatori</a></li>
                <li><a href="sponsori.html#">Sponsori</a></li>
                <li><a href="noutati.php#">Noutati</a></li>
                <li><a href="participanti.php#">Participanti</a></li>
                <li><a href="subiecte.html#">Subiecte</a></li>
                <li class="active"><a href="rezultate.php#">Rezultate</a></li>
                <li><a href="contacte.html#">Contacte</a></li>
            </ul>
        </div>

        <div>
		<form method="POST" action="add_script.php">
			<label>Name:</label><input type="text" name="name">
			<label>Rezultat:</label><input type="text" name="rezultat">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table >
			<thead>
				<th>Name</th>
				<th>Rezultat</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('db_conn1.php');
					$query=mysqli_query($conn,"select * from `rezultate`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['rezultat']; ?></td>
							<td>
								<a href="edit_script.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete_script.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>


        <table class="content-table">
            <thead>
              <tr>
                <th>ID Participant</th>
                <th>Nume</th>
                <th>Puncte</th>
                <th>Rezultat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Popa Mihai</td>
                <td>9000</td>
                <td>Admis</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Floare Petru</td>
                <td>2500</td>
                <td>Respins</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Alexandru Ionut</td>
                <td>7000</td>
                <td>Admis</td>
              </tr>
            </tbody>
          </table>


    </header>
</body>

</html>        