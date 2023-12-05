<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Nilai</title>
<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 20%;
    }
    th {
        text-align: center;
        border: 1px solid black;
        padding: 8px; 
    }
    td {
        border: 1px solid black;
        text-align: left;
        padding: 8px;
    }
</style>
</head>
<body>
<?php
    include "Index.php";
    if (isset($_POST['hitung'])){
        $name = $_POST['name'];
        $nilaiTugas = $_POST['tugas'];
        $nilaiKuis = $_POST['kuis'];
        $nilaiMID = $_POST['mid'];
        $nilaiUAS = $_POST['uas'];
        $hasil = new Siswa($name, $nilaiTugas, $nilaiKuis, $nilaiMID, $nilaiUAS);
    }
?>
    <table>
        <tr>
            <th colspan="2"> Nilai Mahasiswa</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST['name'];?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td><?php echo $_POST['tugas'];?></td>
        </tr>
        <tr>
            <td>Nilai Kuis</td>
            <td><?php echo $_POST['kuis'];?></td>
        </tr>
        <tr>
            <td>Nilai MID</td>
            <td><?php echo $_POST['mid'];?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td><?php echo $_POST['uas'];?></td>
        </tr>
        <tr>
            <td>Nilai Akhir</td>
            <td>
            <?php
            echo $hasil->hitungNilaiAkhir();  
            ?>
            </td>
        </tr>
        <tr>
            <td>Kategori Nilai</td>
            <td>
            <?php
            echo $hasil->kategoriNilai();  
            ?>
            </td>
        </tr>
        <tr>
            <td>Beasiswa</td>
            <td>
                <?php
                echo $hasil->beasiswa();
                ?>
            </td>
        </tr>
    </table>
    

</body>
</html>