<!-- note -->
<!-- bagian $_POST['...'] dalemnya sesuain sama name di masing masing input di bagian form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        function konversi_tgl($tgl){
            list($thn, $bln, $tgl) = explode('-', $tgl);
            return $tgl . '-' . $bln . '-' . $thn;
        }

            $variable = $_POST['resolusi'];

        if( isset($_POST['kirim_data']) ) { // kirim_data sesuaikan sama name di  bagian form.php bagian submit/tombol nya
            $nama            = isset($_POST['nama']) ? $_POST['nama'] : '';
            $nim             = isset($_POST['nim']) ? $_POST['nim'] : '';
            $tgl_lahir       = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : '';
            $tgl_lahir       = konversi_tgl($tgl_lahir);
            $alamat          = isset($_POST['alamat']) ? $_POST['alamat'] : '';
            $jk              = isset($_POST['jk']) ? $_POST['jk'] : '';
            $username        = isset($_POST['username']) ? $_POST['username'] : '';
            $email           = isset($_POST['email']) ? $_POST['email'] : '';
            $password        = isset($_POST['password']) ? $_POST['password'] : '';
            $ulangi_password = isset($_POST['ulangi_password']) ? $_POST['ulangi_password'] : '';
        }
    ?>

    <h1>Halaman Proses</h1>

    <table>
        <tr>
            <td>
                Nama 
            </td>
            <td>
               : <?= $nama ?>
            </td>
        </tr>
        <tr>
            <td>
                NIM
            </td>
            <td>
               : <?= $nim ?>
            </td>
        </tr>
        <tr>
            <td>
                Tanggal Lahir 
            </td>
            <td>
               : <?= $tgl_lahir ?>
            </td>
        </tr>
        <tr>
            <td>
                Alamat
            </td>
            <td>
               : <?= $alamat ?>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Kelamin
            </td>
            <td>
               : <?= $jk ?>
            </td>
        </tr>
        <tr>
            <td>
                Username
            </td>
            <td>
               : <?= $username ?>
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
               : <?= $password ?>
            </td>
        </tr>
        <tr>
            <td>
                Konfirmasi Password
            </td>
            <td>
               : <?= $ulangi_password ?>
            </td>
        </tr>
        <?php foreach($variable as $key => $value) : ?>
        <tr>
            <td>
               Target <?= ($key + 1); ?> <td>: <?= $value; ?></td> 
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>