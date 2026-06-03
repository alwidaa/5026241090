<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">

        <h3>Form Input Data</h3>
        <br>

        <form action="/formulir/proses" method="POST">
            @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">
                    Nama
                </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">
                    Umur
                </label>

                <div class="col-sm-10">
                    <input type="number" class="form-control" name="umur">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">
                    Alamat
                </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>

        </form>

    </div>
</body>
</html>
