<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Program PHP Sederhana</title>
</head>
<body>
    <h2>Data Karyawan</h2>
    <form method="post">
        <p>
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
        </p>
        <p>
            <label for="tgl">Tanggal Lahir : </label>
            <input type="date" id="tgl" name="tanggal">
        </p>
        <p>
            <label for="pekerjaan">Pekerjaan : </label>
            <select name="pekerjaan" id="pekerjaan" name="pekerjaan">
                <option value="" selected="selected">-Pilih Pekerjaan-</option>
                <option value="Frontend Developer">Frontend Developer</option>
                <option value="Full Stack Developer">Full Stack Developer</option>
                <option value="Android Developer">Android Developer</option>
                <option value="IT Analyst">IT Analyst</option>
                <option value="Project Manager">Project Manager</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Kirim">
        </p>
    </form>
    <?php
        // Untuk menyapa 
        echo "Hallo, " . $_POST["nama"] . "<br />";
        // Hitung umur
        $tanggal_lahir = new DateTime($_POST["tanggal"]);
        $sekarang = new DateTime ("today");
        $tahun = $sekarang -> diff($tanggal_lahir) -> y;
        $bulan = $sekarang -> diff($tanggal_lahir) -> m;
        $tanggal = $sekarang -> diff($tanggal_lahir) -> d;
        echo "Umur kamu sekarang adalah " . $tahun . " tahun " . $bulan . " bulan " . $tanggal . " hari <br />";
        // Gaji pekerjaan
        $pekerjaan = $_POST["pekerjaan"];
        switch($pekerjaan) {
            case "Frontend Developer" :
                echo "Gaji untuk posisi " . $pekerjaan . " adalah RP. 5.000.000";
                break;
            case "Full Stack Developer" :
                echo "Gaji untuk posisi " . $pekerjaan . " adalah RP. 7.000.000";
                break;
            case "Android Developer" :
                echo "Gaji untuk posisi " . $pekerjaan . " adalah RP. 5.500.000";
                break;
            case "IT Analyst" :
                echo "Gaji untuk posisi " . $pekerjaan . " adalah RP. 9.000.000";
                break;
            case "Project Manager" :
                echo "Gaji untuk posisi " . $pekerjaan . " adalah RP. 10.000.000";
                break;
            default :
                echo "Anda belum memilih pekerjaan.";
        }
    ?>
</body>
</html>