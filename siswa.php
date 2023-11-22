<?php
include 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar siswa</title>
</head>
<body>
    <head><h3 align="center">Daftar siswa</h3></head>

    <nav align="center">
        <a href="from_tambah_siswa.php">[+] Tambah Siswa Baru</a>
    </nav>
    <br>

    <table align="center" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>Hobi</th>
                <th>Cita-cita</th>
                <th>Jumlah saudara</th>
                <th>Id Kelas</th>
                <th>Id Agama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT *FROM siswa";
            $query = mysqli_query($conn, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['tplahir']."</td>";
                echo "<td>".$siswa['tglahir']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['hobi']."</td>";
                echo "<td>".$siswa['cita_cita']."</td>";
                echo "<td>".$siswa['jm_saudara']."</td>";
                echo "<td>".$siswa['idkelas']."</td>";
                echo "<td>".$siswa['idagama']."</td>";

                echo "<td>";
                echo "<a href='from_edit_siswa.php?id=".$siswa['id']."'>Edit | </a>";
                echo "<a href='controller/hapus_siswa.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>