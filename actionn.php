<!DOCTYPE html>
<html lang="en">
<head>
    <title>Action</title>
    <link rel="stylesheet" href="tugas3.css"/>
</head>
<body id="fr">
    <div class="action1">
        <h4>Hasil Form</h4>
        <?php
        session_start();

            $_SESSION['nama']  = $_POST["nama"];
            $_SESSION['nim']   = $_POST["NIM"] ;
            $_SESSION['email'] = $_POST["email"];
            $_SESSION['jk']    = $_POST["gender"];
            $_SESSION['addres']= $_POST["alamat"];
            $_SESSION['prodi'] = $_POST["jurusan"];
            $_SESSION['bb']    = $_POST["beratbadan"];
            $_SESSION['masaindex']= $_POST["bmi"];
            $_SESSION['hob']   = $_POST["hobi"];

            echo "Data nama     : ".$_SESSION['nama'] .'<br>';
            echo "NIM           : ".$_SESSION['nim'].'<br>';
            echo "E-mail        : ".$_SESSION['email'].'<br>';
            echo "Jenis Kelamin : ".$_SESSION['jk'].'<br>';
            echo "Alamat        : ".$_SESSION['addres'].'<br>';
            echo "Jurusan       : ".$_SESSION['prodi'].'<br>';
            echo "Berat badan   : ".$_SESSION['bb'].'<br>';
            echo "BMI           : ".$_SESSION['masaindex'].'<br>';
            echo "Hobby         : ".$_SESSION['hob'].'<br>';

        ?>
        <br>
        <a href="filecoba.php">Menuju Halaman Coba Session</a>
    </div>

</body>
</html>