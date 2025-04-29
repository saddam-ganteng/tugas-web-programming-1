<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
</head>
<body>
    <h1>
        Data Registrasi
    </h1>
    <table border="1" cellpadding="5" style="text-align: left; width: 400px;">
        <tr>
            <th>Nama</th>
            <td><?php echo htmlspecialchars($_POST['nama']); ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo nl2br(htmlspecialchars($_POST['alamat'])); ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><?php echo htmlspecialchars($_POST['tempat_lahir']); ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo htmlspecialchars($_POST['tanggal_lahir']); ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo htmlspecialchars($_POST['jenis_kelamin']); ?></td>
        </tr>
        <tr>
            <th>Pendidikan</th>
            <td><?php echo htmlspecialchars($_POST['pendidikan']); ?></td>
        </tr>
    </table>
    <div style="margin-top: 20px;">
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>