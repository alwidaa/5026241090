 @extends('templateweek13')
    @section('judul_halaman' ,'Data Pegawai')
    @section('konten')
<p>
	<br/><a href="/eas/tambah" class="btn btn-primary"> Tambah Data</a>
</p>
	<br/>

	<table class="table table-striped table-hover">
    <tr>
        <th>kode pegawai</th>
        <th>nama lengkap</th>
        <th>divisi</th>
        <th>departemen</th>
        <th>Aksi</th>
    </tr>

    @foreach($mypegawai as $k)
<tr>
    <td>{{ $k->kodepegawai }}</td>
    <td>{{ $k->namalengkap }}</td>
    <td>{{ $k->divisi }}</td>
    <td>{{ $k->departemen }}</td>
    <td>
        <a href="/eas/view/{{ $k->kodepegawai }}"
           class="btn btn-success btn-sm">
           View
        </a>
    </td>
</tr>
@endforeach
</table>
    @endsection
