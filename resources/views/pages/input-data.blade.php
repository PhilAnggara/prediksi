@extends('layouts.app')

@section('content')
<main>
  <div class="container-fluid">
      <h1 class="mt-4 text-info font-weight-bold">Masukan Data</h1>
      <div class="breadcrumb mb-4"></div>
      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('tambah') }}">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="{{ old('nama') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="ipk_sebelumnya">IPK Sebelumnya</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ipk_sebelumnya" placeholder="IPK Sebelumnya" value="{{ old('ipk_sebelumnya') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="sks_sudah_kontrak">SKS Yang Sudah Ditempuh</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="number" class="form-control" name="sks_sudah_kontrak" placeholder="SKS Yang Sudah Ditempuh" value="{{ old('sks_sudah_kontrak') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="ips_saat_ini">IPS Saat Ini</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ips_saat_ini" placeholder="IPS Saat Ini" value="{{ old('ips_saat_ini') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="sks_sedang_kontrak">Jumlah SKS Yang Sedang Dikontrak</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="number" class="form-control" name="sks_sedang_kontrak" placeholder="Jumlah SKS Yang Sedang Dikontrak" value="{{ old('sks_sedang_kontrak') }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              Simpan
            </button>
          </form>
        </div>
      </div>
  </div>
</main>
@endsection