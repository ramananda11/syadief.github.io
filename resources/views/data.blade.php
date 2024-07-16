@extends('template.main')
@section('content')

<h2>Data Siswa</h2>
<div class="border p-2">
    <table class="table table-success table-striped">
        <a href="/tambah">Tambah Data</a>
        <thead>
            <tr>
                <th>NO</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>JURUSAN</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($siswa as $s)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $s['nis'] }}</td>
                <td>{{ $s['nama'] }}</td>
                <td>{{ $s['jenis_kelamin'] }}</td>
                <td>{{ $s['jurusan'] }}</td>
                <td>
                    <a class="btn btn-success" href="/update/{{ $s['id_siswa']}}">UPDATE</a>
                    <a class="btn btn-danger" href="/delete/{{ $s['id_siswa']}}">DELETE</a>
                </td>
            </tr>
            @php $no++; @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection