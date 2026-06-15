@extends('templateweek13')
@section('judul_halaman','Kode Soal mypegawai')

@section('konten')

<p>
    <a href="/eas" class="btn btn-secondary">Kembali</a>
</p>

<div class="card">
    <div class="card-header">
        Detail Pegawai
    </div>

    <div class="card-body">

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">
                Kode Pegawai
            </label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       value="{{ $pegawai->kodepegawai }}"
                       readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">
                Nama Lengkap
            </label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       value="{{ $pegawai->namalengkap }}"
                       readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">
                Divisi
            </label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       value="{{ $pegawai->divisi }}"
                       readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">
                Departemen
            </label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       value="{{ $pegawai->departemen }}"
                       readonly>
            </div>
        </div>

    </div>
</div>

@endsection
