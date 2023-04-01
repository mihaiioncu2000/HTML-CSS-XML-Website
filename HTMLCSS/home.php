
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coder Contest</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <style>
       html{
           background: url(1.jpg);
           
       } 
    </style>   
</head>
<body >
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
     <?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
    
    <header>
        <div class="main">
            <div class="logo">
                <img src="./images/coder.jpg" alt="logo" width="150" height="150">
            </div>
            <ul>
                <li class="active"><a href="home.php#">Home</a></li>
                <li><a href="regulament.html#">Regulament</a></li>
                <li><a href="organizatori.html#">Organizatori</a></li>
                <li><a href="sponsori.html#">Sponsori</a></li>
                <li><a href="noutati.php#">Noutati</a></li>
                <li><a href="participanti.php#">Participanti</a></li>
                <li><a href="subiecte.html">Subiecte</a></li>
                <li><a href="rezultate.php#">Rezultate</a></li>
                <li><a href="contacte.html#">Contacte</a></li>
            </ul>
        </div>
        <div class="title">
            <h1>CODEMANIA 2021</h1>
            <div class="worldwide-text"> Rezolvați un joc de codare bazat pe nivel în competiție cu
                mii de participanți. <br>
                Următoarea CODEMANIA va avea loc în toamna anului 2021.<br>
                Urmați canalele noastre de socializare pentru a fi la curent!
            </div>
        </div>

        <div class="button">
            <a href="regulament.html#" class="btn">Afla mai multe</a>
        </div>
        
    </header>

</body>
</html>
