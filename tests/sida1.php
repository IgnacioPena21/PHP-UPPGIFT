<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida1</title>
    <link rel="stylesheet" type="style/css" href="./css/style.css">
</head>
<body>
<?php
    echo'<form action="#" method="POST">
    <fieldset>
        <legend>Your Name </legend>
        Enter your name: <input type="text" id="textbox" name="user" value="">
        <input name="send" type="submit"  value="submit">
    </fieldset>
    </form>

    if(isset($_POST['send'])){
        $strName = $_POST['user'];
        echo "Hej $strName , <br>";
        echo "Baklänges: " ,strrev($strName), "<br>";
        echo "Gemener: " , strtolower($strName), "<br>";
        echo "Versaler: ", strtoupper($strName), "<br>";
        echo "Antal tecken: ", strlen($strName);
    }

    else{
        $strName = "Ignacio";
        echo "Hej, $strName";
    }'

    echo "<h1>Webbserverprogrammering 2</h1>";
    echo "
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Nulla euismod nec turpis vitae varius. 
    Quisque iaculis in purus ut tincidunt. 
    Sed mattis tellus sit amet gravida pellentesque. 
    Curabitur hendrerit nunc vel nisl luctus,
    eget pulvinar velit ornare. 
    Vestibulum feugiat molestie turpis, 
    nec blandit ipsum ullamcorper at. 
    Morbi ex massa, eleifend sed aliquet vel,
    blandit quis ligula. 
    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
    Vivamus vestibulum nulla at lorem mollis,
    in varius velit interdum. Fusce in velit ac ex imperdiet maximus a nec ex. 
    Aliquam risus felis, vulputate nec rhoncus at, molestie sit amet augue. 
    Phasellus vulputate libero nunc, ac tincidunt sem dignissim ut.
    </p>";

    echo "<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Nulla euismod nec turpis vitae varius. 
    Quisque iaculis in purus ut tincidunt. 
    Sed mattis tellus sit amet gravida pellentesque. 
    Curabitur hendrerit nunc vel nisl luctus,
    eget pulvinar velit ornare. 
    Vestibulum feugiat molestie turpis, 
    nec blandit ipsum ullamcorper at. 
    Morbi ex massa, eleifend sed aliquet vel,
    blandit quis ligula. 
    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
    Vivamus vestibulum nulla at lorem mollis,
    in varius velit interdum. Fusce in velit ac ex imperdiet maximus a nec ex. 
    Aliquam risus felis, vulputate nec rhoncus at, molestie sit amet augue. 
    Phasellus vulputate libero nunc, ac tincidunt sem dignissim ut.</p>";

    echo"<p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Nulla euismod nec turpis vitae varius. 
    Quisque iaculis in purus ut tincidunt. 
    Sed mattis tellus sit amet gravida pellentesque. 
    Curabitur hendrerit nunc vel nisl luctus,
    eget pulvinar velit ornare. 
    Vestibulum feugiat molestie turpis, 
    nec blandit ipsum ullamcorper at. 
    Morbi ex massa, eleifend sed aliquet vel,
    blandit quis ligula. 
    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
    Vivamus vestibulum nulla at lorem mollis,
    in varius velit interdum. Fusce in velit ac ex imperdiet maximus a nec ex. 
    Aliquam risus felis, vulputate nec rhoncus at, molestie sit amet augue. 
    Phasellus vulputate libero nunc, ac tincidunt sem dignissim ut.</p>";

    echo "<p>Denna text är genererad med utskriftkommandot i PHP</p>";

    include('footer.php'); 

?> 
</body>
</html>