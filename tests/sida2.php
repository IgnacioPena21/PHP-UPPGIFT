<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida 2</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    echo "<h1>Animal Farm</h1>";
    
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
   
    echo '<form action="#" method="POST">
    animal 1: <input type ="text" name="animal">
    animal 2: <input type ="text" name="animal2">
    animal 3: <input type ="text" name="animal3">

    <input name="send" type ="submit" value="submit"><br>';    
    if(isset($_POST['send'])){
        $animals = [];
        $animals[0] = $_POST['animal'];
        $animals[1] = $_POST['animal2'];
        $animals[2] = $_POST['animal3'];
        print_r($animals);
    
    }
    echo "<br>";
    $ersattdjur = [2=> "struts", 3=> "alpacka"];
    $nyarray = array_replace($animals, $ersattdjur);
    print_r($nyarray);
    echo "<br>";
    unset($nyarray[0]);
    print_r($nyarray[2]);
    include('footer.php')
    ?>
</body>
</html>