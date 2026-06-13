@extends('templateweek13')
@section('judul_halaman', 'Data Keranjang')
@section('konten')

<p>
    <br>
    <a href="/keranjang/tambah" class="btn btn-primary">
        Beli
    </a>
</p>

<br/>

<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah pembelian</th>
        <th>Harga per item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    @foreach($keranjang as $l)
    <tr>
        <td>{{ $l->ID}}</td>
        <td>{{ $l->KodeBarang}}</td>
        <td>{{ $l->Jumlah }}</td>
        <td>{{ $l->Harga}}</td>
        <td>{{ $l->Jumlah * $l->Harga }}</td>
        <td>
            <a href="/keranjang/hapus/{{ $l->KodeBarang }}"
               class="btn btn-danger">
               Hapus
            </a>
        </td>
    </tr>
    @endforeach

</table>


@endsection
