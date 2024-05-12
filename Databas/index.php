<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databas Uppgift</title>
</head>
<body>
  <form action="#" method="POST">
  <label for="fornamn">Förnamn:</label>
  <input type="text" name="fornamn" id="fornamn"><br>
  <label for="efternamn">Efternamn:</label>
  <input type="text" name="efternamn" id="efternamn"><br>
  <label for="datum">Datum:</label>
  <input type="text" name="datum" id="datum"><br>
  <input type ="submit" name="submit" id="submit">
  </form>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$Databas = "21tek";

// Create connection
$conn = new mysqli($servername, $username, $password, $Databas);

/*
//Kontrollerar att anslutningen och skapandet av databasen lyckades genom att visa lämpliga meddelanden för användaren.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql ="CREATE DATABASE 21tek";
if($conn -> query($sql) === TRUE){
    echo "Database created successfully";
} 
else {
  echo "Error creating database: " . $conn->error;
}
$conn -> close()
*/


#---------------------------


//Här skapar jag en tabell och kolumner för tabellen, data som hämtas är namn, efternamn och datum som data har sparats
//om datumet är inte specifierad kommer det göras automatisk
/*
$sql = "CREATE TABLE elever(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
Förnamn VARCHAR(20) NOT NULL, 
Efternamn VARCHAR(20) NOT NULL, 
created_at DATETIME NOT NULL DEFAULT CURRENT_TIME);";
if ($conn -> query($sql) === TRUE){
    echo "Table created successfully\n";
}
*/

//Här ger variablar värdet av form data och skapar en förfrågan för databasen för att skapa en ny relation
//om det går bra det kommer stå ett meddelande som säger så, annars det kommer att printas vilket error fanns.
if(isset($_POST['submit'])){
  $idrand = rand(10,100);
  $fornamn = $_POST['fornamn'];
  $efternamn = $_POST['efternamn'];
  $datum = $_POST['datum'];
  $query = "INSERT INTO elever VALUES('$idrand', '$fornamn', '$efternamn', '$datum')";
  
  if($conn -> query($query) === TRUE){
    echo "Data saved into database!";
  }
  else{
    echo "Error: " . $sql . $conn -> error;
  }
}

?>


</body>
</html>