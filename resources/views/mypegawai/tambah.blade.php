@extends('templateweek13')
@section('judul_halaman', 'Data Pegawai')
@section('konten')

<p>
<br></br><a href="/eas  " class="btn btn-secondary mb-4">Kembali</a>
</p>
    <div class="card">
        <div class="card-header">
            Form Tambah Data Pegawai
        </div>

        <div class="card-body">
            <form action="/eas/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">kode pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">nama lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control" required>
                    </div>
                </div>

                  <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
function validasiForm() {

    let kodepegawai = document.getElementById("kodepegawai").value;
    let namalengkap = document.getElementById("namalengkap").value;

    let regexKode = /^[a-zA-Z0-9]+$/;
    let regexNama = /^[a-zA-Z\s]+$/;

    if(!regexKode.test(kodepegawai)){
        alert("Kode Pegawai hanya boleh huruf dan angka");
        return false;
    }

    if(!regexNama.test(namalengkap)){
        alert("Nama Lengkap hanya boleh huruf");
        return false;
    }

    return true;
}
</script>
@endsection
