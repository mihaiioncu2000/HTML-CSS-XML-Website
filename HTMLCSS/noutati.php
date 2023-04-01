
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coder Contest</title>
    <link rel="stylesheet" type="text/css" href="css/style3.css"> 
    <style>
       html{
           background: url(1.jpg);
           
       } 
    </style>   
</head>
<body >
    <header>
        <div class="main">
            
            <ul>
                <li><a href="home.php#">Home</a></li>
                <li><a href="regulament.html#">Regulament</a></li>
                <li><a href="organizatori.html#">Organizatori</a></li>
                <li><a href="sponsori.html#">Sponsori</a></li>
                <li class="active"><a href="noutati.php#">Noutati</a></li>
                <li><a href="participanti.php#">Participanti</a></li>
                <li><a href="subiecte.html">Subiecte</a></li>
                <li><a href="rezultate.php">Rezultate</a></li>
                <li><a href="contacte.html#">Contacte</a></li>
            </ul>
        </div>


        <div>
		<form method="POST" action="add_script2.php">
			<label>Noutate:</label><input type="text" name="noutate">
			<label>Sursa:</label><input type="text" name="sursa">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table>
			<thead>
				<th>Noutate</th>
				<th>Sursa</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('db_conn2.php');
					$query=mysqli_query($conn,"select * from `news_add`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['noutate']; ?></td>
							<td><?php echo $row['sursa']; ?></td>
							<td>
								<a href="edit_script2.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete_script2.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
        

        <div class="index-news">
            <div class="wrapper">
                <article>
                    <div class="news-img"></div>
                    <img src="w1.jpg" alt="" width="100" height="120">
                    <h3>Program</h3>
                    <p>Programul concursului:
                         acest concurs de codare începe în prima vineri
                          a fiecărei luni la ora 15:00 GMT.</p>
                

                </article>

                <article>
                    <div class="news-img"></div>
                    <img src="w2.jpg" alt="" width="100" height="120">
                    <h3>Timp derulare</h3>
                    <p>Durata concursului: 10 zile</p>
                

                </article>

                <article>
                    <div class="news-img"></div>
                    <img src="money.jpg" alt="" width="100" height="120">
                    <h3>Recompensari</h3>
                    <p>Top 5 elevi vor primi 300 de euro.</p>
                

                </article>

                <article>
                    <div class="news-img"></div>
                    <img src="w4.jpg" alt="" width="100" height="120">
                    <h3>CodeChef</h3>
                    <p>CodeChef Starters este cel mai nou concurs lunar pentru începători absolut și evaluat exclusiv pentru programatorii din Divizia 3.</p>
                

                </article>

                <article>
                    <div class="news-img"></div>
                    <img src="firmline.jpg" alt="" width="100" height="120">
                    <h3>Eveniment</h3>
                    <p>Firmline Networks o sa asigure toti participantii cu dispozitive moderne </p>
                

                </article>

                <article>
                    <div class="news-img"></div>
                    <img src="w2.jpg" alt="" width="100" height="120">
                    
                    <h3>Rank Watch</h3>
                    <p>Rank Watch o sa organizeze o transmitere directa pentru ceremonia de deschidere a evenimentului</p>
                

                </article>

                <article>
                    <div class="news-img"></div>
                    <img src="w7.png" alt="" width="100" height="120">
                    
                    <h3>Sponsor</h3>
                    <p>Compania Koality devine sponsor general pentru acest eveniment.</p>
                

                </article>


            </div>
        </div>

        


      </header>



</body>
</html>