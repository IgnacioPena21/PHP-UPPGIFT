<!--2. spara uppgifter i databas, bara bildens sökväg gås in i databasen.-->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User data</title>
</head>
<body>
<div class="container position-absolute top-50 start-50 translate-middle bg-secondary p-3">
<form action ="#" method="POST" enctype="multipart/form-data" class="form">
        <label for="fornamn" class="form-label text-light">Förnamn:</label>
        <input type="text" name="fornamn" id="fornamn" class="form-control form-control-lg" placeholder="Förnamn" maxlength="20" required><br>
        <label for="efternamn:" class="form-label text-light">Efternamn:</label>
        <input type="text" name="efternamn" id="efternamn" class="form-control form-control-lg" placeholder="Efternamn" maxlength="20" required><br>
        <label for="banknr" class="form-label text-light">Bankkontonummer:</label>
        <input type="text" name="banknr" id="banknr" class="form-control form-control-lg" placeholder="Banknummer" maxlength="25" required><br>
        <label for="saldo" class="form-label text-light">Saldo:</label>
        <input type="text" name="saldo" id="saldo" class="form-control form-control-lg" placeholder="Saldo" maxlength="12"><br>
        <input type="file" name="file_up" id="file_up" class="form-control"><br>
        <input type="submit" name="submit" id="submit" class="btn btn-success btn-outline-dark" value ="Submit">
    </form>
</div>



<?php
    //Skapar databasen och kontrollerar anslutning

    //jag ger varje variabel en del av formulär för att 
    //använda dem senare
    if(isset($_POST['submit'])){
      $randId = rand(10,100);
      $fornamn = $_POST['fornamn'];
      $efternamn = $_POST['efternamn'];
      $banknr = $_POST['banknr'];
      $saldo = $_POST['saldo'];

    //här laddas upp bilden som användaren väljer
    if(isset($_FILES['file_up'])){
        $file = $_FILES['file_up'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
  //här specifierar jag vilken typ av fil kan laddas upp,ger ett unik id 
  //till varje fill som laddas upp och skickar filen till mappen "upload".
        $extension = explode(".", $file_name);
        $extension = strtolower(end($extension));
        $allowed =array('txt', 'jpg', 'jpeg', 'png', 'jfif');
        if(in_array($extension, $allowed)){
            if($file_error === 0) {
                if($file_size <= 2097152){
                    $file_name_new = uniqid(' ', true) . '.' . $extension;
                    $file_destination = './upload/' . $file_name_new;
                if (move_uploaded_file($file_tmp, $file_destination)){
                }
                }
            } 
        }
    }
    /*Här är allting för att kunna ansluta till databasen och förfrågan som ska göras 
    för att lägga till data från formulären till DB.
    Resten som är kommenterad är koden som skapar databasen och som skapar en tabell i databasen*/ 
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $Databas = "user_bank";

  $conn = new mysqli($servername, $username, $password, $Databas);
  $query = "INSERT INTO user_info VALUES('$randId', '$fornamn', '$efternamn', '$banknr', '$saldo', '$file_destination')";
  
  if($conn -> query($query) === TRUE){
    echo "Data saved into database!";
  }
  else{
    echo "Error: " . $sql . $conn -> error;
  } 
    }

    /*Skapar en databas kallad user_bank
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
      
      $sql ="CREATE DATABASE user_bank";
      if($conn -> query($sql) === TRUE){
          echo "Database created successfully";
      } 
      else {
        echo "Error creating database: " . $conn->error;
      }
      $conn -> close()
      */

  /*Här skapar jag en tabell i DB
    $sql = "CREATE TABLE user_info( id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    Förnamn VARCHAR(20) NOT NULL, 
    Efternamn VARCHAR(20) NOT NULL, 
    banknr INT(25) UNSIGNED,
    saldo INT(11) UNSIGNED,
    ImgPath VARCHAR(100))";
    
    if ($conn -> query($sql) === TRUE){
      echo "Table created successfully\n";
}
    $conn -> close()*/
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>