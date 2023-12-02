<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
</head>
<body>
    <h2>Hitung Nilai Siswa</h2>
    <form action="Output.php" method="post">
    <table>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td>
                <input type="text" name="tugas" size="5">
            </td>
        </tr>
        <tr>
            <td>Nilai Kuis</td>
            <td>:</td>
            <td>
                <input type="text" name="kuis" size="5">
            </td>
        </tr>
        <tr>
            <td>Nilai MID</td>
            <td>:</td>
            <td>
                <input type="text" name="mid" size="5">
            </td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td>
                <input type="text" name="uas" size="5">
            </td>
        </tr>
        <tr>
            <td colspan="3"> <hr> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button type="submit">Hitung</button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>