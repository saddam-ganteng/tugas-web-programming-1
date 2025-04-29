<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
    <script>
        function validateForm() {
            var nama = document.getElementById('nama').value.trim();
            var alamat = document.getElementById('alamat').value.trim();
            var tempat_lahir = document.getElementById('tempat_lahir').value.trim();
            var tanggal_lahir = document.getElementById('tanggal_lahir').value.trim();
            var jenis_kelamin_laki = document.getElementById('laki_laki').checked;
            var jenis_kelamin_perempuan = document.getElementById('perempuan').checked;
            var pendidikan = document.getElementById('pendidikan').value;

            if (nama === "" || alamat === "" || tempat_lahir === "" || tanggal_lahir === "" || (!jenis_kelamin_laki && !jenis_kelamin_perempuan) || pendidikan === "") {
                alert("Semua field harus diisi!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>
        Form Registrasi
    </h1>
    <h3>
        Silahkan isi data diri Anda di bawah ini
    </h3>
    <form action="proses.php" method="post" onsubmit="return validateForm()">
        <div style="display: flex; flex-direction: row; width: 400px; justify-content: space-between; margin-bottom: 10px;">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div style="display: flex; flex-direction: row; width: 400px; justify-content: space-between; margin-bottom: 10px;">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="4"></textarea>
        </div>
        <div style="display: flex; flex-direction: row; width: 400px; justify-content: space-between; margin-bottom: 10px;">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir">
        </div>
        <div style="display: flex; flex-direction: row; width: 400px; justify-content: space-between; margin-bottom: 10px;">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="text" id="tanggal_lahir" name="tanggal_lahir">
        </div>
        <div style="display: flex; flex-direction: row; width: 400px; justify-content: space-between; margin-bottom: 10px;">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div>
                <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
                <label for="laki_laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                <label for="perempuan">Perempuan</label>
            </div>
        </div>
        <div style="display: flex; flex-direction: row; width: 400px; justify-content: space-between; margin-bottom: 10px;">
            <label for="pendidikan">Pendidikan</label>
            <select id="pendidikan" name="pendidikan" style="width: 100px;">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
        <div>
            <button type="submit">Kirim</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>