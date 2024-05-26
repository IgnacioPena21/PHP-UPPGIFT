<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Slut Uppgift</title>
</head>
<body>
<div class="container position-absolute top-50 start-50 translate-middle bg-dark p-3">
    <table class="table border table-striped table-bordered border-4 border-success table-hover caption-top">
        <caption class="text-light">Uppgifter från våra kunder:</caption>
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $Databas = "user_bank";

    $conn = new mysqli($servername, $username, $password, $Databas);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $query = "SELECT id, Förnamn, Efternamn, banknr, saldo, ImgPath FROM user_info";
      $result = $conn->query($query);
      
    if ($result->num_rows > 0) {
        // output data of each row
        
        echo '<thead> <tr class="table-success"> <th>Bild</th> <th>id </th> </td><th>Namn </th> <th> Banknummer </th> <th>Saldo </th> </tr> </thead>';
        echo "<tbody>";
        while($row = $result->fetch_assoc()) {
            
            echo  "<tr class='table-secondary'>" . "<td><img src='" . $row["ImgPath"] . "' alt='Användarbild' class='img img-fluid' style='width:100px; height:100px;'></td>" ."<td>" . $row["id"] . "</td>" . "<td>" . $row["Förnamn"] . " " . $row["Efternamn"] . "</td>" . "<td>" . $row["banknr"] . "</td>"  . "<td>" . $row["saldo"] . "</td>" ."</tr>";
        }
        echo "</tbody>";
      } 
    else {
        echo "Ingen resultat :(";
      }

      $conn->close();
    ?>
    </table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>