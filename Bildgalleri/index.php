<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bildgalleri</title>
</head>
<body>
    <!--Här är HTML strukturen och en formulär som ska låta 
        användaren att lägga till en foto till gallerien-->
    <div class="header">
        <h1>Bildgalleri</h1>
        <p>Lägg till bilder för att skapa en bildgalleri!(Max 15Mb)</p>
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="file_up" id="file_up">
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
    <div class="container">
<!--Den här div innehåller hela php koden
för att kunna ha en container för bilders div:en-->
    <?php 
    /*Den här delen av koden ckeckar om det finns någon fill uppladdat
    och sen använder jag variablar för att*/
    if(isset($_FILES['file_up'])){
        $file = $_FILES['file_up'];
        $file_name = $file['name']; 
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        $extension = explode(".", $file_name);
        $extension = strtolower(end($extension));
        $allowed =array('txt', 'jpg', 'jpeg', 'png', 'jfif');
        /*här specifierar jag vilken typ av fil kan laddas upp,ger ett unik id 
        till varje fill som laddas upp och skickar filen till mappen "Bilder".*/
        if(in_array($extension, $allowed)){
            if($file_error === 0) {
                if($file_size <= 15097152){
                    $file_name_new = uniqid(' ', true) . '.' . $extension;
                    $file_destination = './Bilder/' . $file_name_new;
                if (move_uploaded_file($file_tmp, $file_destination)){
                    /*efter att ha sparat bilden den här loop checkar om 
                    det finns bilder i "bilder"-fil. Om det finns det printas bilden inuti en div
                    för att göra det lättare med css style.*/
                        $images = glob("Bilder/*.*");
                        for ($i = 0; $i < count($images); $i++) {
                         $image = $images[$i];
                         if (in_array($extension, $allowed)) {
                            echo "<div class='cont_img'><img src='$image' alt='$file_destination' ></div>";
                    } 
                    }
                }
                }
//de två else här är bara villkor ifall att filen är för stor respektive filen har inte rätt format
                else{
                    echo "<h3>File too big</h3>";
                }
            }
        }
        else{
            echo "<h3>File extension not allowed</h3>";
        } 


    }      

    ?>

    </div>
</body>
</html>