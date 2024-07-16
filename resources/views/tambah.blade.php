@extends('template.main')
@section('content')

<h3>Tambah Data Siswa</h3>
<div class="border p-2">
    <form action="/simpan">
        <div class="row">
            <label class="col-4">NIS</label>
            <input type="text" name="nis" class="form-control col" required>
        </div>


        <div class="row mt-2">
            <label class="col-4">Nama</label>
            <input type="text" name="nama" class="form-control col" required>
        </div>

         <div class="row mt-2">
            <label class="col-4">Jenis kelamin</label>
            <select name="jenis_kelamin" class="form-select col">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>


        <div class="row mt-2">
            <label class="col-4">Jurusan</label>
            <select name="jurusan" class="form-select col">
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                <option value="DKV">DKV</option>
                <option value="PSPT">PSPT</option>
            </select>
        </div>

        <div class="row mt-2">
            <label class="col-4"></label>
            <button type="submit" class="btn btn-info">Simpan</button>
        </div>
    </form>
</div>
@endsection