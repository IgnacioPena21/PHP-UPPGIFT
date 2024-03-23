<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Övningar</title>
</head>
<body>

    <?php
/*  //UPPGIFTER 1-5
    //upp_1-------------------------------
    $color = array('white', 'green', 'red', 'blue', 'black');
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the '$color[2]' carpet,
    the '$color[1]' lawn, the '$color[0]' house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

    //upp_2-----------------------------
    $color = array('white', 'green', 'red');
    $sorting = sort($color);
    for($i = 0; $i<3; $i++){
        echo "<ul><li>$color[$i]</li></ul>";   
    }
    
    //upp_3-------------------------------
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    asort($ceu);
    foreach($ceu as $key => $value){
        echo "The capital of $key is $value<br>";
    }
    

    //upp_4--------------------------------
    $x = array(1, 2, 3, 4, 5);
    print_r($x);
    echo"<br>";
    function newarray($x){
        $rand = 
        rand(0, 4);
        unset($x[$rand]);
        print_r($x);
        }
    newarray($x);
    
    //upp_5------------------------------
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    echo $color[4];
    */

    //##############################################

    /*

    //UPPGIFTER 5-10
    //5----------
    $Date = date("Y/m/j");
    echo"$Date<br>";
    $reverseDate = date('j/m/Y', strtotime($Date));
    echo $reverseDate;
    
    //6-----------
    $Date = date("Y/m/j");
    $timestampDate = time();
    echo "$Date<br>";
    echo $timestampDate;
    
    //7------------
    $date1 = strtotime('2024/1/3');
    $date2 = strtotime('2025/2/20');
    $days_between = ceil($date2 - $date1)/86400; //86400 sekunder är 24 timmar
    echo $days_between;
    
    //8---------------
    $day1 = 1;
    $month= 8;
    $year= 2002;
    $day2 = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    echo "August 2002: " . $day1 . " " . $day2;

    //9------------------
    $date = date("l jS");
    echo $date;

    //10----------------
    echo date("j/m/Y");
    echo'
    <form action="#" method="POST">
        <label for="date">Enter a date(DD/MM/YY):</label>
        <input type="text" name="date" id="date">
        <input type="submit" name="submit" id="submit">
    </form>';
    if(isset($_POST['submit'])){
        $date = strtotime($_POST['date']);
        if($date != date("j/m/Y", $date)){
            echo "Enter the correct format!";
        }
        else{
            echo $date;
        }
    }
*/
    //#########################################################
/*
    //UPPGIFTER 1-5

    //1 och 2------------------------
    echo'
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="upload" id="upload">
    </form>';
    if(isset($_FILES['file'])){
        $file = $_FILES['file'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        $extension = explode(".", $file_name);
        $extension = strtolower(end($extension));
        $allowed =array('txt', 'jpg', 'csv');
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
        function checkfile($file_destination){
            if(file_exists($file_destination)){
                echo file_get_contents($file_destination);
                echo"<br>your file exists <br><br>";
            }
        }
        checkfile($file_destination);
    }
    
    //3----------------
    $count_lines = count(file($file_destination));
    echo "The file $file_name_new has $count_lines lines";

    //4-----------------

    $addedtext = "<br>blablablablablablabla";
    file_put_contents($file_destination, $addedtext);
    echo file_get_contents($file_destination);

    //5-----------------------
    $csvfil = fopen("bok1.csv", "r");
    echo '<table>';
    while (($data = fgetcsv($csvfil, 1000, ",")) !== FALSE) {
      echo '<tr>';
      foreach ($data as $value) {
        echo '<td>' . htmlspecialchars($value) . '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';

    fclose($csvfil);
*/
    ?>
</body>
</html>