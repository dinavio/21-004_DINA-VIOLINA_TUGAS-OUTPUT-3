<html>
    <head>
        <link rel="stylesheet" href="tugas3.css"/>
    </head>
    <body id="fr">
    <fieldset>
    <form action="actionn.php" method="post";>
        <h1>Data Diri</h1>
        <table  >
                <tr>
                    
                    <td>Name </td><td>:</td>
                    <td><label for="name"><input type="text" name="nama" id="name"></label></td>
                </tr>
                <tr>
                    <td>NIM </td><td>:</td>
                    <td><label for="NIM"><input type="text" name="NIM" id="NIM"></label></td>
                </tr>
                <tr>
                    <td>E-mail  </td><td>:</td>
                    <td><label for="email"><input type="text" name="email"><tr></tr></label></td>
                </tr>
                <tr>
                    <td>Alamat</td><td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td><td>:</td>
                    <td><input type="radio" name="gender" value="Perempuan">Perempuan
                    <input type="radio" name="gender" value="Laki-laki" > Laki-laki </td>
                </tr>
                <tr>
                    <td>Jurusan</td><td>:</td>
                    <td><input type ="text" name="jurusan"><br></td>
                </tr>
                <tr>
                    <td>Berat badan</td><td>:</td>
                    <td><input type="text" name="beratbadan"></td>
                </tr>
                <tr>
                    <td>BMI </td><td>:</td>
                    <td><input type="text" name="bmi"></td>
                </tr>
                <tr>
                    <td>Hobby</td><td>:</td>
                    <td><input type="text" name="hobi"></td>
                </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </fieldset>
    </form>
    </body>
</html>