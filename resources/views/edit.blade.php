@extends('template.main')
@section('content')

<h2>Tambah Data Siswa</h2>
<div class="border p-3">
    <form action="/edit/{{ $siswa['id_siswa'] }}">
        <div class="row">
            <label class="col-4">NIS</label>
            <input type="text" name="nis" class="form-control col" value="{{ $siswa['nis'] }}" required>
        </div>


        <div class="row mt-2">
            <label class="col-4">Nama</label>
            <input type="text" name="nama" class="form-control col" value="{{ $siswa['nama'] }}" required>
        </div>

        <div class="row mt-2">
            <label class="col-4">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select col">
                <option value="{{ $siswa['jenis_kelamin'] }}">{{ $siswa['jenis_kelamin'] }}</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>



        <div class="row mt-2">
            <label class="col-4">Jurusan</label>
            <select name="jurusan" class="form-select col">
                <option value="{{ $siswa['jurusan'] }}">{{ $siswa['jurusan'] }}</option>
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                 <option value="DKV">DKV</option>
                <option value="PSPT">PSPT</option>
            </select>
        </div>

        <div class="row mt-2">
            <label class="col-4"></label>
            <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </form>
</div>
@endsection