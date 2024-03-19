<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Övning</title>
    <link rel="stylesheet" href ="./css/style.css">
</head>
<body>
    <h1>PHP FORM</h1>
    <div id="formular">
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="Fname">First Name:</label>
        <input type="text" name="Fname" class="text">
        <label for="Lname">Last Name:</label>
        <input type="text" name="Lname" class="text">
        <label for="Bdate">Birth Date:</label>
        <input type="text" name="Bdate" class="text"><br>
    <div class="img_up">
        <input type="file" name="file_up" id="file_up"></div><br>
        <input type="submit" name="upload" id="upload" value="SHOW">
    </form>
    </div>


    <?php
    //jag ger varje variabel en del av formulär för att 
    //använda dem senare
    if(isset($_POST['upload'])){
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Bdate = $_POST['Bdate'];
    }

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

        //visar bilden och data från formuläret
        echo "
        <div class='container'><img src='$file_destination' alt='$file_name' height='300' width='250'>
        <p><b>$Fname $Lname<br>$Bdate</b></p></div>";
    }
    ?>
</body>
</html>