<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar dasar-dasar HTML dengan contoh interaktif dan penjelasan yang mudah dipahami.">
    <meta name="keywords" content="HTML, belajar HTML, dasar HTML, tutorial HTML, pemrograman web">
    <meta name="author" content="rawr">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h1 id="a">Pendaftaran Siswa Baru <i class="fa-solid fa-circle-user"></i>
    </h1>
    <div class="container">
        <table class="tabel" border="1px">
            <tr>
                <th colspan="5">
                Pendaftaran Siswa Baru <i class="fa-solid fa-circle-user"></i>
                </th>
            </tr>
            <tr>
                <td>
                <?php 
                    echo "<strong>Nama peserta didik: </strong>".$_POST['nama']
                ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "<strong>Umur: </strong>".$_POST['umur']
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "<strong>Asal Sekolah: </strong>".$_POST['asalsch']
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "<strong>Agama: </strong>".$_POST['agama']
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "<strong>Jenis Kelamin: </strong>".$_POST['kelamin']
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "<strong>Nilai Rata-Rata: </strong>".$_POST['nilairt']
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                <?php 
                    if ($_POST['nilairt'] >= 70 && $_POST['umur'] >= 15) {
                        echo "<strong>Status: </strong>Anda Diterima";
                    } else {
                        echo "<strong>Status: </strong>Anda Tidak Diterima";
                    }
                    ?>
                </td>
            </tr>
        </table>
        <a href="tabel.html" id="x">Lihat Tabel Penerimaan <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</body>
</html>
