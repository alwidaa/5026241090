 @extends('templateweek13')
    @section('judul_halaman' ,'Data Nilai Kuliah')
    @section('konten')
<p>
	<br/><a href="/nilaikuliah/tambah" class="btn btn-primary"> Tambah Nilai Kuliah</a>
</p>
	<br/>

	<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>

    @foreach($nilaikuliah as $k)
    <tr>
        <td>{{ $k->ID }}</td>
        <td>{{ $k->NRP }}</td>
        <td>{{ $k->NilaiAngka }}</td>
        <td>{{ $k->SKS }}</td>
        <td>
            @if ($k->NilaiAngka >= 81)
                A
            @elseif ($k->NilaiAngka >= 61)
                B
            @elseif ($k->NilaiAngka >= 41)
                C
            @else
                D
            @endif
         <td>
             {{ $k->SKS * $k->NilaiAngka}}
         </td>
    </tr>
    @endforeach
</table>
    @endsection
