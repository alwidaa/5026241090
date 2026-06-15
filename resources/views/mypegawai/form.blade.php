<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validasi</title>
</head>
<body>

    <form name="formPegawai" onsubmit="return validasiForm()" method="POST">
        <label for="kodepegawai">Kode Pegawai:</label><br>
        <input type="text" id="kodepegawai" name="kodepegawai"><br><br>

        <label for="namalengkap">Nama Lengkap:</label><br>
        <input type="text" id="namalengkap" name="namalengkap"><br><br>

        <button type="submit">Simpan Data</button>
    </form>

    <script>
        function validasiForm() {
            // Mengambil nilai dari inputan
            var kode = document.forms["formPegawai"]["kodepegawai"].value;
            var nama = document.forms["formPegawai"]["namalengkap"].value;

            // Pola Regex (Pola untuk mencocokkan karakter)
            var regexAlphanumeric = /^[a-zA-Z0-9]+$/; // Hanya huruf dan angka
            var regexAlphabet = /^[a-zA-Z\s]+$/;     // Hanya huruf dan spasi

            // 1. Validasi Kode Pegawai
            if (kode === "") {
                alert("Perhatian: Kode Pegawai wajib diisi dan tidak boleh kosong!");
                return false;
            }
            if (!regexAlphanumeric.test(kode)) {
                alert("Perhatian: Kode Pegawai hanya boleh berisi huruf dan angka saja!");
                return false;
            }

            // 2. Validasi Nama Lengkap
            if (nama === "") {
                alert("Oops: Nama Lengkap wajib diisi ya!");
                return false;
            }
            if (!regexAlphabet.test(nama)) {
                alert("Oops: Nama Lengkap hanya boleh berisi huruf (tidak boleh ada angka)!");
                return false;
            }

            // Jika semua lolos validasi
            alert("Data berhasil divalidasi dan siap dikirim!");
            return true;
        }
    </script>

</body>
</html>
