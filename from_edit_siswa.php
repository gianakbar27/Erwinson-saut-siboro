<?php
include 'config/config.php';

if (!isset($_GET['id'])){
    header('Location: siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Siswa</title>
</head>
<body>
    <head>
        <h2>Edit Data Siswa</h2>
    </head>
    <form action="controller/edit_siswa.php" method="post">
    <div>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" requird>
        </div>
        <br>
        <div>
            <label for="nama">Tempat Lahir: </label>
            <input type="text" name="tplahir" id="tplahir" requird>
        </div>
        <br>
        <div>
            <label for="tanggal_lahir">Tanggal Lahir :</label>
            <input type="date" name="tglahir" id="tglahir" required>
        </div>
        <br>
        <div>
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10" required></textarea>
        </div>
        <br>
        <div>
            <label for="nama">Hobi : </label>
            <input type="text" name="hobi" id="hobi" requird>
        </div>
        <br>
        <div>
            <label for="nama">Cita-cita : </label>
            <input type="text" name="cita_cita" id="cita_cita" requird>
        </div>
        <br>
        <!-- <div>
            <label for="jurusan">Jurusan: </label>
            <select name="jurusan" id="" required>
                <option value="" disabled selected>Pilih Jurusan</option>
                <option value=" Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                <option value="Multimedia">Multimedia</option>
                <option value="SIJA">SIJA</option>
            </select>
        </div> -->
        <div>
            <label for="nama">Id Kelas : </label>
            <input type="number" name="idkelas" id="idkelas" requird>
        </div>
        <h4>id: RPL(1) ANM(2)</h4>
        <div>
            <label for="nama">Id Agama : </label>
            <input type="number" name="idagama" id="idagama" requird>
        </div>
        <h4>id: ISLAM(1) kRISEN(2)</h4>
        <div>
            <input type="Submit" value="Simpan" name="submit">
        </div>
    </form>
</body>
</html>