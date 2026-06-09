@extends('templateweek13')
@section('judul_halaman', 'Data Lipstick')
@section('konten')

<p>
    <br>
    <a href="/lipstickdb/tambah" class="btn btn-primary">
        Tambah Lipstick Baru
    </a>
</p>

<br/>

<p>Cari Data Lipstick :</p>
<form action="/lipstickdb/cari" method="GET">
    <input
        type="text"
        name="cari"
        placeholder="Cari Merk Lipstick..."
        class="form-control"
    >
    <br>
    <input type="submit" value="CARI" class="btn btn-success">
</form>

<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode</th>
        <th>Merk Lipstick</th>
        <th>Stock</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>

    @foreach($lipstick as $l)
    <tr>
        <td>{{ $l->kodelipstick }}</td>
        <td>{{ $l->merklipstick }}</td>
        <td>{{ $l->stocklipstick }}</td>
        <td>{{ $l->tersedia }}</td>
        <td>
            <a href="/lipstickdb/edit/{{ $l->kodelipstick }}"
               class="btn btn-warning">
               Edit
            </a>
            |
            <a href="/lipstickdb/hapus/{{ $l->kodelipstick }}"
               class="btn btn-danger">
               Hapus
            </a>
        </td>
    </tr>
    @endforeach

</table>

{{ $lipstick->links() }}

@endsection
