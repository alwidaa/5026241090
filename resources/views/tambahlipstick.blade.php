@extends('templateweek13')
@section('judul_halaman', 'Data Lipstick')
@section('konten')

<p>
<br><br/>
<a href="/lipstick" class="btn btn-secondary mb-4">Kembali</a>
</p>

<div class="card">
    <div class="card-header">
        Form Tambah Data Lipstick
    </div>

    <div class="card-body">
        <form action="/lipstickdb/store" method="post">
            {{ csrf_field() }}

            <div class="row mb-3">
                <label for="merklipstick" class="col-sm-2 col-form-label">
                    Merk Lipstick
                </label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        name="merklipstick"
                        id="merklipstick"
                        class="form-control"
                        required
                    >
                </div>
            </div>

            <div class="row mb-3">
                <label for="stocklipstick" class="col-sm-2 col-form-label">
                    Stock Lipstick
                </label>
                <div class="col-sm-10">
                    <input
                        type="number"
                        name="stocklipstick"
                        id="stocklipstick"
                        class="form-control"
                        required
                    >
                </div>
            </div>

            <div class="row mb-3">
                <label for="tersedia" class="col-sm-2 col-form-label">
                    Tersedia
                </label>
                <div class="col-sm-10">
                    <select name="tersedia" id="tersedia" class="form-control" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="Y">Ya</option>
                        <option value="N">Tidak</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <input
                        type="submit"
                        value="Simpan Data"
                        class="btn btn-primary"
                    >
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
