<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Participanti</title>
    <link rel="stylesheet" type="text/css" href="css/style8.css"> 
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
                <li class="active"><a href="participanti.php">Participanti</a></li>
                <li><a href="subiecte.html#">Subiecte</a></li>
                <li><a href="rezultate.php#">Rezultate</a></li>
                <li><a href="contacte.html#">Contacte</a></li>
            </ul>
        </div>

        <div>
            <form method="POST" action="add.php">
                <label>Firstname:</label><input type="text" name="firstname">
                <label>Lastname:</label><input type="text" name="lastname">
                <input type="submit" name="add">
            </form>
        </div>
        <br>
        <div>
            <table >
                <thead>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    
                </thead>
                <tbody>
                    <?php
                        include('conn.php');
                        $query=mysqli_query($conn,"select * from `user`");
                        while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </header>
</body>

</html>        