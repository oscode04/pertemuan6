<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <form action="prosesForm.php" method="POST">
        <fieldset>
            <legend>Biodata</legend>
            <table>
                <tr>
                    <td>Nama:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>NIM:</td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir:</td>
                    <td><input type="date" name="tgl_lahir" id="tgl_lahir"></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><textarea name="alamat" id="alamat" cols="21" rows="2"></textarea></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki - laki" id="lk"><label for="lk">Laki-laki</label>
                        <input type="radio" name="jk" value="Perempuan" id="pr"><label for="pr">Perempuan</label>
                    </td>
                </tr>
            </table>
        </fieldset>
        <br>
        <fieldset>
            <legend>User Account</legend>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" id="password"></td>
                </tr>
                <tr>
                    <td>Ulangi Password:</td>
                    <td><input type="text" name="ulangi_password" id="ulangi_password"></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <fieldset>
            <legend>Resolusi Tahun Ini</legend>
            <table>
                <tr>
                    <td>
                        <input type="checkbox" name="resolusi[]" value="Menguasai HTML" id="html"><label for="html">Menguasai HTML</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="resolusi[]" value="Paham CSS" id="css"><label for="css">Paham CSS</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="resolusi[]" value="Masteting PHP" id="php"><label for="php">Masteting PHP</label>
                    </td>
                </tr>
            </table>
        </fieldset>
        <br>
        <!-- <input type="submit" value="Kirim Data"> -->
        <button type="submit" name="kirim_data" id="submit">Kirim Data</button>
    </form>
</body>
</html>