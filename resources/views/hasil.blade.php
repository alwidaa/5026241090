<!DOCTYPE html>
<html>
<head>
    <title>Hasil Formulir</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">

        <h3>Data yang Dikirim</h3>
        <hr>

        <div class="card">
            <div class="card-body">

                <p>
                    <strong>Nama :</strong>
                    {{ $nama }}
                </p>

                <p>
                    <strong>Umur :</strong>
                    {{ $umur }}
                </p>

                <p>
                    <strong>Alamat :</strong>
                    {{ $alamat }}
                </p>

            </div>
        </div>

    </div>
</body>
</html>
