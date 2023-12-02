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

    $nilai_akhir=($_POST['tugas']*0.1)+($_POST['kuis']*0.2)+($_POST['mid']*0.3)+($_POST['uas']*0.4);

    if ($nilai_akhir>=85)
    {
        $grade = "A";
        $beasiswa = $nilai_akhir * 0.35 . "%";
    } elseif ($nilai_akhir>=75)
    {
        $grade = "B";
        $beasiswa = $nilai_akhir * 0.25. "%";
    } elseif ($nilai_akhir>=55)
    {
        $grade = "C";
        $beasiswa = "Tidak ada";
    } elseif ($nilai_akhir>=40)
    {
        $grade = "D";
        $beasiswa = "Tidak ada";
    } elseif ($nilai_akhir<=75)
    {
        $grade = "E";
        $beasiswa = "Tidak ada";
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
            <td><?php echo $nilai_akhir;?>  (<?php echo $grade;?>)</td>
        </tr>
        <tr>
            <td>Beasiswa</td>
            <td><?php echo $beasiswa?></td>
        </tr>
    </table>

</body>
</html>