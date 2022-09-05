<h1>File Coba</h1><br>
<fieldset>
<?php
    session_start();

    echo "Data nama : ".$_SESSION['nama'] .'<br>';
    echo "NIM : ".$_SESSION['nim'].'<br>';
    echo "Jenis Kelamin : " .$_SESSION['jk'].'<br>';
    echo "Alamat : ". $_SESSION['addres'].'<br>';
    echo "Jurusan : ".$_SESSION['prodi'].'<br>';
    echo "Berat badan :".$_SESSION['beratbadan'].'<br>';
    echo "BMI : ".$_SESSION['masaindex'].'<br>';
    echo "Hobby : ".$_SESSION['hob'].'<br>';
?>
</fieldset>
